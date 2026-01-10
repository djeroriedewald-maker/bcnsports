@extends('admin.layouts.app')

@section('title', isset($user) ? 'Gebruiker bewerken' : 'Nieuwe gebruiker')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.users') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar gebruikers
        </a>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">{{ isset($user) ? 'Gebruiker bewerken' : 'Nieuwe gebruiker' }}</h1>
        <p class="text-gray-500 mt-1">{{ isset($user) ? 'Wijzig de gegevens van deze gebruiker' : 'Voeg een nieuwe admin gebruiker toe' }}</p>
    </div>

    <div class="max-w-xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ isset($user) ? route('admin.users.update', $user) : route('admin.users.store') }}" method="POST">
                    @csrf
                    @if(isset($user))
                        @method('PUT')
                    @endif

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Naam</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $user->name ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('name') border-red-500 @enderror"
                            placeholder="Volledige naam"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-400 mb-2">E-mailadres</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email', $user->email ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('email') border-red-500 @enderror"
                            placeholder="email@voorbeeld.nl"
                        >
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-400 mb-2">
                            Wachtwoord
                            @if(isset($user))
                                <span class="text-gray-600">(laat leeg om niet te wijzigen)</span>
                            @endif
                        </label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            {{ isset($user) ? '' : 'required' }}
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('password') border-red-500 @enderror"
                            placeholder="••••••••"
                        >
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-gray-600 text-sm mt-1">Minimaal 8 karakters</p>
                    </div>

                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-400 mb-2">Bevestig wachtwoord</label>
                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="••••••••"
                        >
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        {{ isset($user) ? 'Opslaan' : 'Gebruiker aanmaken' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
