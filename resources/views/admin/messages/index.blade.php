@extends('admin.layouts.app')

@section('title', 'Berichten')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Berichten</h1>
            <p class="text-gray-500 mt-1">Beheer alle contactformulier berichten</p>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="mb-6 flex gap-2">
        <a href="{{ route('admin.messages') }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ !request('status') || request('status') === 'all' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Alle
        </a>
        <a href="{{ route('admin.messages', ['status' => 'new']) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'new' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Nieuw
        </a>
        <a href="{{ route('admin.messages', ['status' => 'read']) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'read' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Gelezen
        </a>
        <a href="{{ route('admin.messages', ['status' => 'replied']) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'replied' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Beantwoord
        </a>
    </div>

    <!-- Messages List -->
    <div class="bg-bcn-gray rounded-xl border border-white/10">
        @if($messages->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
                <p class="text-gray-500">Geen berichten gevonden</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($messages as $message)
                    <a href="{{ route('admin.messages.show', $message) }}" class="block p-6 hover:bg-white/5 transition">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center gap-3">
                                    <h3 class="font-medium text-white">{{ $message->name }}</h3>
                                    @if($message->status === 'new')
                                        <span class="px-2 py-1 bg-bcn-green/10 text-bcn-green text-xs rounded-full font-medium">Nieuw</span>
                                    @elseif($message->status === 'read')
                                        <span class="px-2 py-1 bg-blue-500/10 text-blue-500 text-xs rounded-full font-medium">Gelezen</span>
                                    @else
                                        <span class="px-2 py-1 bg-green-500/10 text-green-500 text-xs rounded-full font-medium">Beantwoord</span>
                                    @endif
                                </div>
                                <p class="text-gray-400 text-sm mt-1">{{ $message->email }}</p>
                                <p class="text-white text-sm mt-2 font-medium">{{ $message->subject }}</p>
                                <p class="text-gray-500 text-sm mt-1 line-clamp-2">{{ Str::limit($message->message, 150) }}</p>
                            </div>
                            <div class="text-right ml-4">
                                <p class="text-gray-600 text-xs">{{ $message->created_at->diffForHumans() }}</p>
                                <p class="text-gray-700 text-xs mt-1">{{ $message->created_at->format('d-m-Y H:i') }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($messages->hasPages())
                <div class="p-6 border-t border-white/10">
                    {{ $messages->links() }}
                </div>
            @endif
        @endif
    </div>
@endsection
