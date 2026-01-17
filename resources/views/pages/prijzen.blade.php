@extends('layouts.app')

@section('title', 'Aanbod & Prijzen - BCN Sports Personal Training Outdoor')
@section('meta_description', 'Bekijk het aanbod en de prijzen van BCN Sports Personal Training Outdoor in Almere. 1:1 Personal Training vanaf €59,95, duo-training, small group en meer.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/20240902_195039.jpg" alt="BCN Sports Personal Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Aanbod & <span class="text-[#c4ff00]">Prijzen</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Persoonlijke begeleiding die past bij jouw doelen. Van 1-op-1 sessies tot kleine groepen.
            </p>
        </div>
    </section>

    @php
        $personal1on1 = $packages->get('personal_1on1', collect());
        $duo = $packages->get('duo', collect());
        $smallGroup = $packages->get('small_group', collect());
        $event = $packages->get('event', collect());
        $milsim = $packages->get('milsim', collect());
        $business = $packages->get('business', collect());
    @endphp

    <!-- 1:1 Personal Training Section -->
    @if($personal1on1->isNotEmpty())
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    1:1 <span class="text-[#c4ff00]">Personal Training</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-3xl mx-auto">
                    Volledige focus op jouw doelen. Elke sessie wordt afgestemd op jouw niveau, wensen en progressie.
                    Of je nu wilt afvallen, sterker worden of je conditie wilt verbeteren.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-{{ min($personal1on1->count(), 4) }} gap-6">
                @foreach($personal1on1 as $index => $package)
                    @if($package->is_popular)
                        <!-- Popular Package -->
                        <div class="fade-in stagger-{{ $index }} relative rounded-2xl overflow-hidden lg:scale-105 z-10">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#c4ff00]/20 to-transparent"></div>
                            <div class="absolute -top-0 left-1/2 transform -translate-x-1/2 bg-[#0a0a0a] text-[#c4ff00] text-xs font-bold uppercase px-4 py-1 rounded-b-lg border-x border-b border-[#c4ff00] z-20">
                                Populair
                            </div>
                            <div class="neon-border rounded-2xl overflow-hidden relative">
                                <div class="bg-[#c4ff00] p-6 pt-8 text-center">
                                    <h3 class="text-lg font-bold text-[#0a0a0a] uppercase">{{ $package->name }}</h3>
                                    @if($package->description)
                                        <p class="text-[#0a0a0a]/70 text-sm mt-2">{{ $package->description }}</p>
                                    @endif
                                </div>
                                <div class="p-6 bg-[#1a1a1a]">
                                    <div class="text-center mb-6">
                                        <span class="text-4xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                                        @if($package->price_per_session)
                                            <span class="text-[#a0a0a0] block mt-2">{{ $package->formatted_price_per_session }} per sessie</span>
                                        @else
                                            <span class="text-[#a0a0a0] block mt-2">per {{ $package->period }}</span>
                                        @endif
                                    </div>
                                    @if($package->features && count($package->features) > 0)
                                        <ul class="space-y-3 mb-6 text-sm">
                                            @foreach($package->features as $feature)
                                                <li class="flex items-start">
                                                    <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-[#a0a0a0]">{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <a href="{{ route('contact') }}" class="btn-neon block w-full text-center py-3 rounded-full text-sm">
                                        Kies Dit
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Regular Package -->
                        <div class="fade-in stagger-{{ $index }} dark-card rounded-2xl overflow-hidden">
                            <div class="bg-[#141414] p-6 text-center border-b border-white/5">
                                <h3 class="text-lg font-bold text-white uppercase">{{ $package->name }}</h3>
                                @if($package->description)
                                    <p class="text-[#a0a0a0] text-sm mt-2">{{ $package->description }}</p>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="text-center mb-6">
                                    <span class="text-4xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                                    @if($package->price_per_session)
                                        <span class="text-[#a0a0a0] block mt-2">{{ $package->formatted_price_per_session }} per sessie</span>
                                    @else
                                        <span class="text-[#a0a0a0] block mt-2">per {{ $package->period }}</span>
                                    @endif
                                </div>
                                @if($package->features && count($package->features) > 0)
                                    <ul class="space-y-3 mb-6 text-sm">
                                        @foreach($package->features as $feature)
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span class="text-[#a0a0a0]">{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a href="{{ route('contact') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white text-center py-3 rounded-full font-bold uppercase text-sm tracking-wider transition">
                                    Kies Dit
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Other Training Options -->
    @if($duo->isNotEmpty() || $smallGroup->isNotEmpty() || $event->isNotEmpty() || $milsim->isNotEmpty() || $business->isNotEmpty())
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Meer <span class="text-[#c4ff00]">Opties</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-3xl mx-auto">
                    Naast 1-op-1 training bieden we ook andere mogelijkheden aan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php $staggerIndex = 0; @endphp

                <!-- 1:2 Training -->
                @foreach($duo as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8">
                    <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->name }}</h3>
                    @if($package->description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        <span class="text-[#6b6b6b]">per {{ $package->period }}</span>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        Meer info
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                @endforeach

                <!-- Small Group -->
                @foreach($smallGroup as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8">
                    <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->name }}</h3>
                    @if($package->description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        <span class="text-[#6b6b6b]">per {{ $package->period }}</span>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        Meer info
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                @endforeach

                <!-- Event Training -->
                @foreach($event as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8">
                    <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->name }}</h3>
                    @if($package->description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        @if($package->price > 0)
                            <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        @else
                            <span class="text-xl font-bold text-[#c4ff00]">Traject op maat</span>
                        @endif
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        Vraag offerte aan
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                @endforeach

                <!-- Milsim Training -->
                @foreach($milsim as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8">
                    <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->name }}</h3>
                    @if($package->description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        @if($package->price > 0)
                            <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        @else
                            <span class="text-xl font-bold text-[#c4ff00]">Traject op maat</span>
                        @endif
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        Vraag offerte aan
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                @endforeach

                <!-- Bedrijfs-bootcamp -->
                @foreach($business as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8 md:col-span-2 lg:col-span-2">
                    <div class="flex flex-col lg:flex-row lg:items-center gap-6">
                        <div class="flex-1">
                            <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3">{{ $package->name }}</h3>
                            @if($package->description)
                                <p class="text-[#a0a0a0] mb-4">{{ $package->description }}</p>
                            @endif
                            @if($package->features && count($package->features) > 0)
                                <ul class="space-y-2 mb-6 text-sm">
                                    @foreach($package->features as $feature)
                                        <li class="flex items-center text-[#a0a0a0]">
                                            <svg class="w-4 h-4 text-[#c4ff00] mr-2" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="lg:text-right">
                            @if($package->price > 0)
                                <p class="text-xl font-bold text-[#c4ff00] mb-4">{{ $package->formatted_price }}</p>
                            @else
                                <p class="text-xl font-bold text-[#c4ff00] mb-4">Offerte op maat</p>
                            @endif
                            <a href="{{ route('contact') }}" class="btn-neon inline-block px-8 py-3 rounded-full text-sm">
                                Neem Contact Op
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- What's Included -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Wat krijg je <span class="text-[#c4ff00]">erbij</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg">Bij elke training sessie inbegrepen</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Trainingsplan</h3>
                    <p class="text-[#6b6b6b] text-sm">Elke sessie gepland op basis van jouw doelen</p>
                </div>

                <div class="fade-in stagger-1 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Progressie Tracking</h3>
                    <p class="text-[#6b6b6b] text-sm">We meten en volgen jouw vooruitgang</p>
                </div>

                <div class="fade-in stagger-2 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">WhatsApp Support</h3>
                    <p class="text-[#6b6b6b] text-sm">Stel vragen tussen de sessies door</p>
                </div>

                <div class="fade-in stagger-3 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Flexibele Locatie</h3>
                    <p class="text-[#6b6b6b] text-sm">Training op een locatie in Almere naar keuze</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    @if($faqs->isNotEmpty())
    <section class="py-24 bg-[#141414]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Veelgestelde <span class="text-[#c4ff00]">Vragen</span>
                </h2>
            </div>

            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="fade-in {{ $index > 0 ? 'stagger-' . min($index, 4) : '' }} dark-card rounded-xl overflow-hidden">
                        <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span>{{ $faq->question }}</span>
                            <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-5 hidden">
                            <p class="text-[#a0a0a0]">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-6">
                Klaar om te <span class="text-[#c4ff00]">starten</span>?
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Plan een gratis kennismakingsgesprek en ontdek wat BCN Sports voor jou kan betekenen.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg">
                    Gratis Kennismaking
                </a>
                <a href="tel:+31612345678" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Bel Direct
                </a>
            </div>
        </div>
    </section>
@endsection
