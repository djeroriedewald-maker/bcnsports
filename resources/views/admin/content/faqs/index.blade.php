@extends('admin.layouts.app')

@section('title', 'FAQ Beheer')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">FAQ Beheer</h1>
            <p class="text-gray-500 mt-1">Beheer veelgestelde vragen</p>
        </div>
        <a href="{{ route('admin.faqs.create') }}" class="bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuwe FAQ
        </a>
    </div>

    <div class="bg-bcn-gray rounded-xl border border-white/10">
        @if($faqs->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-gray-500">Nog geen FAQ's toegevoegd</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($faqs as $faq)
                    <div class="p-6 flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <h3 class="font-medium text-white">{{ $faq->question }}</h3>
                                @if(!$faq->is_active)
                                    <span class="px-2 py-1 bg-gray-500/10 text-gray-500 text-xs rounded-full font-medium">Inactief</span>
                                @endif
                            </div>
                            <p class="text-gray-500 text-sm mt-2 line-clamp-2">{{ Str::limit($faq->answer, 150) }}</p>
                            <p class="text-gray-600 text-xs mt-2">Volgorde: {{ $faq->sort_order }}</p>
                        </div>
                        <div class="flex items-center gap-2 ml-4">
                            <a href="{{ route('admin.faqs.edit', $faq) }}" class="p-2 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="{{ route('admin.faqs.delete', $faq) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze FAQ wilt verwijderen?');">
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
