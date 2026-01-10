@extends('layouts.app')

@section('title', 'Over Ons - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Leer meer over BCN Sports, het team achter de outdoor bootcamp trainingen in Almere. Onze missie is om mensen fitter en gezonder te maken in de buitenlucht.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Over <span class="text-[#c4ff00]">BCN Sports</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Passie voor fitness, liefde voor de buitenlucht, en toewijding aan jouw gezondheid.
            </p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-black uppercase text-white mb-8">
                        Ons <span class="text-[#c4ff00]">Verhaal</span>
                    </h2>
                    <div class="space-y-6 text-[#a0a0a0] text-lg">
                        <p>
                            BCN Sports is geboren uit een simpele overtuiging: sporten hoort buiten te gebeuren.
                            In een wereld waar we steeds meer binnen zitten, bieden wij een verfrissend alternatief
                            voor de traditionele sportschool.
                        </p>
                        <p>
                            Wat begon als een kleine groep enthousiastelingen die samen in het park trainden,
                            is uitgegroeid tot een hechte fitness community in Almere. We combineren de kracht
                            van groepstraining met de voordelen van buiten sporten.
                        </p>
                        <p>
                            Onze bootcamp trainingen zijn ontworpen om uitdagend te zijn, maar tegelijkertijd
                            toegankelijk voor iedereen. Of je nu een ervaren atleet bent of net begint met sporten,
                            bij BCN Sports vind je een plek waar je jezelf kunt uitdagen en groeien.
                        </p>
                    </div>
                </div>

                <div class="fade-in-right">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">500+</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Tevreden Sporters</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">5+</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Jaar Ervaring</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">1000+</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Trainingen Gegeven</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">100%</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Passie & Toewijding</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainer Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Ons <span class="text-[#c4ff00]">Team</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Gemotiveerde professionals die klaarstaan om je te inspireren
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Hoofd Trainer</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">I Will Inspire You</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-[#a0a0a0]">
                            Met jarenlange ervaring in fitness en een passie voor outdoor training,
                            leidt onze hoofd trainer elke sessie met energie en professionaliteit.
                        </p>
                    </div>
                </div>

                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/P1270912.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Trainer</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">Push Your Limits</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-[#a0a0a0]">
                            Gespecialiseerd in functionele training en groepsdynamiek.
                            Altijd klaar om je te motiveren en te helpen je grenzen te verleggen.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- HYROX & Competitie Credentials Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Bewezen In <span class="text-[#c4ff00]">Competitie</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Onze trainers nemen actief deel aan professionele fitness competities zoals HYROX.
                    De kennis en ervaring die wij opdoen, brengen wij direct naar onze trainingen.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-96 overflow-hidden">
                        <img src="/images/13234_20241013_111118_415132811_socialmedia.jpg" alt="BCN Sports trainer bij HYROX Amsterdam - rowing" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            HYROX Amsterdam 2024
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Rowing Station</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">Competition Ready</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-96 overflow-hidden">
                        <img src="/images/13234_20241013_111559_415165870_socialmedia.jpg" alt="BCN Sports trainer HYROX competitie - walking" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            HYROX Amsterdam 2024
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Athlete Mindset</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">Never Give Up</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-[#a0a0a0] max-w-2xl mx-auto">
                    Door zelf aan wedstrijden mee te doen, begrijpen wij wat het betekent om te presteren onder druk.
                    Deze ervaring delen wij met onze leden om hen te helpen hun eigen doelen te bereiken.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="fade-in glass-card rounded-2xl p-10">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mb-8">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase mb-4">Onze Missie</h3>
                    <p class="text-[#a0a0a0]">
                        Wij maken fitness toegankelijk en leuk voor iedereen. Door outdoor trainingen aan te bieden,
                        helpen we mensen niet alleen fysiek fitter te worden, maar ook mentaal sterker.
                        We geloven dat beweging in de natuur een positieve impact heeft op lichaam en geest.
                    </p>
                </div>

                <!-- Vision -->
                <div class="fade-in stagger-1 glass-card rounded-2xl p-10">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mb-8">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white uppercase mb-4">Onze Visie</h3>
                    <p class="text-[#a0a0a0]">
                        Wij zien een toekomst waarin outdoor fitness de norm is. Een community waar mensen
                        elkaar motiveren, ondersteunen en samen groeien. BCN Sports wil de grootste en
                        meest inspirerende outdoor fitness community van Almere worden.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Onze <span class="text-[#c4ff00]">Waarden</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Deze kernwaarden vormen de basis van alles wat we doen bij BCN Sports.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Community</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        Samen sta je sterker. We bouwen aan een hechte gemeenschap waar iedereen welkom is.
                    </p>
                </div>

                <div class="fade-in stagger-1 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Kwaliteit</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        Professionele trainers en doordachte programma's voor optimale resultaten.
                    </p>
                </div>

                <div class="fade-in stagger-2 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Passie</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        We doen wat we doen omdat we ervan houden en die energie willen delen.
                    </p>
                </div>

                <div class="fade-in stagger-3 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Natuur</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        We geloven in de kracht van buiten zijn en de positieve effecten daarvan.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Training Method Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <div class="rounded-2xl overflow-hidden">
                        <img src="/images/20241007_093350.jpg" alt="Outdoor training op mat" class="w-full h-auto">
                    </div>
                </div>
                
                <div class="fade-in-right">
                    <h2 class="text-4xl md:text-5xl font-black uppercase text-white mb-6">
                        Onze <span class="text-[#c4ff00]">Trainingsmethode</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Elke training bij BCN Sports is zorgvuldig ontworpen om maximale resultaten te behalen.
                        We combineren functionele oefeningen, cardio en kracht in een dynamische workout die
                        geschikt is voor alle niveaus.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-8">
                        Of je nu traint op gras, op een mat, of op het strand - onze trainingen passen zich aan
                        aan de omgeving en maken gebruik van de natuurlijke elementen om je sterker te maken.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Functionele bewegingen voor alledaagse kracht
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            HIIT training voor maximale vetverbranding
                        </li>
                        <li class="flex items-center text-white">
                            <svg class="w-6 h-6 text-[#c4ff00] mr-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            Scaleerbare oefeningen voor elk niveau
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Outdoor Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Waarom <span class="text-[#c4ff00]">Outdoor</span> Fitness?
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Buiten trainen biedt unieke voordelen die je in een sportschool niet vindt.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Vitamine D</h3>
                    <p class="text-[#a0a0a0]">
                        Zonlicht zorgt voor natuurlijke vitamine D productie, essentieel voor je gezondheid en immuunsysteem.
                    </p>
                </div>

                <div class="fade-in stagger-1 glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Mentale Boost</h3>
                    <p class="text-[#a0a0a0]">
                        Beweging in de natuur vermindert stress, verbetert je stemming en geeft een mentale reset.
                    </p>
                </div>

                <div class="fade-in stagger-2 glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Effectiever</h3>
                    <p class="text-[#a0a0a0]">
                        Training op oneven terrein en met natuurlijke elementen activeert meer spiergroepen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-6">
                Word onderdeel van <span class="text-[#c4ff00]">BCN Sports</span>
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Sluit je aan bij onze community en ontdek de kracht van outdoor fitness.
                Je eerste stap naar een fitter en gezonder leven begint hier.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg">
                    Neem Contact Op
                </a>
                <a href="{{ route('prijzen') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Bekijk Prijzen
                </a>
            </div>
        </div>
    </section>
@endsection
