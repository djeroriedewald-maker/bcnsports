@extends('layouts.app')

@section('title', 'BCN Sports - Outdoor Bootcamp Training Almere')
@section('meta_description', 'BCN Sports biedt professionele outdoor bootcamp trainingen in Almere. Word fitter, sterker en gezonder met onze groepslessen in de buitenlucht. Probeer nu!')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-secondary min-h-[600px] flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-secondary/95 to-secondary/70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                    Train <span class="text-primary">Buiten</span>, Voel Je <span class="text-primary">Beter</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Sluit je aan bij BCN Sports voor uitdagende outdoor bootcamp trainingen in Almere.
                    Verbeter je conditie, bouw kracht op en word onderdeel van onze sportieve community.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('prijzen') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold text-lg transition text-center">
                        Start Vandaag - Vanaf €39,95/maand
                    </a>
                    <a href="{{ route('rooster') }}" class="inline-block border-2 border-white text-white hover:bg-white hover:text-secondary px-8 py-4 rounded-full font-bold text-lg transition text-center">
                        Bekijk Rooster
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Waarom BCN Sports?</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Ontdek waarom honderden mensen in Almere kiezen voor onze outdoor bootcamp trainingen.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-light rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-4">Intensieve Trainingen</h3>
                    <p class="text-gray-600">
                        Elke sessie is ontworpen om je uit te dagen en resultaten te boeken. Variatie in oefeningen houdt het leuk en effectief.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-light rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-4">Sterke Community</h3>
                    <p class="text-gray-600">
                        Train samen met gelijkgestemde mensen. Onze community motiveert en ondersteunt elkaar om doelen te bereiken.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-light rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-4">Buiten in de Natuur</h3>
                    <p class="text-gray-600">
                        Geen benauwde sportschool, maar frisse lucht en de mooie omgeving van Almere. Trainen wordt een belevenis.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Onze Trainingen</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Van beginner tot gevorderd, wij hebben de juiste training voor jou.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bootcamp -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="bg-secondary h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-secondary mb-4">Outdoor Bootcamp</h3>
                        <p class="text-gray-600 mb-6">
                            Onze signature groepstraining combineert cardio, kracht en functionele oefeningen.
                            Geschikt voor alle niveaus met aanpassingen per persoon.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                60 minuten per sessie
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Professionele begeleiding
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Alle niveaus welkom
                            </li>
                        </ul>
                        <a href="{{ route('rooster') }}" class="inline-block text-primary font-semibold hover:text-primary-dark transition">
                            Bekijk trainingstijden &rarr;
                        </a>
                    </div>
                </div>

                <!-- Family Training -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="bg-primary h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-secondary mb-4">Family Training</h3>
                        <p class="text-gray-600 mb-6">
                            Train samen met je gezin of vrienden! Ons family pakket biedt de mogelijkheid om met
                            maximaal 4 personen onbeperkt deel te nemen aan alle trainingen.
                        </p>
                        <ul class="space-y-2 text-gray-600 mb-6">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Tot 4 personen
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Onbeperkt toegang
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 text-primary mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Leuk en verbindend
                            </li>
                        </ul>
                        <a href="{{ route('prijzen') }}" class="inline-block text-primary font-semibold hover:text-primary-dark transition">
                            Bekijk prijzen &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Preview Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Flexibele Prijzen</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Kies het abonnement dat bij jou past. Geen verborgen kosten, wel maximaal resultaat.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Solo Pass -->
                <div class="bg-light rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-secondary mb-2">Solo Bootcamp Pass</h3>
                    <p class="text-gray-600 mb-4">Onbeperkt trainen</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-primary">€39,95</span>
                        <span class="text-gray-600">/maand</span>
                    </div>
                    <a href="{{ route('prijzen') }}" class="inline-block w-full bg-secondary hover:bg-secondary-light text-white py-3 rounded-full font-semibold transition">
                        Meer Info
                    </a>
                </div>

                <!-- Family Package -->
                <div class="bg-primary rounded-2xl p-8 text-center shadow-xl transform scale-105">
                    <div class="bg-white text-primary text-sm font-bold py-1 px-4 rounded-full inline-block mb-4">
                        POPULAIR
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Family Package</h3>
                    <p class="text-white/80 mb-4">Tot 4 personen</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-white">€59,95</span>
                        <span class="text-white/80">/maand</span>
                    </div>
                    <a href="{{ route('prijzen') }}" class="inline-block w-full bg-white hover:bg-gray-100 text-primary py-3 rounded-full font-semibold transition">
                        Meer Info
                    </a>
                </div>

                <!-- 10-rittenkaart -->
                <div class="bg-light rounded-2xl p-8 text-center hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-secondary mb-2">10-Rittenkaart</h3>
                    <p class="text-gray-600 mb-4">Flexibel trainen</p>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-primary">€99</span>
                        <span class="text-gray-600">/10 lessen</span>
                    </div>
                    <a href="{{ route('prijzen') }}" class="inline-block w-full bg-secondary hover:bg-secondary-light text-white py-3 rounded-full font-semibold transition">
                        Meer Info
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('prijzen') }}" class="inline-block text-primary font-semibold hover:text-primary-dark transition text-lg">
                    Bekijk alle prijzen en opties &rarr;
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Klaar om te beginnen?
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Neem vandaag nog de eerste stap naar een fitter en gezonder leven.
                Onze trainers staan klaar om je te helpen je doelen te bereiken.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold text-lg transition">
                    Neem Contact Op
                </a>
                <a href="{{ route('rooster') }}" class="inline-block border-2 border-white text-white hover:bg-white hover:text-secondary px-8 py-4 rounded-full font-bold text-lg transition">
                    Bekijk Rooster
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-20 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Wat Onze Leden Zeggen</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-primary">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "BCN Sports heeft mijn leven veranderd! De trainingen zijn uitdagend maar toegankelijk, en de sfeer is geweldig."
                    </p>
                    <p class="font-semibold text-secondary">- Marieke V.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-primary">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Het family pakket is perfect voor ons gezin. We trainen samen en het is een geweldige manier om quality time door te brengen."
                    </p>
                    <p class="font-semibold text-secondary">- Familie De Jong</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-primary">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">
                        "Na 3 maanden bootcamp ben ik 8 kilo afgevallen en voel ik me fitter dan ooit. Bedankt BCN Sports!"
                    </p>
                    <p class="font-semibold text-secondary">- Thomas K.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
