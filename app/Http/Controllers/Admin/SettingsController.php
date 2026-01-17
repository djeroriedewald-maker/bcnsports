<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class SettingsController extends Controller
{
    public function site()
    {
        $maintenanceMode = Setting::isMaintenanceMode();
        return view('admin.settings.site', compact('maintenanceMode'));
    }

    public function toggleMaintenance(Request $request)
    {
        $enabled = $request->boolean('maintenance_mode');
        Setting::set('maintenance_mode', $enabled ? '1' : '0');

        $message = $enabled
            ? 'Website staat nu in onderhoudsmodus. Bezoekers zien de "Under Construction" pagina.'
            : 'Website is weer zichtbaar voor bezoekers.';

        return back()->with('success', $message);
    }

    public function password()
    {
        return view('admin.settings.password');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        if (!Hash::check($validated['current_password'], Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Het huidige wachtwoord is onjuist.']);
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('success', 'Wachtwoord succesvol gewijzigd.');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.settings.users', compact('users'));
    }

    public function createUser()
    {
        return view('admin.settings.user-form');
    }

    public function storeUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.users')->with('success', 'Gebruiker succesvol aangemaakt.');
    }

    public function editUser(User $user)
    {
        return view('admin.settings.user-form', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => ['nullable', 'confirmed', Password::min(8)],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('admin.users')->with('success', 'Gebruiker succesvol bijgewerkt.');
    }

    public function deleteUser(User $user)
    {
        if ($user->id === Auth::id()) {
            return back()->with('error', 'Je kunt jezelf niet verwijderen.');
        }

        if (User::count() <= 1) {
            return back()->with('error', 'Er moet minimaal één admin gebruiker zijn.');
        }

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Gebruiker verwijderd.');
    }
}
