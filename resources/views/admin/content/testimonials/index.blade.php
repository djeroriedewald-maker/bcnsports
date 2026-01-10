@extends('admin.layouts.app')

@section('title', 'Testimonials Beheer')

@section('content')
    <div class="mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold text-white">Testimonials</h1>
            <p class="text-gray-500 mt-1">Beheer klant reviews en testimonials</p>
        </div>
        <a href="{{ route('admin.testimonials.create') }}" class="bg-bcn-green text-bcn-dark font-bold px-6 py-3 rounded-lg hover:bg-bcn-green/90 transition inline-flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Nieuwe Testimonial
        </a>
    </div>

    <div class="bg-bcn-gray rounded-xl border border-white/10">
        @if($testimonials->isEmpty())
            <div class="p-12 text-center">
                <svg class="w-12 h-12 text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <p class="text-gray-500">Nog geen testimonials toegevoegd</p>
            </div>
        @else
            <div class="divide-y divide-white/10">
                @foreach($testimonials as $testimonial)
                    <div class="p-6 flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3">
                                <h3 class="font-medium text-white">{{ $testimonial->name }}</h3>
                                @if($testimonial->role)
                                    <span class="text-gray-500 text-sm">{{ $testimonial->role }}</span>
                                @endif
                                @if(!$testimonial->is_active)
                                    <span class="px-2 py-1 bg-gray-500/10 text-gray-500 text-xs rounded-full font-medium">Inactief</span>
                                @endif
                            </div>
                            <div class="flex items-center gap-1 mt-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $testimonial->rating ? 'text-bcn-green' : 'text-gray-600' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            <p class="text-gray-500 text-sm mt-2 line-clamp-2">{{ Str::limit($testimonial->content, 150) }}</p>
                        </div>
                        <div class="flex items-center gap-2 ml-4">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="p-2 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </a>
                            <form action="{{ route('admin.testimonials.delete', $testimonial) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze testimonial wilt verwijderen?');">
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
