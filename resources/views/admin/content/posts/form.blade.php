@extends('admin.layouts.app')

@section('title', isset($post) ? 'Artikel Bewerken' : 'Nieuw Artikel')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.posts') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar artikelen
        </a>
    </div>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">{{ isset($post) ? 'Artikel Bewerken' : 'Nieuw Artikel' }}</h1>
    </div>

    <div class="max-w-4xl">
        <div class="bg-bcn-gray rounded-xl border border-white/10">
            <div class="p-6">
                <form action="{{ isset($post) ? route('admin.posts.update', $post) : route('admin.posts.store') }}" method="POST">
                    @csrf
                    @if(isset($post))
                        @method('PUT')
                    @endif

                    <div class="mb-6">
                        <label for="title" class="block text-sm font-medium text-gray-400 mb-2">Titel</label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            value="{{ old('title', $post->title ?? '') }}"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('title') border-red-500 @enderror"
                            placeholder="Titel van het artikel"
                        >
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="slug" class="block text-sm font-medium text-gray-400 mb-2">URL Slug (optioneel)</label>
                        <input
                            type="text"
                            id="slug"
                            name="slug"
                            value="{{ old('slug', $post->slug ?? '') }}"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('slug') border-red-500 @enderror"
                            placeholder="wordt-automatisch-gegenereerd"
                        >
                        @error('slug')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-gray-600 text-sm mt-1">Laat leeg voor automatische generatie</p>
                    </div>

                    <div class="mb-6">
                        <label for="excerpt" class="block text-sm font-medium text-gray-400 mb-2">Samenvatting (optioneel)</label>
                        <textarea
                            id="excerpt"
                            name="excerpt"
                            rows="2"
                            maxlength="500"
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition @error('excerpt') border-red-500 @enderror"
                            placeholder="Korte samenvatting voor previews..."
                        >{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
                        @error('excerpt')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="content" class="block text-sm font-medium text-gray-400 mb-2">Inhoud</label>
                        <textarea
                            id="content"
                            name="content"
                            rows="15"
                            required
                            class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition font-mono text-sm @error('content') border-red-500 @enderror"
                            placeholder="Schrijf je artikel hier... (HTML is toegestaan)"
                        >{{ old('content', $post->content ?? '') }}</textarea>
                        @error('content')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <p class="text-gray-600 text-sm mt-1">Je kunt HTML gebruiken voor opmaak</p>
                    </div>

                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" name="is_published" value="1" {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }} class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                            <span class="ml-3 text-white">Publiceren</span>
                        </label>
                        <p class="text-gray-600 text-sm mt-1 ml-8">Artikel wordt direct zichtbaar op de website</p>
                    </div>

                    <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                        {{ isset($post) ? 'Opslaan' : 'Artikel Aanmaken' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
