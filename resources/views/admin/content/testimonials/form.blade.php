@extends('admin.layouts.app')

@section('title', isset($testimonial) ? 'Testimonial Bewerken' : 'Nieuwe Testimonial')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.testimonials') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar testimonials
        </a>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">{{ isset($testimonial) ? 'Testimonial Bewerken' : 'Nieuwe Testimonial' }}</h1>
    </div>

    <div class="max-w-2xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial) : route('admin.testimonials.store') }}" method="POST">
                    @csrf
                    @if(isset($testimonial))
                        @method('PUT')
                    @endif

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-400 mb-2">Naam</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $testimonial->name ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('name') border-red-500 @enderror"
                            placeholder="Naam van de klant"
                        >
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="role" class="block text-sm font-medium text-gray-400 mb-2">Rol / Functie (optioneel)</label>
                        <input
                            type="text"
                            id="role"
                            name="role"
                            value="{{ old('role', $testimonial->role ?? '') }}"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="Bijv: Personal Trainer, Ondernemer"
                        >
                    </div>

                    <div class="mb-6">
                        <label for="content" class="block text-sm font-medium text-gray-400 mb-2">Review tekst</label>
                        <textarea
                            id="content"
                            name="content"
                            rows="4"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('content') border-red-500 @enderror"
                            placeholder="De review van de klant..."
                        >{{ old('content', $testimonial->content ?? '') }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Beoordeling</label>
                        <div class="flex gap-2">
                            @for($i = 1; $i <= 5; $i++)
                                <label class="cursor-pointer">
                                    <input type="radio" name="rating" value="{{ $i }}" {{ old('rating', $testimonial->rating ?? 5) == $i ? 'checked' : '' }} class="sr-only peer">
                                    <svg class="w-8 h-8 text-gray-600 peer-checked:text-bcn-green transition" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </label>
                            @endfor
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="sort_order" class="block text-sm font-medium text-gray-400 mb-2">Volgorde</label>
                        <input
                            type="number"
                            id="sort_order"
                            name="sort_order"
                            value="{{ old('sort_order', $testimonial->sort_order ?? 0) }}"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                        >
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $testimonial->is_active ?? true) ? 'checked' : '' }} class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                            <span class="ml-3 text-white">Actief (zichtbaar op de website)</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        {{ isset($testimonial) ? 'Opslaan' : 'Testimonial Toevoegen' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
