@extends('admin.layouts.app')

@section('title', 'Site Instellingen')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-bold text-white">Site Instellingen</h1>
    <p class="text-gray-400 mt-1">Beheer de algemene website instellingen</p>
</div>

<!-- Maintenance Mode Card -->
<div class="bg-bcn-gray rounded-xl border border-white/10 p-6 max-w-2xl">
    <div class="flex items-start gap-4">
        <div class="w-12 h-12 bg-{{ $maintenanceMode ? 'yellow-500' : 'bcn-green' }}/10 rounded-xl flex items-center justify-center flex-shrink-0">
            @if($maintenanceMode)
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            @else
                <svg class="w-6 h-6 text-bcn-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                </svg>
            @endif
        </div>
        <div class="flex-1">
            <h2 class="text-lg font-semibold text-white mb-1">Onderhoudsmodus</h2>
            <p class="text-gray-400 text-sm mb-4">
                Wanneer de onderhoudsmodus actief is, zien bezoekers een "Under Construction" pagina.
                Als admin kun je de website altijd bekijken.
            </p>

            <!-- Current Status -->
            <div class="flex items-center gap-2 mb-6">
                <span class="text-sm text-gray-400">Huidige status:</span>
                @if($maintenanceMode)
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-yellow-500/10 text-yellow-500 border border-yellow-500/20">
                        <span class="w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></span>
                        Onderhoudsmodus actief
                    </span>
                @else
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-bcn-green/10 text-bcn-green border border-bcn-green/20">
                        <span class="w-2 h-2 bg-bcn-green rounded-full"></span>
                        Website online
                    </span>
                @endif
            </div>

            <!-- Toggle Form -->
            <form action="{{ route('admin.site.maintenance') }}" method="POST">
                @csrf
                @if($maintenanceMode)
                    <input type="hidden" name="maintenance_mode" value="0">
                    <button type="submit" class="inline-flex items-center gap-2 px-5 py-2.5 bg-bcn-green hover:bg-bcn-green/90 text-bcn-dark font-semibold rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                        Website Online Zetten
                    </button>
                @else
                    <input type="hidden" name="maintenance_mode" value="1">
                    <button type="submit" class="inline-flex items-center gap-2 px-5 py-2.5 bg-yellow-500 hover:bg-yellow-600 text-bcn-dark font-semibold rounded-lg transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        Onderhoudsmodus Activeren
                    </button>
                @endif
            </form>
        </div>
    </div>
</div>

@if($maintenanceMode)
<!-- Preview Note -->
<div class="mt-6 bg-yellow-500/5 border border-yellow-500/20 rounded-xl p-4 max-w-2xl">
    <div class="flex items-start gap-3">
        <svg class="w-5 h-5 text-yellow-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <div>
            <p class="text-yellow-500 text-sm font-medium">Let op</p>
            <p class="text-gray-400 text-sm mt-1">
                Je bent ingelogd als admin, dus je kunt de website nog steeds bekijken.
                Gebruik de "Bekijk Website" knop in de navigatie om te zien hoe de site er voor bezoekers uitziet terwijl je ingelogd bent.
            </p>
        </div>
    </div>
</div>
@endif
@endsection
