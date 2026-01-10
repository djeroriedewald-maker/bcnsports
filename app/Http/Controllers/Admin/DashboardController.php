<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_messages' => ContactMessage::count(),
            'new_messages' => ContactMessage::where('status', 'new')->count(),
            'read_messages' => ContactMessage::where('status', 'read')->count(),
            'replied_messages' => ContactMessage::where('status', 'replied')->count(),
        ];

        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages'));
    }

    public function messages(Request $request)
    {
        $query = ContactMessage::latest();

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        $messages = $query->paginate(15);

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

    public function exportMessages(Request $request)
    {
        $query = ContactMessage::latest();

        if ($request->has('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
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
