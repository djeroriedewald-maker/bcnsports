@extends('layouts.app')

@section('title', 'Zakelijk - BCN Sports Bedrijfstraining Almere')
@section('meta_description', 'BCN Sports voor bedrijven. Bedrijfs-bootcamp, teambuilding en outdoor trainingen. Versterk je team met energieke outdoor sessies. Vraag een offerte aan.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 lg:py-40 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1270912.jpg" alt="BCN Sports Zakelijke Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-4 py-2 rounded-full mb-6">
                Voor Bedrijven
            </span>
            <h1 class="fade-in text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                Bedrijfs-bootcamp<br><span class="text-[#c4ff00]">Met Impact</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-3xl mx-auto mb-8">
                Teambuilding die verder gaat dan een borrel. Outdoor training voor bedrijven die hun team willen uitdagen en versterken.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#offerte" class="btn-neon px-8 py-4 rounded-full text-sm">
                    Offerte Aanvragen
                </a>
                <a href="#diensten" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
                    Meer Informatie
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
                        Meer Dan <span class="text-[#c4ff00]">Teambuilding</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Een bedrijfs-bootcamp bij BCN Sports is geen standaard teamuitje. Het is een energieke outdoor ervaring waarbij je team samenwerkt, elkaar motiveert en samen grenzen verlegt.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Of het nu gaat om een eenmalig teamuitje, een incentive of een structureel vitaliteitsprogramma - wij stemmen de training volledig af op jullie wensen en fitnessniveau.
                    </p>
                    <p class="text-[#a0a0a0] text-lg">
                        Geschikt voor alle fitnessniveaus. Wij zorgen ervoor dat iedereen wordt uitgedaagd op zijn of haar eigen niveau.
                    </p>
                </div>
                <div class="fade-in-right">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="/images/P1210932.jpg" alt="BCN Sports Bedrijfstraining" class="w-full h-auto">
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
                    Waarom Bedrijfs-<span class="text-[#c4ff00]">bootcamp?</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Investeer in je team met een ervaring die ze niet snel vergeten
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Teamversterking</h3>
                    <p class="text-[#a0a0a0]">Door samen fysiek uitgedaagd te worden ontstaat er een unieke band. Collega's leren elkaar op een andere manier kennen.</p>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Energie & Vitaliteit</h3>
                    <p class="text-[#a0a0a0]">Een actieve dag in de buitenlucht geeft energie. Medewerkers komen fitter en gemotiveerder terug op kantoor.</p>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Volledig Op Maat</h3>
                    <p class="text-[#a0a0a0]">Elke training wordt aangepast aan jullie groepsgrootte, fitnessniveau en doelstellingen. Van rustig tot intensief.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="diensten" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Onze <span class="text-[#c4ff00]">Opties</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Wij komen naar jullie locatie of organiseren op een mooie outdoor plek
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Teamuitje -->
                <div class="fade-in glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/20240902_195039.jpg" alt="BCN Sports Teamuitje" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Eenmalig
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Teamuitje / Incentive</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Perfect voor teambuilding, bedrijfsuitjes of speciale gelegenheden. Een energieke outdoor ervaring die je team dichter bij elkaar brengt.
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
                                Geschikt voor alle fitnessniveaus
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Volledig op maat samengesteld
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Inclusief alle materialen
                            </li>
                        </ul>
                        <a href="#offerte" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                            Offerte Aanvragen
                        </a>
                    </div>
                </div>

                <!-- Structureel -->
                <div class="fade-in stagger-1 glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/20240904_091803.jpg" alt="BCN Sports Vitaliteitsprogramma" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Structureel
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Vitaliteitsprogramma</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Structurele samenwerking voor bedrijven die investeren in de gezondheid van hun medewerkers. Regelmatige outdoor sessies op een vaste dag.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Wekelijks of maandelijks
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Flexibel aantal deelnemers
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Vaste trainer voor continuiteit
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

    <!-- What to Expect -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Wat Kun Je <span class="text-[#c4ff00]">Verwachten?</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="fade-in text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">1</div>
                    <h3 class="text-white font-bold mb-2">Warming-up</h3>
                    <p class="text-[#a0a0a0] text-sm">Samen het lichaam voorbereiden op de training</p>
                </div>
                <div class="fade-in stagger-1 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">2</div>
                    <h3 class="text-white font-bold mb-2">Teamoefeningen</h3>
                    <p class="text-[#a0a0a0] text-sm">Samen challenges aangaan en elkaar motiveren</p>
                </div>
                <div class="fade-in stagger-2 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">3</div>
                    <h3 class="text-white font-bold mb-2">Functionele Training</h3>
                    <p class="text-[#a0a0a0] text-sm">Kracht, uithoudingsvermogen en coordinatie</p>
                </div>
                <div class="fade-in stagger-3 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">4</div>
                    <h3 class="text-white font-bold mb-2">Cool-down</h3>
                    <p class="text-[#a0a0a0] text-sm">Rustig afsluiten en reflecteren</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Offerte Section -->
    <section id="offerte" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-8 md:p-12 text-center">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Klaar Om Te <span class="text-[#c4ff00]">Starten?</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg mb-8 max-w-2xl mx-auto">
                    Vraag vrijblijvend een offerte aan en ontdek wat BCN Sports voor jouw team kan betekenen. We denken graag met je mee over de beste aanpak.
                </p>
                <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}?subject=bedrijf" class="btn-neon px-8 py-4 rounded-full text-sm">
                        Offerte Aanvragen
                    </a>
                    <a href="mailto:info@bcnsports.nl?subject=Zakelijke%20aanvraag%20-%20Bedrijfs-bootcamp" class="bg-transparent border-2 border-[#c4ff00] text-[#c4ff00] hover:bg-[#c4ff00] hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
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
