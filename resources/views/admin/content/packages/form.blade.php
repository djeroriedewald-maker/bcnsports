@extends('admin.layouts.app')

@section('title', isset($package) ? 'Pakket Bewerken' : 'Nieuw Pakket')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.packages') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar pakketten
        </a>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">{{ isset($package) ? 'Pakket Bewerken' : 'Nieuw Pakket' }}</h1>
    </div>

    <div class="max-w-2xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ isset($package) ? route('admin.packages.update', $package) : route('admin.packages.store') }}" method="POST">
                    @csrf
                    @if(isset($package))
                        @method('PUT')
                    @endif

                    <div class="mb-6">
                        <label for="category" class="block text-sm font-medium text-gray-400 mb-2">Categorie</label>
                        <select
                            id="category"
                            name="category"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-bcn-green transition @error('category') border-red-500 @enderror"
                        >
                            @foreach(\App\Models\PricingPackage::$categories as $value => $label)
                                <option value="{{ $value }}" {{ old('category', $package->category ?? 'personal_1on1') === $value ? 'selected' : '' }}>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Naam</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $package->name ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('name') border-red-500 @enderror"
                            placeholder="Bijv: 10x Strippenkaart"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-400 mb-2">Beschrijving (optioneel)</label>
                        <textarea
                            id="description"
                            name="description"
                            rows="2"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="Bijv: Bespaar €100"
                        >{{ old('description', $package->description ?? '') }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-400 mb-2">Prijs (€)</label>
                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="{{ old('price', $package->price ?? '') }}"
                                step="0.01"
                                min="0"
                                required
                                class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('price') border-red-500 @enderror"
                                placeholder="649.00"
                            >
                            @error('price')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-gray-600 text-xs mt-1">Gebruik 0 voor "Op aanvraag"</p>
                        </div>
                        <div>
                            <label for="price_per_session" class="block text-sm font-medium text-gray-400 mb-2">Prijs per sessie (€)</label>
                            <input
                                type="number"
                                id="price_per_session"
                                name="price_per_session"
                                value="{{ old('price_per_session', $package->price_per_session ?? '') }}"
                                step="0.01"
                                min="0"
                                class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                                placeholder="64.90"
                            >
                            <p class="text-gray-600 text-xs mt-1">Optioneel, voor strippenkaarten</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="period" class="block text-sm font-medium text-gray-400 mb-2">Periode / Eenheid</label>
                        <input
                            type="text"
                            id="period"
                            name="period"
                            value="{{ old('period', $package->period ?? 'sessie') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="sessie, persoon / sessie, maand"
                        >
                        <p class="text-gray-600 text-xs mt-1">Bijv: "sessie", "persoon / sessie", "maand"</p>
                    </div>

                    <div class="mb-6">
                        <label for="features" class="block text-sm font-medium text-gray-400 mb-2">Features (één per regel)</label>
                        <textarea
                            id="features"
                            name="features"
                            rows="5"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="10 sessies van 60 min&#10;6 maanden geldig&#10;Voortgangsgesprekken"
                        >{{ old('features', isset($package) && $package->features ? implode("\n", $package->features) : '') }}</textarea>
                        <p class="text-gray-600 text-sm mt-1">Elke regel wordt een feature item</p>
                    </div>

                    <div class="mb-6">
                        <label for="sort_order" class="block text-sm font-medium text-gray-400 mb-2">Volgorde</label>
                        <input
                            type="number"
                            id="sort_order"
                            name="sort_order"
                            value="{{ old('sort_order', $package->sort_order ?? 0) }}"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                        >
                        <p class="text-gray-600 text-xs mt-1">Lagere nummers verschijnen eerst</p>
                    </div>

                    <div class="mb-6 space-y-3">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_popular" value="1" {{ old('is_popular', $package->is_popular ?? false) ? 'checked' : '' }} class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                            <span class="ml-3 text-white">Populair (toon badge)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $package->is_active ?? true) ? 'checked' : '' }} class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                            <span class="ml-3 text-white">Actief (zichtbaar op de website)</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        {{ isset($package) ? 'Opslaan' : 'Pakket Toevoegen' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
