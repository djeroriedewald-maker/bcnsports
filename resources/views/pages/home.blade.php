@extends('layouts.app')

@section('title', 'BCN Sports - Outdoor Bootcamp Training Almere')
@section('meta_description', 'BCN Sports biedt professionele outdoor bootcamp trainingen in Almere. Word fitter, sterker en gezonder met onze groepslessen in de buitenlucht. Probeer nu!')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Video -->
        <div class="absolute inset-0">
            <!-- Video for desktop -->
            <video autoplay muted loop playsinline class="hidden md:block absolute inset-0 w-full h-full object-cover">
                <source src="/images/VN20240906_193223-1920.mp4" type="video/mp4">
            </video>
            <!-- Fallback image for mobile/slow connections -->
            <img src="/images/20240902_194435.jpg" alt="BCN Sports Training" class="md:hidden w-full h-full object-cover">
            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#0a0a0a]"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-32">
            <div class="fade-in">
                <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-24 md:h-32 w-auto mx-auto mb-8">
            </div>

            <h1 class="fade-in stagger-1 text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-white mb-6">
                We Run<br>
                <span class="text-[#c4ff00]">This City</span>
            </h1>

            <p class="fade-in stagger-2 text-xl md:text-2xl text-[#a0a0a0] max-w-2xl mx-auto mb-10">
                Outdoor Bootcamp Training in Almere. Word onderdeel van onze sportieve community.
            </p>

            <div class="fade-in stagger-3 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('prijzen') }}" class="btn-neon px-10 py-4 rounded-full text-lg pulse-neon">
                    Start Nu - Vanaf €39,95/maand
                </a>
                <a href="{{ route('rooster') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Bekijk Rooster
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-[#0a0a0a] border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="fade-in">
                    <div class="stat-number mb-2">500+</div>
                    <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Leden</div>
                </div>
                <div class="fade-in stagger-1">
                    <div class="stat-number mb-2">1000+</div>
                    <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Sessies</div>
                </div>
                <div class="fade-in stagger-2">
                    <div class="stat-number mb-2">5+</div>
                    <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Jaar Ervaring</div>
                </div>
                <div class="fade-in stagger-3">
                    <div class="stat-number mb-2">100%</div>
                    <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Passie</div>
                </div>
            </div>
        </div>
    </section>

    <!-- HYROX & Events Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    BCN Sports <span class="text-[#c4ff00]">In Actie</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Onze trainers en leden nemen deel aan professionele fitness evenementen zoals HYROX Amsterdam.
                    Wij trainen niet alleen, wij presteren!
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- HYROX Photo 1 -->
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/13234_20241013_111118_415132811_socialmedia.jpg" alt="BCN Sports trainer bij HYROX Amsterdam" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            HYROX Amsterdam
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Competitie Ready</h3>
                        <p class="text-[#a0a0a0]">
                            Onze trainers zijn niet alleen coaches, maar ook actieve atleten die zelf aan wedstrijden deelnemen.
                        </p>
                    </div>
                </div>

                <!-- HYROX Photo 2 -->
                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/13234_20241013_111559_415165870_socialmedia.jpg" alt="BCN Sports trainer HYROX competitie" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            HYROX Amsterdam
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Professionele Aanpak</h3>
                        <p class="text-[#a0a0a0]">
                            De kennis en ervaring van wedstrijden brengen wij mee naar onze trainingen voor jou.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-[#a0a0a0] mb-6">Wil jij ook meedoen aan fitness evenementen? Wij trainen je ervoor!</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase tracking-wider hover:text-white transition">
                    Neem contact op voor meer info
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Onze <span class="text-[#c4ff00]">Trainingen</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Van beginner tot gevorderd, wij hebben de juiste training voor jou.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bootcamp Card -->
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="/images/20241007_093350.jpg" alt="Outdoor Bootcamp Training" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase">Outdoor Bootcamp</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Onze signature groepstraining combineert cardio, kracht en functionele oefeningen.
                            Geschikt voor alle niveaus met aanpassingen per persoon.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                60 minuten per sessie
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Professionele begeleiding
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Alle niveaus welkom
                            </li>
                        </ul>
                        <a href="{{ route('rooster') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                            Bekijk Rooster
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Family Training Card -->
                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-64 overflow-hidden">
                        <img src="/images/20240904_091803.jpg" alt="Family Training" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute top-4 right-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Populair
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white mb-4 uppercase">Family Package</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Train samen met je gezin of vrienden! Ons family pakket biedt de mogelijkheid om met
                            maximaal 4 personen onbeperkt deel te nemen aan alle trainingen.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Tot 4 personen
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Onbeperkt toegang
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Samen sterker
                            </li>
                        </ul>
                        <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                            Bekijk Prijzen
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Community Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-black uppercase text-white mb-6">
                        Word Onderdeel Van De <span class="text-[#c4ff00]">BCN Familie</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Bij BCN Sports draait het niet alleen om trainen, maar ook om de connectie met elkaar.
                        Onze community is een hechte groep mensen die elkaar motiveren, steunen en samen plezier maken.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-8">
                        Van gezamenlijke evenementen tot spontane social gatherings - bij ons vind je meer dan alleen een training.
                        Je vindt een tweede familie.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Regelmatige team events en uitjes
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Actieve social media community
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Samen naar fitness evenementen
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn-neon px-8 py-4 rounded-full text-lg inline-block">
                        Sluit Je Aan
                    </a>
                </div>

                <div class="fade-in-right">
                    <div class="relative">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="/images/IMG-20240616-WA0066.jpg" alt="BCN Sports Community Event" class="w-full h-auto">
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-[#c4ff00] text-[#0a0a0a] px-6 py-4 rounded-xl font-bold uppercase">
                            #BCNFamily
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    In <span class="text-[#c4ff00]">Actie</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg">
                    Bekijk onze community aan het werk
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="fade-in img-zoom rounded-xl overflow-hidden aspect-square">
                    <!-- Video for desktop -->
            <video autoplay muted loop playsinline class="hidden md:block absolute inset-0 w-full h-full object-cover">
                <source src="/images/VN20240906_193223-1920.mp4" type="video/mp4">
            </video>
            <!-- Fallback image for mobile/slow connections -->
            <img src="/images/20240902_194435.jpg" alt="BCN Sports Training" class="md:hidden w-full h-full object-cover">
                </div>
                <div class="fade-in stagger-1 img-zoom rounded-xl overflow-hidden aspect-square">
                    <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover">
                </div>
                <div class="fade-in stagger-2 img-zoom rounded-xl overflow-hidden aspect-square">
                    <img src="/images/20241007_093350.jpg" alt="Outdoor Training op Mat" class="w-full h-full object-cover">
                </div>
                <div class="fade-in stagger-3 img-zoom rounded-xl overflow-hidden aspect-square">
                    <img src="/images/P1270912.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover">
                </div>
                <div class="fade-in img-zoom rounded-xl overflow-hidden aspect-square md:col-span-2 md:row-span-2">
                    <img src="/images/20240902_195039.jpg" alt="BCN Sports Group" class="w-full h-full object-cover">
                </div>
                <div class="fade-in stagger-1 img-zoom rounded-xl overflow-hidden aspect-square">
                    <img src="/images/20231220_085224.jpg" alt="BCN Sports Training" class="w-full h-full object-cover">
                </div>
                <div class="fade-in stagger-2 img-zoom rounded-xl overflow-hidden aspect-square">
                    <img src="/images/20240309_102438.jpg" alt="BCN Sports Training" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Preview Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Flexibele <span class="text-[#c4ff00]">Prijzen</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Kies het abonnement dat bij jou past. Geen verborgen kosten.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Solo Pass -->
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <h3 class="text-xl font-bold text-white uppercase mb-2">Solo Bootcamp Pass</h3>
                    <p class="text-[#a0a0a0] text-sm mb-6">Onbeperkt trainen</p>
                    <div class="mb-8">
                        <span class="text-5xl font-black text-[#c4ff00]">€39,95</span>
                        <span class="text-[#a0a0a0]">/maand</span>
                    </div>
                    <a href="{{ route('prijzen') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white py-4 rounded-full font-bold uppercase text-sm tracking-wider transition">
                        Meer Info
                    </a>
                </div>

                <!-- Family Package - Featured -->
                <div class="fade-in stagger-1 relative rounded-2xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#c4ff00] to-[#a8d900] opacity-10"></div>
                    <div class="neon-border rounded-2xl p-8 text-center relative">
                        <div class="absolute -top-px left-1/2 transform -translate-x-1/2 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-4 py-1 rounded-b-lg">
                            Populair
                        </div>
                        <h3 class="text-xl font-bold text-white uppercase mb-2 mt-4">Family Package</h3>
                        <p class="text-[#a0a0a0] text-sm mb-6">Tot 4 personen</p>
                        <div class="mb-8">
                            <span class="text-5xl font-black text-[#c4ff00]">€59,95</span>
                            <span class="text-[#a0a0a0]">/maand</span>
                        </div>
                        <a href="{{ route('prijzen') }}" class="btn-neon block w-full py-4 rounded-full text-sm">
                            Meer Info
                        </a>
                    </div>
                </div>

                <!-- 10-Rittenkaart -->
                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <h3 class="text-xl font-bold text-white uppercase mb-2">10-Rittenkaart</h3>
                    <p class="text-[#a0a0a0] text-sm mb-6">Flexibel trainen</p>
                    <div class="mb-8">
                        <span class="text-5xl font-black text-[#c4ff00]">€99</span>
                        <span class="text-[#a0a0a0]">/10 lessen</span>
                    </div>
                    <a href="{{ route('prijzen') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white py-4 rounded-full font-bold uppercase text-sm tracking-wider transition">
                        Meer Info
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase tracking-wider hover:text-white transition">
                    Bekijk alle prijzen en opties
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Wat Onze <span class="text-[#c4ff00]">Leden</span> Zeggen
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in glass-card rounded-2xl p-8">
                    <div class="flex mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-[#c4ff00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-[#a0a0a0] mb-6 italic">
                        "BCN Sports heeft mijn leven veranderd! De trainingen zijn uitdagend maar toegankelijk, en de sfeer is geweldig."
                    </p>
                    <p class="font-bold text-white">- Marieke V.</p>
                </div>

                <div class="fade-in stagger-1 glass-card rounded-2xl p-8">
                    <div class="flex mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-[#c4ff00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-[#a0a0a0] mb-6 italic">
                        "Het family pakket is perfect voor ons gezin. We trainen samen en het is een geweldige manier om quality time door te brengen."
                    </p>
                    <p class="font-bold text-white">- Familie De Jong</p>
                </div>

                <div class="fade-in stagger-2 glass-card rounded-2xl p-8">
                    <div class="flex mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-[#c4ff00]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-[#a0a0a0] mb-6 italic">
                        "Na 3 maanden bootcamp ben ik 8 kilo afgevallen en voel ik me fitter dan ooit. Bedankt BCN Sports!"
                    </p>
                    <p class="font-bold text-white">- Thomas K.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Trial Booking Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Boek Je <span class="text-[#c4ff00]">Gratis Proefles</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Ervaar zelf hoe onze bootcamp trainingen jou kunnen helpen fitter te worden. Je eerste les is altijd gratis!
                </p>
            </div>

            <div class="fade-in glass-card rounded-2xl p-8 md:p-12">
                <!-- Gratis Proefles Badge -->
                <div class="flex justify-center mb-8">
                    <div class="inline-flex items-center bg-[#c4ff00] text-[#0a0a0a] px-8 py-4 rounded-full font-black uppercase text-xl">
                        <svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                        Gratis Proefles
                    </div>
                </div>

                <!-- BCN Sports Booking Widget -->
                <div class="bg-[#141414] rounded-xl p-8">
                    <script src="https://app.bcnsports.nl/js/widget-loader.js"></script>
                    <div
                        data-bcn-widget="booking-button"
                        data-api-key="bcn_nIwguf4E1cVWYYEX8xgOqWC8lmjmQawR819Zg3Qd"
                        style="width: 100%; max-width: 100%; box-sizing: border-box;">
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-[#a0a0a0]">
                        Geen verplichtingen - Kom kijken en ervaar het zelf!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/90 to-[#0a0a0a]/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <h2 class="fade-in-left text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                    Klaar om te <span class="text-[#c4ff00]">beginnen</span>?
                </h2>
                <p class="fade-in-left stagger-1 text-xl text-[#a0a0a0] mb-10">
                    Neem vandaag nog de eerste stap naar een fitter en gezonder leven.
                    Onze trainers staan klaar om je te helpen je doelen te bereiken.
                </p>
                <div class="fade-in-left stagger-2 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg text-center">
                        Neem Contact Op
                    </a>
                    <a href="{{ route('rooster') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg text-center">
                        Bekijk Rooster
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
