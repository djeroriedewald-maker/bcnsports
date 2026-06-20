@extends('admin.layouts.app')

@section('title', 'Berichten')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Berichten</h1>
            <p class="text-gray-500 mt-1">Beheer alle contactformulier berichten</p>
        </div>
        <a href="{{ route('admin.messages.export', request()->only('status', 'search')) }}" class="bg-bcn-gray border border-white/10 text-white font-medium px-4 py-2 rounded-lg hover:bg-white/5 transition inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            Export CSV
        </a>
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <form action="{{ route('admin.messages') }}" method="GET" class="flex gap-4">
            @if(request('status'))
                <input type="hidden" name="status" value="{{ request('status') }}">
            @endif
            <div class="flex-1 relative">
                <svg class="w-5 h-5 text-gray-500 absolute left-4 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Zoek op naam, email, onderwerp of bericht..."
                    class="w-full bg-bcn-gray border border-white/10 rounded-lg pl-12 pr-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                >
            </div>
            <button type="submit" class="bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition">
                Zoeken
            </button>
            @if(request('search'))
                <a href="{{ route('admin.messages', request()->only('status')) }}" class="bg-bcn-gray border border-white/10 text-white font-medium px-6 py-3 rounded-lg hover:bg-white/5 transition">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <!-- Filter Tabs -->
    <div class="mb-6 flex gap-2">
        <a href="{{ route('admin.messages', request()->only('search')) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ !request('status') || request('status') === 'all' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Alle
        </a>
        <a href="{{ route('admin.messages', array_merge(request()->only('search'), ['status' => 'new'])) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'new' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Nieuw
        </a>
        <a href="{{ route('admin.messages', array_merge(request()->only('search'), ['status' => 'read'])) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'read' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Gelezen
        </a>
        <a href="{{ route('admin.messages', array_merge(request()->only('search'), ['status' => 'replied'])) }}"
           class="px-4 py-2 rounded-lg text-sm font-medium transition {{ request('status') === 'replied' ? 'bg-bcn-green text-bcn-dark' : 'bg-bcn-gray text-gray-400 hover:text-white border border-white/10' }}">
            Beantwoord
        </a>
    </div>

    <!-- Messages List -->
    <form id="bulkForm" action="{{ route('admin.messages.bulk') }}" method="POST">
        @csrf
        <input type="hidden" name="action" id="bulkAction" value="">

        <!-- Bulk Actions Bar -->
        <div id="bulkBar" class="mb-4 bg-bcn-gray rounded-lg border border-white/10 p-4 hidden">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <span class="text-white text-sm"><span id="selectedCount">0</span> geselecteerd</span>
                    <button type="button" onclick="submitBulk('mark_read')" class="text-sm text-blue-400 hover:text-blue-300 transition">
                        Markeer als gelezen
                    </button>
                    <button type="button" onclick="submitBulk('mark_replied')" class="text-sm text-green-400 hover:text-green-300 transition">
                        Markeer als beantwoord
                    </button>
                    <button type="button" onclick="submitBulk('delete')" class="text-sm text-red-400 hover:text-red-300 transition">
                        Verwijderen
                    </button>
                </div>
                <button type="button" onclick="deselectAll()" class="text-sm text-gray-400 hover:text-white transition">
                    Deselecteer alles
                </button>
            </div>
        </div>

        <div class="bg-bcn-gray rounded-xl border border-white/10">
            @if($messages->isEmpty())
                <div class="p-12 text-center">
                    <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                    </svg>
                    <p class="text-gray-500">Geen berichten gevonden</p>
                </div>
            @else
                <!-- Select All Header -->
                <div class="flex items-center p-4 border-b border-white/10 bg-white/5">
                    <label class="flex items-center cursor-pointer select-none">
                        <input
                            type="checkbox"
                            id="selectAllCheckbox"
                            class="w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark cursor-pointer"
                            onchange="toggleSelectAll(this)"
                        >
                        <span class="ml-3 text-sm text-gray-400">Selecteer alle berichten op deze pagina</span>
                    </label>
                </div>
                <div class="divide-y divide-white/10">
                    @foreach($messages as $message)
                        <div class="flex items-start p-6 hover:bg-white/5 transition">
                            <div class="mr-4 pt-1">
                                <input
                                    type="checkbox"
                                    name="ids[]"
                                    value="{{ $message->id }}"
                                    class="message-checkbox w-5 h-5 rounded border-white/20 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark cursor-pointer"
                                    onchange="updateBulkBar()"
                                >
                            </div>
                            <a href="{{ route('admin.messages.show', $message) }}" class="flex-1 block">
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
                        </div>
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
    </form>

    <script>
        function updateBulkBar() {
            const all = document.querySelectorAll('.message-checkbox');
            const checked = document.querySelectorAll('.message-checkbox:checked');
            const bulkBar = document.getElementById('bulkBar');
            const selectedCount = document.getElementById('selectedCount');

            if (checked.length > 0) {
                bulkBar.classList.remove('hidden');
                selectedCount.textContent = checked.length;
            } else {
                bulkBar.classList.add('hidden');
            }

            // Keep the "select all" checkbox in sync
            const selectAll = document.getElementById('selectAllCheckbox');
            if (selectAll) {
                selectAll.checked = all.length > 0 && checked.length === all.length;
                selectAll.indeterminate = checked.length > 0 && checked.length < all.length;
            }
        }

        function toggleSelectAll(source) {
            document.querySelectorAll('.message-checkbox').forEach(cb => cb.checked = source.checked);
            updateBulkBar();
        }

        function deselectAll() {
            document.querySelectorAll('.message-checkbox').forEach(cb => cb.checked = false);
            const selectAll = document.getElementById('selectAllCheckbox');
            if (selectAll) {
                selectAll.checked = false;
                selectAll.indeterminate = false;
            }
            updateBulkBar();
        }

        function submitBulk(action) {
            if (action === 'delete' && !confirm('Weet je zeker dat je de geselecteerde berichten wilt verwijderen?')) {
                return;
            }
            document.getElementById('bulkAction').value = action;
            document.getElementById('bulkForm').submit();
        }
    </script>
@endsection
