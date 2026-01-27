@extends('layouts.app')

@section('title', 'Bootcamp Trials & Outdoor Training | BCN Sports')
@section('meta_description', 'Bootcamp Trials events door heel Nederland en outdoor personal training in Almere. Ontdek je grenzen met uitdagende events, 1:1 begeleiding en small group training. 20+ jaar ervaring.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/canva/hero%20frontpage.jpg" alt="BCN Sports Training" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#0a0a0a]"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-32">
            <div class="fade-in">
                <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-24 md:h-32 w-auto mx-auto mb-8">
            </div>

            <h1 class="fade-in stagger-1 text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-white mb-6">
                Bootcamp Trials.<br>
                <span class="text-[#c4ff00]">Ontdek je grenzen.</span>
            </h1>

            <p class="fade-in stagger-2 text-xl md:text-2xl text-[#a0a0a0] max-w-2xl mx-auto mb-10">
                Uitdagende Bootcamp Trials events en outdoor personal training. Geen excuses, geen afleiding. Alleen jij, je team en resultaat.
            </p>

            <div class="fade-in stagger-3 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('prijzen') }}" class="btn-neon px-10 py-4 rounded-full text-lg pulse-neon">
                    Ontdek Bootcamp Trials
                </a>
                <a href="{{ route('contact') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Neem Contact Op
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

    <!-- Intro Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="fade-in text-xl md:text-2xl text-[#a0a0a0] leading-relaxed mb-8">
                    BCN Sports organiseert <span class="text-white font-semibold">Bootcamp Trials</span> - uitdagende outdoor events
                    waar je mentale en fysieke grenzen verlegd worden. Daarnaast bieden we persoonlijke begeleiding
                    met outdoor personal training.
                </p>
                <p class="fade-in stagger-1 text-lg text-[#a0a0a0] leading-relaxed mb-8">
                    Bootcamp Trials events vinden plaats door heel Nederland. Personal training en small group sessies
                    bieden we aan in Almere en omstreken. Altijd buiten, altijd uitdagend.
                </p>
                <p class="fade-in stagger-2 text-lg text-[#a0a0a0] leading-relaxed">
                    Of je meedoet aan een Bootcamp Trials event, wilt afvallen, sterker worden of je voorbereidt
                    op een evenement - wij bouwen een programma dat past bij jouw doel.
                </p>
            </div>
        </div>
    </section>

    <!-- Why BCN Sports Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Waarom <span class="text-[#c4ff00]">BCN Sports</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">20+ Jaar Ervaring</h3>
                    <p class="text-[#a0a0a0]">In het coachen van sporters op fysiek en mentaal niveau</p>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Bewezen Mentaliteit</h3>
                    <p class="text-[#a0a0a0]">Gevormd door jarenlange ervaring in extreme fysieke en mentale uitdagingen</p>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Flexibele Sessies</h3>
                    <p class="text-[#a0a0a0]">Jouw training past zich aan op jouw schema en niveau</p>
                </div>

                <div class="fade-in stagger-3 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Altijd Buiten</h3>
                    <p class="text-[#a0a0a0]">Frisse lucht, geen wachtrijen, pure focus</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootcamp Trials & Events Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Bootcamp Trials <span class="text-[#c4ff00]">& Events</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Al onze coaches nemen zelf actief deel aan uitdagingen zoals HYROX, ultra runs van 50+ kilometer,
                    marathons en tal van andere events waarbij ze mentaal en fysiek op de proef worden gesteld.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/team%20spirit.jpg" alt="BCN Sports Bootcamp Trials teamwork" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Bootcamp Trials
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Team Spirit</h3>
                        <p class="text-[#a0a0a0]">
                            We vragen niks van jou wat we niet eerst zelf hebben gedaan.
                        </p>
                    </div>
                </div>

                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/uitdaging%20aangaan.jpg" alt="BCN Sports uitdaging aangaan" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Uitdaging Aangaan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Grenzen Verleggen</h3>
                        <p class="text-[#a0a0a0]">
                            Obstacle run, marathon of ultra trail? Wij stomen je klaar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Ons <span class="text-[#c4ff00]">Aanbod</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Kies de trainingsformule die bij jou past. Van een-op-een begeleiding tot kleine groepen - altijd persoonlijk, altijd buiten.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bootcamp Trials (uitgelicht) -->
                <div class="fade-in dark-card rounded-2xl p-8 border-2 border-[#c4ff00] relative">
                    <div class="absolute -top-3 left-6 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                        Onze Specialiteit
                    </div>
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6 mt-2">
                        <svg class="w-6 h-6 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Bootcamp Trials</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Uitdagende outdoor events door heel Nederland waar je mentale en fysieke grenzen verlegt.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Events worden aangekondigd</p>
                    <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Bekijk aanbod
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- 1:1 Personal Training -->
                <div class="fade-in stagger-1 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">1:1</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Personal Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Volledige aandacht, maximaal resultaat. In een 1:1 sessie staat alles in het teken van jouw doel.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">€74,95 per sessie</p>
                    <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Bekijk tarieven
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- 1:2 Training -->
                <div class="fade-in stagger-2 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">1:2</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Duo Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Train samen met je partner, vriend of collega. Motiveer elkaar, daag elkaar uit en deel de kosten.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">€54,95 per persoon</p>
                    <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Bekijk tarieven
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Small Group Training -->
                <div class="fade-in dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">4</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Small Group</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        De energie van een groep, de aandacht van personal training. Minimaal 3, maximaal 4 deelnemers.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">€39,95 per persoon</p>
                    <a href="{{ route('prijzen') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Bekijk tarieven
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Event Training -->
                <div class="fade-in stagger-1 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00]/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Event Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Obstacle run, marathon, HYROX of Mud Masters? Wij stomen je klaar met een gericht traject.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Traject op maat</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Neem contact op
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Bedrijfs-bootcamp -->
                <div class="fade-in stagger-2 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00]/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Bedrijfs-bootcamp</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Haal je team uit de comfortzone. Bouw niet alleen conditie, maar ook teamspirit en mentale veerkracht.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Offerte op maat</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Vraag offerte aan
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Aankomende Events Section -->
    <section class="py-24 bg-[#141414] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Aankomende <span class="text-[#c4ff00]">Events</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Bootcamp Trials events worden hier aangekondigd. Zodra er een datum bekend is, kun je je direct inschrijven.
                </p>
            </div>

            <!-- Event Cards - horizontaal scrollbaar op mobile, grid op desktop -->
            <div class="fade-in flex gap-6 overflow-x-auto pb-6 snap-x snap-mandatory scrollbar-hide lg:grid lg:grid-cols-4 lg:overflow-visible lg:pb-0">
                <!-- Event Card 1 - Male -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_male.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Datum wordt aangekondigd</p>
                            <p class="text-[#a0a0a0] text-sm">Ontdek je grenzen in deze uitdagende outdoor challenge.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 - Female -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_female.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Datum wordt aangekondigd</p>
                            <p class="text-[#a0a0a0] text-sm">Verleg je mentale en fysieke grenzen.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 - Male -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_male.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Datum wordt aangekondigd</p>
                            <p class="text-[#a0a0a0] text-sm">Individueel of als team de uitdaging aan.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 - Female -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_female.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Datum wordt aangekondigd</p>
                            <p class="text-[#a0a0a0] text-sm">Ben jij klaar voor de challenge?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA onder de cards -->
            <div class="fade-in stagger-2 text-center mt-12">
                <p class="text-[#a0a0a0] mb-6">Wil je als eerste op de hoogte zijn van nieuwe events?</p>
                <a href="{{ route('contact') }}" class="btn-neon inline-block px-10 py-4 rounded-full text-lg">
                    Houd Me Op De Hoogte
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    @if(isset($testimonials) && $testimonials->count() > 0)
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Wat Onze <span class="text-[#c4ff00]">Klanten</span> Zeggen
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $index => $testimonial)
                    <div class="fade-in {{ $index > 0 ? 'stagger-' . $index : '' }} glass-card rounded-2xl p-8">
                        <div class="flex mb-4">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <svg class="w-5 h-5 text-[#c4ff00]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-[#a0a0a0] mb-6 italic">"{{ $testimonial->content }}"</p>
                        <p class="font-bold text-white">- {{ $testimonial->name }}</p>
                        @if($testimonial->role)
                            <p class="text-[#a0a0a0] text-sm">{{ $testimonial->role }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/90 to-[#0a0a0a]/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="fade-in-left text-[#c4ff00] font-bold uppercase tracking-wider mb-4">Stop met uitstellen</p>
                <h2 class="fade-in-left text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                    Je weet al lang dat je iets moet <span class="text-[#c4ff00]">veranderen</span>
                </h2>
                <p class="fade-in-left stagger-1 text-xl text-[#a0a0a0] mb-10">
                    Dit is je moment. Neem contact op en zet vandaag de eerste stap.
                </p>
                <div class="fade-in-left stagger-2 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg text-center">
                        Plan Je Gratis Intake
                    </a>
                    <a href="{{ route('prijzen') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg text-center">
                        Bekijk Aanbod
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
