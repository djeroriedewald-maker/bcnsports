@extends('layouts.app')

@section('title', 'Prijzen - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Bekijk de prijzen van BCN Sports bootcamp trainingen in Almere. Solo pass vanaf €39,95/maand, family pakket €59,95/maand, of kies voor een 10-rittenkaart.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-secondary py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Onze <span class="text-primary">Prijzen</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Transparante prijzen zonder verborgen kosten. Kies het abonnement dat bij jouw lifestyle past.
            </p>
        </div>
    </section>

    <!-- Pricing Cards Section -->
    <section class="py-20 bg-light">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Solo Bootcamp Pass -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-secondary p-6 text-center">
                        <h3 class="text-2xl font-bold text-white">Solo Bootcamp Pass</h3>
                        <p class="text-gray-300 mt-2">Onbeperkt trainen</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-bold text-primary">€39,95</span>
                            <span class="text-gray-600 block mt-2">per maand</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Onbeperkt bootcamp lessen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Professionele begeleiding</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Flexibel opzegbaar</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Toegang tot alle locaties</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full bg-secondary hover:bg-secondary-light text-white text-center py-4 rounded-full font-semibold transition">
                            Aanmelden
                        </a>
                    </div>
                </div>

                <!-- Family Package -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden transform lg:scale-105 relative">
                    <div class="absolute top-4 right-4 bg-primary text-white text-sm font-bold py-1 px-4 rounded-full">
                        POPULAIR
                    </div>
                    <div class="bg-primary p-6 text-center">
                        <h3 class="text-2xl font-bold text-white">Family Package</h3>
                        <p class="text-white/80 mt-2">Tot 4 personen</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-bold text-primary">€59,95</span>
                            <span class="text-gray-600 block mt-2">per maand</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Tot 4 personen onbeperkt</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Alle bootcamp lessen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Professionele begeleiding</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Samen sporten, samen groeien</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Beste prijs per persoon!</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full bg-primary hover:bg-primary-dark text-white text-center py-4 rounded-full font-semibold transition">
                            Aanmelden
                        </a>
                    </div>
                </div>

                <!-- 10-Rittenkaart -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-secondary p-6 text-center">
                        <h3 class="text-2xl font-bold text-white">10-Rittenkaart</h3>
                        <p class="text-gray-300 mt-2">Flexibel trainen</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-bold text-primary">€99</span>
                            <span class="text-gray-600 block mt-2">per 10 lessen</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">10 bootcamp lessen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">6 maanden geldig</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Ideaal voor beginners</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">€9,90 per les</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full bg-secondary hover:bg-secondary-light text-white text-center py-4 rounded-full font-semibold transition">
                            Aanmelden
                        </a>
                    </div>
                </div>

                <!-- Losse Les -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="bg-secondary p-6 text-center">
                        <h3 class="text-2xl font-bold text-white">Losse Les</h3>
                        <p class="text-gray-300 mt-2">Probeer vrijblijvend</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-bold text-primary">€12,50</span>
                            <span class="text-gray-600 block mt-2">per les</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">1 bootcamp les</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Geen verplichtingen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Perfect om te proberen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-600">Reserveer online</span>
                            </li>
                        </ul>
                        <a href="{{ route('rooster') }}" class="block w-full bg-secondary hover:bg-secondary-light text-white text-center py-4 rounded-full font-semibold transition">
                            Boek Nu
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Vergelijk Onze Pakketten</h2>
                <p class="text-xl text-gray-600">Welk pakket past het beste bij jou?</p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b-2 border-gray-200">
                            <th class="text-left py-4 px-4 font-semibold text-secondary">Kenmerken</th>
                            <th class="text-center py-4 px-4 font-semibold text-secondary">Solo Pass</th>
                            <th class="text-center py-4 px-4 font-semibold text-primary bg-primary/5">Family</th>
                            <th class="text-center py-4 px-4 font-semibold text-secondary">10-Ritten</th>
                            <th class="text-center py-4 px-4 font-semibold text-secondary">Losse Les</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-4 text-gray-600">Prijs</td>
                            <td class="py-4 px-4 text-center font-semibold">€39,95/mnd</td>
                            <td class="py-4 px-4 text-center font-semibold bg-primary/5">€59,95/mnd</td>
                            <td class="py-4 px-4 text-center font-semibold">€99</td>
                            <td class="py-4 px-4 text-center font-semibold">€12,50</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-4 text-gray-600">Aantal personen</td>
                            <td class="py-4 px-4 text-center">1</td>
                            <td class="py-4 px-4 text-center bg-primary/5">Tot 4</td>
                            <td class="py-4 px-4 text-center">1</td>
                            <td class="py-4 px-4 text-center">1</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-4 text-gray-600">Onbeperkte lessen</td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-6 h-6 text-primary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center bg-primary/5">
                                <svg class="w-6 h-6 text-primary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-6 h-6 text-gray-300 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-6 h-6 text-gray-300 mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-4 text-gray-600">Prijs per les (bij 8x/mnd)</td>
                            <td class="py-4 px-4 text-center text-primary font-semibold">€5,00</td>
                            <td class="py-4 px-4 text-center text-primary font-semibold bg-primary/5">€1,87*</td>
                            <td class="py-4 px-4 text-center">€9,90</td>
                            <td class="py-4 px-4 text-center">€12,50</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-4 px-4 text-gray-600">Flexibel opzegbaar</td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-6 h-6 text-primary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center bg-primary/5">
                                <svg class="w-6 h-6 text-primary mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center">N.v.t.</td>
                            <td class="py-4 px-4 text-center">N.v.t.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-sm text-gray-500 mt-4">* Berekend bij 4 personen die elk 8 lessen per maand volgen (32 lessen totaal)</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-light">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4">Veelgestelde Vragen</h2>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-xl shadow-md">
                    <button class="w-full text-left px-6 py-4 font-semibold text-secondary flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Kan ik eerst een proefles doen?</span>
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">Ja, je kunt altijd een losse les boeken voor €12,50 om te ervaren of BCN Sports bij je past. Neem contact met ons op om je eerste les te plannen!</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md">
                    <button class="w-full text-left px-6 py-4 font-semibold text-secondary flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Hoe werkt het Family pakket?</span>
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">Met het Family pakket kunnen tot 4 personen (gezinsleden of vrienden) onbeperkt deelnemen aan alle bootcamp lessen. Iedereen traint onder hetzelfde abonnement maar kan op eigen tijden reserveren.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md">
                    <button class="w-full text-left px-6 py-4 font-semibold text-secondary flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Hoe lang is de 10-rittenkaart geldig?</span>
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">De 10-rittenkaart is 6 maanden geldig vanaf de datum van aankoop. Dit geeft je voldoende flexibiliteit om de lessen in te plannen.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md">
                    <button class="w-full text-left px-6 py-4 font-semibold text-secondary flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Kan ik mijn abonnement pauzeren?</span>
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">Ja, bij langere afwezigheid (vakantie, blessure) kun je je abonnement tijdelijk pauzeren. Neem contact met ons op om de mogelijkheden te bespreken.</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md">
                    <button class="w-full text-left px-6 py-4 font-semibold text-secondary flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Wat is de opzegtermijn?</span>
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600">Onze abonnementen zijn flexibel opzegbaar met een opzegtermijn van 1 maand. Je kunt opzeggen per de eerste van de volgende maand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-secondary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Klaar om te starten?
            </h2>
            <p class="text-xl text-gray-300 mb-8">
                Neem contact met ons op voor meer informatie of meld je direct aan voor een van onze pakketten.
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
@endsection
