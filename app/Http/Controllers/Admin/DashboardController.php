<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function analytics()
    {
        // Messages this month vs last month
        $messagesThisMonth = ContactMessage::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        $messagesLastMonth = ContactMessage::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();

        $messagesChange = $messagesLastMonth > 0
            ? round((($messagesThisMonth - $messagesLastMonth) / $messagesLastMonth) * 100)
            : ($messagesThisMonth > 0 ? 100 : 0);

        // Response rate
        $totalMessages = ContactMessage::count();
        $repliedMessages = ContactMessage::where('status', 'replied')->count();
        $responseRate = $totalMessages > 0 ? round(($repliedMessages / $totalMessages) * 100) : 0;

        // Average response time (calculate in PHP to be database-agnostic)
        $messagesWithReadTime = ContactMessage::whereNotNull('read_at')->get(['created_at', 'read_at']);
        $avgResponseTimeText = '-';

        if ($messagesWithReadTime->count() > 0) {
            $totalHours = 0;
            foreach ($messagesWithReadTime as $msg) {
                $totalHours += $msg->created_at->diffInHours($msg->read_at);
            }
            $avgHours = $totalHours / $messagesWithReadTime->count();

            if ($avgHours < 1) {
                $avgResponseTimeText = '< 1 uur';
            } elseif ($avgHours < 24) {
                $avgResponseTimeText = round($avgHours) . ' uur';
            } else {
                $avgResponseTimeText = round($avgHours / 24, 1) . ' dagen';
            }
        }

        $stats = [
            'messages_this_month' => $messagesThisMonth,
            'messages_change' => $messagesChange,
            'response_rate' => $responseRate,
            'avg_response_time' => $avgResponseTimeText,
        ];

        // Subject breakdown
        $subjectCounts = ContactMessage::select('subject')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('subject')
            ->orderByDesc('count')
            ->limit(6)
            ->get();

        $subjectData = [
            'labels' => $subjectCounts->pluck('subject')->toArray(),
            'data' => $subjectCounts->pluck('count')->toArray(),
        ];

        // Messages by day of week (calculate in PHP to be database-agnostic)
        $allMessages = ContactMessage::select('created_at')->get();
        $weekdayCounts = [0, 0, 0, 0, 0, 0, 0]; // Sun to Sat

        foreach ($allMessages as $msg) {
            $dayOfWeek = $msg->created_at->dayOfWeek; // 0 = Sunday, 6 = Saturday
            $weekdayCounts[$dayOfWeek]++;
        }

        $weekdays = ['Zo', 'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za'];
        $weekdayData = [
            'labels' => $weekdays,
            'data' => $weekdayCounts,
        ];

        return view('admin.analytics', compact('stats', 'subjectData', 'weekdayData'));
    }

    public function index()
    {
        $stats = [
            'total_messages' => ContactMessage::count(),
            'new_messages' => ContactMessage::where('status', 'new')->count(),
            'read_messages' => ContactMessage::where('status', 'read')->count(),
            'replied_messages' => ContactMessage::where('status', 'replied')->count(),
        ];

        $recentMessages = ContactMessage::latest()->take(5)->get();

        // Chart data - messages per day for last 30 days
        $chartData = ContactMessage::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->pluck('count', 'date')
            ->toArray();

        // Fill in missing days with 0
        $dates = [];
        $counts = [];
        for ($i = 29; $i >= 0; $i--) {
            $date = now()->subDays($i)->format('Y-m-d');
            $dates[] = now()->subDays($i)->format('d M');
            $counts[] = $chartData[$date] ?? 0;
        }

        $chartData = [
            'labels' => $dates,
            'data' => $counts,
        ];

        return view('admin.dashboard', compact('stats', 'recentMessages', 'chartData'));
    }

    public function messages(Request $request)
    {
        $query = ContactMessage::latest();

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $messages = $query->paginate(15)->withQueryString();

        return view('admin.messages.index', compact('messages'));
    }

    public function showMessage(ContactMessage $message)
    {
        // Mark as read when viewing
        if (!$message->read_at) {
            $message->markAsRead();
        }

        return view('admin.messages.show', compact('message'));
    }

    public function updateMessageStatus(Request $request, ContactMessage $message)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied',
            'admin_notes' => 'nullable|string|max:5000',
        ]);

        $message->update($validated);

        return back()->with('success', 'Bericht status bijgewerkt.');
    }

    public function deleteMessage(ContactMessage $message)
    {
        $message->delete();

        return redirect()->route('admin.messages')->with('success', 'Bericht verwijderd.');
    }

    public function bulkAction(Request $request)
    {
        $validated = $request->validate([
            'action' => 'required|in:delete,mark_read,mark_replied',
            'ids' => 'required|array',
            'ids.*' => 'exists:contact_messages,id',
        ]);

        $count = count($validated['ids']);

        switch ($validated['action']) {
            case 'delete':
                ContactMessage::whereIn('id', $validated['ids'])->delete();
                $message = "{$count} berichten verwijderd.";
                break;
            case 'mark_read':
                ContactMessage::whereIn('id', $validated['ids'])->update(['status' => 'read', 'read_at' => now()]);
                $message = "{$count} berichten gemarkeerd als gelezen.";
                break;
            case 'mark_replied':
                ContactMessage::whereIn('id', $validated['ids'])->update(['status' => 'replied']);
                $message = "{$count} berichten gemarkeerd als beantwoord.";
                break;
        }

        return back()->with('success', $message);
    }

    public function exportMessages(Request $request)
    {
        $query = ContactMessage::latest();

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhere('message', 'like', "%{$search}%");
            });
        }

        $messages = $query->get();

        $filename = 'berichten-' . now()->format('Y-m-d-His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($messages) {
            $file = fopen('php://output', 'w');

            // Add BOM for Excel UTF-8 compatibility
            fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));

            // Header row
            fputcsv($file, ['ID', 'Naam', 'Email', 'Telefoon', 'Onderwerp', 'Bericht', 'Status', 'Admin Notities', 'Ontvangen op', 'Gelezen op'], ';');

            foreach ($messages as $message) {
                fputcsv($file, [
                    $message->id,
                    $message->name,
                    $message->email,
                    $message->phone ?? '',
                    $message->subject,
                    $message->message,
                    $message->status,
                    $message->admin_notes ?? '',
                    $message->created_at->format('d-m-Y H:i'),
                    $message->read_at ? $message->read_at->format('d-m-Y H:i') : '',
                ], ';');
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
