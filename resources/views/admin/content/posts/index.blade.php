@extends('admin.layouts.app')

@section('title', 'Blog Beheer')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Blog & Nieuws</h1>
            <p class="text-gray-500 mt-1">Beheer blog artikelen en nieuws</p>
        </div>
        <a href="{{ route('admin.posts.create') }}" class="bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuw Artikel
        </a>
    </div>

    <div class="bg-bcn-gray rounded-xl border border-white/10">
        @if($posts->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <p class="text-gray-500">Nog geen blog artikelen</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($posts as $post)
                    <div class="p-6 flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <h3 class="font-medium text-white">{{ $post->title }}</h3>
                                @if($post->is_published)
                                    <span class="px-2 py-1 bg-green-500/10 text-green-500 text-xs rounded-full font-medium">Gepubliceerd</span>
                                @else
                                    <span class="px-2 py-1 bg-yellow-500/10 text-yellow-500 text-xs rounded-full font-medium">Concept</span>
                                @endif
                            </div>
                            @if($post->excerpt)
                                <p class="text-gray-500 text-sm mt-2 line-clamp-2">{{ $post->excerpt }}</p>
                            @endif
                            <div class="flex items-center gap-4 mt-3 text-xs text-gray-600">
                                <span>Door: {{ $post->author->name }}</span>
                                @if($post->published_at)
                                    <span>Gepubliceerd: {{ $post->published_at->format('d-m-Y H:i') }}</span>
                                @endif
                                <span>Aangemaakt: {{ $post->created_at->format('d-m-Y') }}</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 ml-4">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="p-2 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="{{ route('admin.posts.delete', $post) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit artikel wilt verwijderen?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2 text-gray-400 hover:text-red-500 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
