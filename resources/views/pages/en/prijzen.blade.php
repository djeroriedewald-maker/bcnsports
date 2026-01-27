@extends('layouts.app')

@section('title', 'Services & Prices - BCN Sports Bootcamp Trials & Outdoor Training')
@section('meta_description', 'View the services and prices of BCN Sports. Bootcamp Trials events throughout the Netherlands, 1:1 Personal Training from €59.95, duo training, small group and more.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/canva/trail%20run.jpg" alt="BCN Sports Personal Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Services & <span class="text-[#c4ff00]">Prices</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                From Bootcamp Trials events to personal 1-on-1 coaching. Choose what fits your goals.
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

    <!-- Bootcamp Trials Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Bootcamp <span class="text-[#c4ff00]">Trials</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-3xl mx-auto">
                    Our challenging outdoor events throughout the Netherlands where you push your mental and physical limits.
                    Designed with 20+ years of experience to bring out the best in you.
                </p>
            </div>

            <div class="fade-in rounded-2xl overflow-hidden border border-[#c4ff00]/40 hover:border-[#c4ff00] transition-all duration-500 relative group">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="/images/eventcard_duo.jpg" alt="Bootcamp Trials" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                <!-- Dark Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a]/95 via-[#0a0a0a]/80 to-[#0a0a0a]/50"></div>
                <!-- Neon accent line top -->
                <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#c4ff00] via-[#c4ff00]/50 to-transparent"></div>

                <div class="relative z-10 p-8 md:p-12">
                    <div class="flex flex-col lg:flex-row lg:items-center gap-8">
                        <div class="flex-1">
                            <div class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full mb-4">
                                Our Specialty
                            </div>
                            <h3 class="text-3xl font-black text-white uppercase mb-4">Bootcamp Trials Events</h3>
                            <p class="text-white/80 mb-6 text-lg">
                                Join our Bootcamp Trials events and discover where your limits lie.
                                Individually or as a team, guided by experienced trainers with a proven track record.
                            </p>
                            <ul class="space-y-3 mb-6 text-sm">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-white/70">Physical and mental challenges in the outdoors</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-white/70">Guidance by trainers with 20+ years of experience</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-white/70">Individually or as a team</span>
                                </li>
                            </ul>
                        </div>
                        <div class="lg:text-right">
                            <p class="text-xl font-black text-[#c4ff00] uppercase mb-2">Coming Soon</p>
                            <p class="text-white/60 text-sm mb-6">Events will be announced on this page. Keep an eye on the website or get in touch for more info.</p>
                            <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="btn-neon inline-block px-8 py-3 rounded-full text-sm">
                                Request Info
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1:1 Personal Training Section -->
    @if($personal1on1->isNotEmpty())
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    1:1 <span class="text-[#c4ff00]">Personal Training</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-3xl mx-auto">
                    Full focus on your goals. Every session is tailored to your level, preferences and progression.
                    Whether you want to lose weight, get stronger or improve your fitness.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-{{ min($personal1on1->count(), 4) }} gap-6">
                @foreach($personal1on1 as $index => $package)
                    @if($package->is_popular)
                        <!-- Popular Package -->
                        <div class="fade-in stagger-{{ $index }} relative rounded-2xl overflow-hidden lg:scale-105 z-10">
                            <div class="absolute inset-0 bg-gradient-to-b from-[#c4ff00]/20 to-transparent"></div>
                            <div class="absolute -top-0 left-1/2 transform -translate-x-1/2 bg-[#0a0a0a] text-[#c4ff00] text-xs font-bold uppercase px-4 py-1 rounded-b-lg border-x border-b border-[#c4ff00] z-20">
                                Popular
                            </div>
                            <div class="neon-border rounded-2xl overflow-hidden relative">
                                <div class="bg-[#c4ff00] p-6 pt-8 text-center">
                                    <h3 class="text-lg font-bold text-[#0a0a0a] uppercase">{{ $package->localized_name }}</h3>
                                    @if($package->localized_description)
                                        <p class="text-[#0a0a0a]/70 text-sm mt-2">{{ $package->localized_description }}</p>
                                    @endif
                                </div>
                                <div class="p-6 bg-[#1a1a1a]">
                                    <div class="text-center mb-6">
                                        <span class="text-4xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                                        @if($package->price_per_session)
                                            <span class="text-[#a0a0a0] block mt-2">{{ $package->formatted_price_per_session }} per session</span>
                                        @else
                                            <span class="text-[#a0a0a0] block mt-2">per {{ $package->localized_period }}</span>
                                        @endif
                                    </div>
                                    @if($package->localized_features && count($package->localized_features) > 0)
                                        <ul class="space-y-3 mb-6 text-sm">
                                            @foreach($package->localized_features as $feature)
                                                <li class="flex items-start">
                                                    <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                    </svg>
                                                    <span class="text-[#a0a0a0]">{{ $feature }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="btn-neon block w-full text-center py-3 rounded-full text-sm">
                                        Choose This
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Regular Package -->
                        <div class="fade-in stagger-{{ $index }} dark-card rounded-2xl overflow-hidden">
                            <div class="bg-[#141414] p-6 text-center border-b border-white/5">
                                <h3 class="text-lg font-bold text-white uppercase">{{ $package->localized_name }}</h3>
                                @if($package->localized_description)
                                    <p class="text-[#a0a0a0] text-sm mt-2">{{ $package->localized_description }}</p>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="text-center mb-6">
                                    <span class="text-4xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                                    @if($package->price_per_session)
                                        <span class="text-[#a0a0a0] block mt-2">{{ $package->formatted_price_per_session }} per session</span>
                                    @else
                                        <span class="text-[#a0a0a0] block mt-2">per {{ $package->localized_period }}</span>
                                    @endif
                                </div>
                                @if($package->localized_features && count($package->localized_features) > 0)
                                    <ul class="space-y-3 mb-6 text-sm">
                                        @foreach($package->localized_features as $feature)
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-[#c4ff00] mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                                </svg>
                                                <span class="text-[#a0a0a0]">{{ $feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white text-center py-3 rounded-full font-bold uppercase text-sm tracking-wider transition">
                                    Choose This
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
    @if($duo->isNotEmpty() || $smallGroup->isNotEmpty() || $event->isNotEmpty() || $business->isNotEmpty())
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    More <span class="text-[#c4ff00]">Options</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-3xl mx-auto">
                    In addition to Bootcamp Trials and 1-on-1 training, we also offer other options.
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
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->localized_name }}</h3>
                    @if($package->localized_description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->localized_description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        <span class="text-[#6b6b6b]">per {{ $package->localized_period }}</span>
                    </div>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        More info
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
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->localized_name }}</h3>
                    @if($package->localized_description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->localized_description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        <span class="text-[#6b6b6b]">per {{ $package->localized_period }}</span>
                    </div>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        More info
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
                    <h3 class="text-xl font-bold text-white mb-3">{{ $package->localized_name }}</h3>
                    @if($package->localized_description)
                        <p class="text-[#a0a0a0] mb-4">{{ $package->localized_description }}</p>
                    @endif
                    <div class="flex items-baseline gap-2 mb-6">
                        @if($package->price > 0)
                            <span class="text-3xl font-black text-[#c4ff00]">{{ $package->formatted_price }}</span>
                        @else
                            <span class="text-xl font-bold text-[#c4ff00]">Custom programme</span>
                        @endif
                    </div>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="inline-flex items-center text-[#c4ff00] font-semibold hover:underline">
                        Request a quote
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                @endforeach

                <!-- Corporate Bootcamp -->
                @foreach($business as $package)
                <div class="fade-in stagger-{{ $staggerIndex++ }} dark-card rounded-2xl p-8 md:col-span-2 lg:col-span-2">
                    <div class="flex flex-col lg:flex-row lg:items-center gap-6">
                        <div class="flex-1">
                            <div class="w-14 h-14 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg class="w-7 h-7 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3">{{ $package->localized_name }}</h3>
                            @if($package->localized_description)
                                <p class="text-[#a0a0a0] mb-4">{{ $package->localized_description }}</p>
                            @endif
                            @if($package->localized_features && count($package->localized_features) > 0)
                                <ul class="space-y-2 mb-6 text-sm">
                                    @foreach($package->localized_features as $feature)
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
                                <p class="text-xl font-bold text-[#c4ff00] mb-4">Custom quote</p>
                            @endif
                            <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="btn-neon inline-block px-8 py-3 rounded-full text-sm">
                                Get In Touch
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
                    What's <span class="text-[#c4ff00]">included</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg">Included with every training session</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Training Plan</h3>
                    <p class="text-[#6b6b6b] text-sm">Every session planned based on your goals</p>
                </div>

                <div class="fade-in stagger-1 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Progress Tracking</h3>
                    <p class="text-[#6b6b6b] text-sm">We measure and track your progress</p>
                </div>

                <div class="fade-in stagger-2 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">WhatsApp Support</h3>
                    <p class="text-[#6b6b6b] text-sm">Ask questions between sessions</p>
                </div>

                <div class="fade-in stagger-3 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-bold mb-2">Flexible Location</h3>
                    <p class="text-[#6b6b6b] text-sm">Personal training in Almere and surroundings, events throughout the Netherlands</p>
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
                    Frequently Asked <span class="text-[#c4ff00]">Questions</span>
                </h2>
            </div>

            <div class="space-y-4">
                @foreach($faqs as $index => $faq)
                    <div class="fade-in {{ $index > 0 ? 'stagger-' . min($index, 4) : '' }} dark-card rounded-xl overflow-hidden">
                        <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span>{{ $faq->localized_question }}</span>
                            <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-6 pb-5 hidden">
                            <p class="text-[#a0a0a0]">{{ $faq->localized_answer }}</p>
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
                Ready to <span class="text-[#c4ff00]">start</span>?
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Schedule a free introductory consultation and discover what BCN Sports can do for you.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="btn-neon px-10 py-4 rounded-full text-lg">
                    Free Introduction
                </a>
                <a href="tel:+31641541751" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Call Directly
                </a>
            </div>
        </div>
    </section>
@endsection
