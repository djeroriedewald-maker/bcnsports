@extends('layouts.app')

@section('title', 'Rooster - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Bekijk het lesrooster van BCN Sports en boek je bootcamp training in Almere. Meerdere lessen per week op verschillende tijdstippen.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Les<span class="text-primary">rooster</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Bekijk wanneer onze bootcamp trainingen plaatsvinden en reserveer direct je plek.
            </p>
        </div>
    </section>

    <!-- Booking Widget Section -->
    <section class="py-20 bg-light">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-secondary mb-4">Reserveer Je Training</h2>
                    <p class="text-gray-600">Selecteer een les en boek direct je plek</p>
                </div>

                <!-- Placeholder for booking widget -->
                <div class="bg-light rounded-xl p-12 text-center border-2 border-dashed border-gray-300">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <h3 class="text-xl font-semibold text-secondary mb-2">Boekingswidget</h3>
                    <p class="text-gray-600 mb-6">Hier komt het boekingssysteem waar je direct lessen kunt reserveren.</p>
                    <p class="text-sm text-gray-500">Integratie met boekingssysteem volgt binnenkort.</p>
                </div>

                <!-- Temporary schedule display -->
                <div class="mt-12">
                    <h3 class="text-xl font-bold text-secondary mb-6 text-center">Wekelijks Schema</h3>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Maandag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Maandag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Ochtend Bootcamp</span>
                                    <span class="font-semibold">07:00</span>
                                </li>
                                <li class="flex justify-between text-gray-600">
                                    <span>Avond Bootcamp</span>
                                    <span class="font-semibold">19:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Dinsdag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Dinsdag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Ochtend Bootcamp</span>
                                    <span class="font-semibold">09:00</span>
                                </li>
                                <li class="flex justify-between text-gray-600">
                                    <span>Avond Bootcamp</span>
                                    <span class="font-semibold">18:30</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Woensdag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Woensdag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Ochtend Bootcamp</span>
                                    <span class="font-semibold">07:00</span>
                                </li>
                                <li class="flex justify-between text-gray-600">
                                    <span>Avond Bootcamp</span>
                                    <span class="font-semibold">19:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Donderdag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Donderdag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Ochtend Bootcamp</span>
                                    <span class="font-semibold">09:00</span>
                                </li>
                                <li class="flex justify-between text-gray-600">
                                    <span>Avond Bootcamp</span>
                                    <span class="font-semibold">18:30</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Vrijdag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Vrijdag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Ochtend Bootcamp</span>
                                    <span class="font-semibold">07:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Zaterdag -->
                        <div class="bg-light rounded-xl p-6">
                            <h4 class="font-bold text-secondary mb-4 flex items-center">
                                <span class="w-3 h-3 bg-primary rounded-full mr-2"></span>
                                Zaterdag
                            </h4>
                            <ul class="space-y-2">
                                <li class="flex justify-between text-gray-600">
                                    <span>Weekend Bootcamp</span>
                                    <span class="font-semibold">09:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Trainingslocatie</h2>
                <p class="text-xl text-gray-600">Onze outdoor trainingen vinden plaats in Almere</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="bg-light rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-secondary mb-4">Wat moet je meenemen?</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Sportkleding geschikt voor buiten</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Goede sportschoenen</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Waterfles</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Handdoek (optioneel)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-600">Positieve energie!</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-light rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-secondary mb-4">Belangrijke informatie</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-600">Wees 5 minuten voor aanvang aanwezig</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                            <span class="text-gray-600">Training gaat door bij alle weersomstandigheden</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-600">Bij extreme weersomstandigheden wordt de les geannuleerd</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-secondary mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-600">Annuleer minimaal 12 uur van tevoren</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Heb je vragen over het rooster?
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Neem gerust contact met ons op. We helpen je graag bij het vinden van de juiste lessen.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="inline-block bg-primary hover:bg-primary-dark text-white px-8 py-4 rounded-full font-bold text-lg transition">
                    Neem Contact Op
                </a>
                <a href="{{ route('prijzen') }}" class="inline-block border-2 border-white text-white hover:bg-white hover:text-secondary px-8 py-4 rounded-full font-bold text-lg transition">
                    Bekijk Prijzen
                </a>
            </div>
        </div>
    </section>
@endsection
