@extends('admin.layouts.app')

@section('title', isset($faq) ? 'FAQ Bewerken' : 'Nieuwe FAQ')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.faqs') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar FAQ's
        </a>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">{{ isset($faq) ? 'FAQ Bewerken' : 'Nieuwe FAQ' }}</h1>
    </div>

    <div class="max-w-2xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ isset($faq) ? route('admin.faqs.update', $faq) : route('admin.faqs.store') }}" method="POST">
                    @csrf
                    @if(isset($faq))
                        @method('PUT')
                    @endif

                    <div class="mb-6">
                        <label for="question" class="block text-sm font-medium text-gray-400 mb-2">Vraag</label>
                        <input
                            type="text"
                            id="question"
                            name="question"
                            value="{{ old('question', $faq->question ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('question') border-red-500 @enderror"
                            placeholder="Bijv: Wat kost een proefles?"
                        >
                        @error('question')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="answer" class="block text-sm font-medium text-gray-400 mb-2">Antwoord</label>
                        <textarea
                            id="answer"
                            name="answer"
                            rows="5"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('answer') border-red-500 @enderror"
                            placeholder="Het antwoord op de vraag..."
                        >{{ old('answer', $faq->answer ?? '') }}</textarea>
                        @error('answer')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="sort_order" class="block text-sm font-medium text-gray-400 mb-2">Volgorde</label>
                        <input
                            type="number"
                            id="sort_order"
                            name="sort_order"
                            value="{{ old('sort_order', $faq->sort_order ?? 0) }}"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                            placeholder="0"
                        >
                        <p class="text-gray-600 text-sm mt-1">Lagere nummers worden eerst getoond</p>
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_active" value="1" {{ old('is_active', $faq->is_active ?? true) ? 'checked' : '' }} class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                            <span class="ml-3 text-white">Actief (zichtbaar op de website)</span>
                        </label>
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        {{ isset($faq) ? 'Opslaan' : 'FAQ Toevoegen' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
