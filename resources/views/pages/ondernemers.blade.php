@extends('layouts.app')

@section('title', 'Voor Ondernemers - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'BCN Sports voor ondernemers. Teambuilding, bedrijfsfitness en evenementen. Versterk je team met intensieve outdoor trainingen. Vraag een offerte aan.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 lg:py-40 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/events/P1270912.jpg" alt="BCN Sports Zakelijke Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-4 py-2 rounded-full mb-6">
                Voor Bedrijven
            </span>
            <h1 class="fade-in text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                Waar Ondernemers Hun<br><span class="text-[#c4ff00]">Grenzen Verleggen</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-3xl mx-auto mb-8">
                Ondernemen vraagt meer dan alleen een goed plan. Het vraagt veerkracht, doorzettingsvermogen en de mentale kracht om door te gaan wanneer anderen stoppen.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#offerte" class="btn-neon px-8 py-4 rounded-full text-sm">
                    Offerte Aanvragen
                </a>
                <a href="#diensten" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
                    Bekijk Opties
                </a>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-left">
                    <h2 class="text-3xl md:text-4xl font-black uppercase text-white mb-6">
                        Meer Dan <span class="text-[#c4ff00]">Fitness</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Bij BCN Sports trainen we niet alleen je lichaam – we smeden je mindset. Ons programma is speciaal ontwikkeld voor ondernemers die begrijpen dat fysieke en mentale kracht hand in hand gaan.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Wat we doen gaat verder dan reguliere groepslessen. Denk aan een ervaring die lijkt op militaire training, maar dan toegankelijk gemaakt voor iedereen die zichzelf écht wil uitdagen.
                    </p>
                    <p class="text-[#a0a0a0] text-lg">
                        Door middel van intensieve sport en uitdagende spelelementen creëren we situaties waarin al je zintuigen worden aangescherpt.
                    </p>
                </div>
                <div class="fade-in-right">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="/images/events/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Wat Je <span class="text-[#c4ff00]">Leert</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Ontdek wie je werkelijk bent en wat je in huis hebt
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Angsten Overwinnen</h3>
                    <p class="text-[#a0a0a0]">Je leert angsten te herkennen én te overwinnen. Ontdek waar je grenzen liggen en hoe je ze kunt verleggen.</p>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Mentale Weerbaarheid</h3>
                    <p class="text-[#a0a0a0]">Ontwikkel de mentale weerbaarheid die nodig is om te blijven presteren, ook onder druk.</p>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Zelfkennis</h3>
                    <p class="text-[#a0a0a0]">Na elke sessie weet je beter wie je bent, waar je staat en wat je in huis hebt. Die zelfkennis neem je mee naar je bedrijf.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="diensten" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Onze <span class="text-[#c4ff00]">Diensten</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Wij komen naar jouw locatie of organiseren op onze trainingslocatie
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Evenementen -->
                <div class="fade-in glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/events/P1270860.jpg" alt="BCN Sports Evenement" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Eenmalig
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Bedrijfsevenement</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Perfect voor teambuilding, bedrijfsuitjes of speciale gelegenheden. Een krachtige, intensieve ervaring die je team dichter bij elkaar brengt.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Op locatie naar keuze
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Aangepast aan groepsgrootte
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Inclusief alle materialen
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Vaste prijs per evenement
                            </li>
                        </ul>
                        <a href="#offerte" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                            Offerte Aanvragen
                        </a>
                    </div>
                </div>

                <!-- Abonnement -->
                <div class="fade-in stagger-1 glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/events/P1270832.jpg" alt="BCN Sports Abonnement" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Structureel
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Bedrijfsabonnement</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Structurele samenwerking voor bedrijven die hun medewerkers actief en gezond willen houden. Wij komen regelmatig bij u langs.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Wekelijks, maandelijks of per kwartaal
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Flexibel aantal sessies
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Vaste trainer voor continuïteit
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Voordelig abonnementstarief
                            </li>
                        </ul>
                        <a href="#offerte" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                            Offerte Aanvragen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner Reference -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="fade-in-left order-2 lg:order-1">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="/images/events/P1220022.jpg" alt="BCN Sports bij ROC Flevoland" class="w-full h-auto">
                    </div>
                </div>
                <div class="fade-in-right order-1 lg:order-2">
                    <span class="inline-block bg-[#c4ff00]/10 text-[#c4ff00] text-xs font-bold uppercase px-4 py-2 rounded-full mb-6">
                        Onze Partners
                    </span>
                    <h2 class="text-3xl md:text-4xl font-black uppercase text-white mb-6">
                        Vertrouwd Door <span class="text-[#c4ff00]">ROC Flevoland</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        ROC Flevoland (MBO College) is een van onze vaste partners waar wij regelmatig trainingen verzorgen. Studenten en medewerkers ervaren de kracht van onze unieke aanpak.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-8">
                        Dit is geen programma voor mensen die op zoek zijn naar een gemakkelijke workout. Dit is voor ondernemers en organisaties die investeren in zichzelf en hun mensen. Die begrijpen dat de grootste asset niet het bedrijf is, maar de veerkracht en mentale kracht van het team.
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-[#0a0a0a]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-bold">Structurele Samenwerking</p>
                            <p class="text-[#a0a0a0] text-sm">Meerdere sessies per jaar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="py-24 bg-[#0a0a0a] relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/events/P1270911.jpg" alt="BCN Sports Training" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/90 to-[#0a0a0a]"></div>
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <svg class="w-16 h-16 text-[#c4ff00] mx-auto mb-8 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <blockquote class="text-2xl md:text-3xl font-bold text-white mb-8">
                In het ondernemerschap word je constant getest. Onze trainingen bereiden je hierop voor door je fysiek en mentaal uit te dagen in een veilige, maar intense omgeving.
            </blockquote>
            <p class="text-[#c4ff00] font-bold uppercase">BCN Sports</p>
        </div>
    </section>

    <!-- CTA / Offerte Section -->
    <section id="offerte" class="py-24 bg-[#141414]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-8 md:p-12 text-center">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Klaar Om Te <span class="text-[#c4ff00]">Starten?</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg mb-8 max-w-2xl mx-auto">
                    Ben jij klaar om jezelf en je team echt uit te dagen? Vraag vrijblijvend een offerte aan en ontdek wat BCN Sports voor jouw organisatie kan betekenen.
                </p>
                <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}?subject=Offerte%20aanvraag%20-%20Zakelijk" class="btn-neon px-8 py-4 rounded-full text-sm">
                        Offerte Aanvragen
                    </a>
                    <a href="mailto:info@bcnsports.nl?subject=Zakelijke%20aanvraag" class="bg-transparent border-2 border-[#c4ff00] text-[#c4ff00] hover:bg-[#c4ff00] hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
                        Direct Mailen
                    </a>
                </div>
                <p class="text-[#a0a0a0] text-sm mt-8">
                    Of bel ons direct: <a href="tel:+31641541751" class="text-[#c4ff00] hover:underline">+31 6 4154 1751</a>
                </p>
            </div>
        </div>
    </section>
@endsection
