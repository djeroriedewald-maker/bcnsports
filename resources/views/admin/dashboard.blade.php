@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-white">Dashboard</h1>
        <p class="text-gray-500 mt-1">Welkom terug, {{ Auth::user()->name }}!</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Totaal Berichten</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['total_messages'] }}</p>
                </div>
                <div class="w-12 h-12 bg-bcn-green/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-bcn-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Nieuwe Berichten</p>
                    <p class="text-3xl font-bold text-bcn-green mt-1">{{ $stats['new_messages'] }}</p>
                </div>
                <div class="w-12 h-12 bg-bcn-green/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-bcn-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Gelezen</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['read_messages'] }}</p>
                </div>
                <div class="w-12 h-12 bg-blue-500/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl p-6 border border-white/10">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Beantwoord</p>
                    <p class="text-3xl font-bold text-white mt-1">{{ $stats['replied_messages'] }}</p>
                </div>
                <div class="w-12 h-12 bg-green-500/10 rounded-full flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Messages -->
    <div class="bg-bcn-gray rounded-xl border border-white/10">
        <div class="p-6 border-b border-white/10 flex justify-between items-center">
            <h2 class="text-xl font-bold text-white">Recente Berichten</h2>
            <a href="{{ route('admin.messages') }}" class="text-bcn-green text-sm hover:underline">Alle berichten →</a>
        </div>

        @if($recentMessages->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                </svg>
                <p class="text-gray-500">Nog geen berichten ontvangen</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($recentMessages as $message)
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
                                <p class="text-gray-400 text-sm mt-1">{{ $message->subject }}</p>
                                <p class="text-gray-500 text-sm mt-2 line-clamp-1">{{ Str::limit($message->message, 100) }}</p>
                            </div>
                            <p class="text-gray-600 text-xs ml-4">{{ $message->created_at->diffForHumans() }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
@endsection
