@extends('admin.layouts.app')

@section('title', 'Bericht bekijken')

@section('content')
    <div class="mb-8">
        <a href="{{ route('admin.messages') }}" class="text-gray-400 hover:text-white text-sm transition inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            Terug naar berichten
        </a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Main Content -->
        <div class="lg:col-span-2">
            <div class="bg-bcn-gray rounded-xl border border-white/10">
                <div class="p-6 border-b border-white/10">
                    <div class="flex items-start justify-between">
                        <div>
                            <h1 class="text-2xl font-bold text-white">{{ $message->subject }}</h1>
                            <p class="text-gray-500 mt-1">Ontvangen {{ $message->created_at->diffForHumans() }}</p>
                        </div>
                        @if($message->status === 'new')
                            <span class="px-3 py-1 bg-bcn-green/10 text-bcn-green text-sm rounded-full font-medium">Nieuw</span>
                        @elseif($message->status === 'read')
                            <span class="px-3 py-1 bg-blue-500/10 text-blue-500 text-sm rounded-full font-medium">Gelezen</span>
                        @else
                            <span class="px-3 py-1 bg-green-500/10 text-green-500 text-sm rounded-full font-medium">Beantwoord</span>
                        @endif
                    </div>
                </div>

                <div class="p-6">
                    <div class="prose prose-invert max-w-none">
                        <p class="text-gray-300 whitespace-pre-wrap">{{ $message->message }}</p>
                    </div>
                </div>
            </div>

            <!-- Admin Notes -->
            <div class="bg-bcn-gray rounded-xl border border-white/10 mt-6">
                <div class="p-6 border-b border-white/10">
                    <h2 class="text-lg font-bold text-white">Notities & Acties</h2>
                </div>
                <div class="p-6">
                    <form action="{{ route('admin.messages.update', $message) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Status</label>
                            <select name="status" class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-bcn-green transition">
                                <option value="new" {{ $message->status === 'new' ? 'selected' : '' }}>Nieuw</option>
                                <option value="read" {{ $message->status === 'read' ? 'selected' : '' }}>Gelezen</option>
                                <option value="replied" {{ $message->status === 'replied' ? 'selected' : '' }}>Beantwoord</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Admin notities</label>
                            <textarea
                                name="admin_notes"
                                rows="4"
                                class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                                placeholder="Voeg notities toe over dit bericht..."
                            >{{ $message->admin_notes }}</textarea>
                        </div>

                        <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                            Opslaan
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <div class="bg-bcn-gray rounded-xl border border-white/10">
                <div class="p-6 border-b border-white/10">
                    <h2 class="text-lg font-bold text-white">Contactgegevens</h2>
                </div>
                <div class="p-6 space-y-4">
                    <div>
                        <p class="text-gray-500 text-sm">Naam</p>
                        <p class="text-white font-medium">{{ $message->name }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">E-mail</p>
                        <a href="mailto:{{ $message->email }}" class="text-bcn-green hover:underline">{{ $message->email }}</a>
                    </div>
                    @if($message->phone)
                        <div>
                            <p class="text-gray-500 text-sm">Telefoon</p>
                            <a href="tel:{{ $message->phone }}" class="text-bcn-green hover:underline">{{ $message->phone }}</a>
                        </div>
                    @endif
                    <div>
                        <p class="text-gray-500 text-sm">Ontvangen op</p>
                        <p class="text-white">{{ $message->created_at->format('d-m-Y H:i') }}</p>
                    </div>
                    @if($message->read_at)
                        <div>
                            <p class="text-gray-500 text-sm">Gelezen op</p>
                            <p class="text-white">{{ $message->read_at->format('d-m-Y H:i') }}</p>
                        </div>
                    @endif
                </div>

                <!-- Quick Actions -->
                <div class="p-6 border-t border-white/10 space-y-3">
                    <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}"
                       class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Beantwoorden
                    </a>

                    <form action="{{ route('admin.messages.delete', $message) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je dit bericht wilt verwijderen?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full bg-red-500/10 text-red-500 font-medium py-3 rounded-lg hover:bg-red-500/20 transition flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                            Verwijderen
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
