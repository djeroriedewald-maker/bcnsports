@extends('admin.layouts.app')

@section('title', 'Gebruikers beheren')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Gebruikers</h1>
            <p class="text-gray-500 mt-1">Beheer admin gebruikers</p>
        </div>
        <a href="{{ route('admin.users.create') }}" class="bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuwe gebruiker
        </a>
    </div>

    <div class="bg-bcn-gray rounded-xl border border-white/10">
        @if($users->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                <p class="text-gray-500">Geen gebruikers gevonden</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($users as $user)
                    <div class="p-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-bcn-green rounded-full flex items-center justify-center text-bcn-dark font-bold text-lg">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <div class="ml-4">
                                <h3 class="font-medium text-white">{{ $user->name }}</h3>
                                <p class="text-gray-500 text-sm">{{ $user->email }}</p>
                            </div>
                            @if($user->id === Auth::id())
                                <span class="ml-3 px-2 py-1 bg-bcn-green/10 text-bcn-green text-xs rounded-full font-medium">Jij</span>
                            @endif
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.users.edit', $user) }}" class="p-2 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            @if($user->id !== Auth::id())
                                <form action="{{ route('admin.users.delete', $user) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze gebruiker wilt verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-400 hover:text-red-500 transition">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
