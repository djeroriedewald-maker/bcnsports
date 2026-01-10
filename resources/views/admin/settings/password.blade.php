@extends('admin.layouts.app')

@section('title', 'Wachtwoord wijzigen')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Wachtwoord wijzigen</h1>
        <p class="text-gray-500 mt-1">Wijzig je admin wachtwoord</p>
    </div>

    <div class="max-w-xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ route('admin.password.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="current_password" class="block text-sm font-medium text-gray-400 mb-2">Huidig wachtwoord</label>
                        <input
                            type="password"
                            id="current_password"
                            name="current_password"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('current_password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        @error('current_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Nieuw wachtwoord</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-gray-600 text-sm mt-1">Minimaal 8 karakters</p>
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-400 mb-2">Bevestig nieuw wachtwoord</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="••••••••"
                        >
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        Wachtwoord wijzigen
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
