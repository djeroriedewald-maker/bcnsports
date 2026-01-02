@extends('layouts.app')

@section('title', 'Over Ons - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Leer meer over BCN Sports, het team achter de outdoor bootcamp trainingen in Almere. Onze missie is om mensen fitter en gezonder te maken in de buitenlucht.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Over <span class="text-primary">BCN Sports</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Passie voor fitness, liefde voor de buitenlucht, en toewijding aan jouw gezondheid.
            </p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-6">Ons Verhaal</h2>
                    <div class="space-y-4 text-gray-600">
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
                <div class="bg-light rounded-2xl p-8 md:p-12">
                    <div class="grid grid-cols-2 gap-6 text-center">
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">500+</div>
                            <div class="text-gray-600">Tevreden sporters</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">5+</div>
                            <div class="text-gray-600">Jaar ervaring</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">1000+</div>
                            <div class="text-gray-600">Trainingen gegeven</div>
                        </div>
                        <div>
                            <div class="text-4xl font-bold text-primary mb-2">100%</div>
                            <div class="text-gray-600">Passie & toewijding</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mission -->
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Onze Missie</h3>
                    <p class="text-gray-600">
                        Wij maken fitness toegankelijk en leuk voor iedereen. Door outdoor trainingen aan te bieden,
                        helpen we mensen niet alleen fysiek fitter te worden, maar ook mentaal sterker.
                        We geloven dat beweging in de natuur een positieve impact heeft op lichaam en geest.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-lg">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-secondary mb-4">Onze Visie</h3>
                    <p class="text-gray-600">
                        Wij zien een toekomst waarin outdoor fitness de norm is. Een community waar mensen
                        elkaar motiveren, ondersteunen en samen groeien. BCN Sports wil de grootste en
                        meest inspirerende outdoor fitness community van Almere worden.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Onze Waarden</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Deze kernwaarden vormen de basis van alles wat we doen bij BCN Sports.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Value 1 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Community</h3>
                    <p class="text-gray-600">
                        Samen sta je sterker. We bouwen aan een hechte gemeenschap waar iedereen welkom is.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Kwaliteit</h3>
                    <p class="text-gray-600">
                        Professionele trainers en doordachte programma's voor optimale resultaten.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Passie</h3>
                    <p class="text-gray-600">
                        We doen wat we doen omdat we ervan houden en die energie willen delen.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="text-center">
                    <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-3">Natuur</h3>
                    <p class="text-gray-600">
                        We geloven in de kracht van buiten zijn en de positieve effecten daarvan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Outdoor Section -->
    <section class="py-20 bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Waarom Outdoor Fitness?</h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Buiten trainen biedt unieke voordelen die je in een sportschool niet vindt.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white/10 backdrop-blur rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white mb-3">Vitamine D</h3>
                    <p class="text-gray-300">
                        Zonlicht zorgt voor natuurlijke vitamine D productie, essentieel voor je gezondheid en immuunsysteem.
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white mb-3">Mentale Boost</h3>
                    <p class="text-gray-300">
                        Beweging in de natuur vermindert stress, verbetert je stemming en geeft een mentale reset.
                    </p>
                </div>

                <div class="bg-white/10 backdrop-blur rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-primary mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white mb-3">Effectiever</h3>
                    <p class="text-gray-300">
                        Training op oneven terrein en met natuurlijke elementen activeert meer spiergroepen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-light">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-6">
                Word onderdeel van BCN Sports
            </h2>
            <p class="text-xl text-gray-600 mb-8">
                Sluit je aan bij onze community en ontdek de kracht van outdoor fitness.
                Je eerste stap naar een fitter en gezonder leven begint hier.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold text-lg transition">
                    Neem Contact Op
                </a>
                <a href="{{ route('prijzen') }}" class="inline-block bg-secondary hover:bg-secondary-light text-white px-8 py-4 rounded-full font-bold text-lg transition">
                    Bekijk Prijzen
                </a>
            </div>
        </div>
    </section>
@endsection
