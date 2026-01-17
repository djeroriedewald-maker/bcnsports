@extends('admin.layouts.app')

@section('title', 'Backups')

@section('content')
<div class="mb-8 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-white">Backups</h1>
        <p class="text-gray-400 mt-1">Beheer database backups van je website</p>
    </div>
    <form action="{{ route('admin.backups.create') }}" method="POST">
        @csrf
        <button type="submit" class="inline-flex items-center gap-2 px-5 py-2.5 bg-bcn-green hover:bg-bcn-green/90 text-bcn-dark font-semibold rounded-lg transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuwe Backup
        </button>
    </form>
</div>

<!-- Database Info -->
<div class="bg-bcn-gray rounded-xl border border-white/10 p-6 mb-8">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-{{ $databaseExists ? 'bcn-green' : 'red-500' }}/10 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-{{ $databaseExists ? 'bcn-green' : 'red-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
            </svg>
        </div>
        <div>
            <h2 class="text-lg font-semibold text-white">Database Informatie</h2>
            <p class="text-gray-400 text-sm">Type: SQLite | Huidige grootte: <span class="text-bcn-green font-medium">{{ $databaseSize }}</span></p>
            <p class="text-gray-600 text-xs mt-1 font-mono">{{ $databasePath }}</p>
        </div>
    </div>
</div>

<!-- Info Box -->
<div class="bg-blue-500/5 border border-blue-500/20 rounded-xl p-4 mb-8">
    <div class="flex items-start gap-3">
        <svg class="w-5 h-5 text-blue-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <div>
            <p class="text-blue-400 text-sm font-medium">Over Backups</p>
            <p class="text-gray-400 text-sm mt-1">
                Backups bevatten alle data in de database: berichten, FAQ's, testimonials, prijzen en gebruikers.
                Bij het terugzetten wordt automatisch een backup gemaakt van de huidige staat.
            </p>
        </div>
    </div>
</div>

<!-- Backups List -->
<div class="bg-bcn-gray rounded-xl border border-white/10 overflow-hidden">
    <div class="px-6 py-4 border-b border-white/10">
        <h2 class="text-lg font-semibold text-white">Beschikbare Backups</h2>
    </div>

    @if(count($backups) > 0)
        <div class="divide-y divide-white/5">
            @foreach($backups as $backup)
                <div class="px-6 py-4 flex items-center justify-between hover:bg-white/5 transition">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-white/5 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-medium">{{ $backup['filename'] }}</p>
                            <p class="text-gray-500 text-sm">{{ $backup['date'] }} | {{ $backup['size'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('admin.backups.download', $backup['filename']) }}" class="p-2 text-gray-400 hover:text-bcn-green hover:bg-bcn-green/10 rounded-lg transition" title="Download">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                            </svg>
                        </a>
                        <form action="{{ route('admin.backups.restore', $backup['filename']) }}" method="POST" class="inline" onsubmit="return confirm('Weet je zeker dat je deze backup wilt terugzetten? De huidige data wordt overschreven (er wordt automatisch een backup gemaakt).');">
                            @csrf
                            <button type="submit" class="p-2 text-gray-400 hover:text-yellow-500 hover:bg-yellow-500/10 rounded-lg transition" title="Terugzetten">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                            </button>
                        </form>
                        <form action="{{ route('admin.backups.delete', $backup['filename']) }}" method="POST" class="inline" onsubmit="return confirm('Weet je zeker dat je deze backup wilt verwijderen? Dit kan niet ongedaan worden gemaakt.');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-500 hover:bg-red-500/10 rounded-lg transition" title="Verwijderen">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="px-6 py-12 text-center">
            <div class="w-16 h-16 bg-white/5 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                </svg>
            </div>
            <p class="text-gray-400 mb-2">Nog geen backups aangemaakt</p>
            <p class="text-gray-600 text-sm">Maak je eerste backup om je data veilig te stellen</p>
        </div>
    @endif
</div>
@endsection
