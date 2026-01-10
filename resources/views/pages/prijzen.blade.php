@extends('layouts.app')

@section('title', 'Prijzen - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Bekijk de prijzen van BCN Sports bootcamp trainingen in Almere. Solo pass vanaf €39,95/maand, family pakket €59,95/maand, of kies voor een 10-rittenkaart.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/20240902_195039.jpg" alt="BCN Sports Training" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a] via-[#0a0a0a]/95 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Onze <span class="text-[#c4ff00]">Prijzen</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Transparante prijzen zonder verborgen kosten. Kies het abonnement dat bij jouw lifestyle past.
            </p>
        </div>
    </section>

    <!-- Pricing Cards Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Solo Bootcamp Pass - Featured -->
                <div class="fade-in relative rounded-2xl overflow-hidden lg:scale-105 z-10">
                    <div class="absolute inset-0 bg-gradient-to-b from-[#c4ff00]/20 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full z-20">
                        Populair
                    </div>
                    <div class="neon-border rounded-2xl overflow-hidden relative">
                        <div class="bg-[#c4ff00] p-6 text-center">
                            <h3 class="text-xl font-bold text-[#0a0a0a] uppercase">Solo Bootcamp Pass</h3>
                            <p class="text-[#0a0a0a]/70 text-sm mt-2">Onbeperkt trainen</p>
                        </div>
                        <div class="p-8 bg-[#1a1a1a]">
                            <div class="text-center mb-8">
                                <span class="text-5xl font-black text-[#c4ff00]">€39,95</span>
                                <span class="text-[#a0a0a0] block mt-2">per maand</span>
                            </div>
                            <ul class="space-y-4 mb-8">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-[#a0a0a0] text-sm">Onbeperkt bootcamp lessen</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-[#a0a0a0] text-sm">Professionele begeleiding</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-[#a0a0a0] text-sm">Flexibel opzegbaar</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-[#a0a0a0] text-sm">Toegang tot alle locaties</span>
                                </li>
                            </ul>
                            <a href="{{ route('contact') }}" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                                Aanmelden
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Family Package -->
                <div class="fade-in stagger-1 dark-card rounded-2xl overflow-hidden">
                    <div class="bg-[#141414] p-6 text-center border-b border-white/5">
                        <h3 class="text-xl font-bold text-white uppercase">Family Package</h3>
                        <p class="text-[#a0a0a0] text-sm mt-2">Tot 4 personen</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-black text-[#c4ff00]">€59,95</span>
                            <span class="text-[#a0a0a0] block mt-2">per maand</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Tot 4 personen onbeperkt</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Alle bootcamp lessen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Professionele begeleiding</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Samen sporten, samen groeien</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Beste prijs per persoon!</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white text-center py-4 rounded-full font-bold uppercase text-sm tracking-wider transition">
                            Aanmelden
                        </a>
                    </div>
                </div>

                <!-- 10-Rittenkaart -->
                <div class="fade-in stagger-2 dark-card rounded-2xl overflow-hidden">
                    <div class="bg-[#141414] p-6 text-center border-b border-white/5">
                        <h3 class="text-xl font-bold text-white uppercase">10-Rittenkaart</h3>
                        <p class="text-[#a0a0a0] text-sm mt-2">Flexibel trainen</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-black text-[#c4ff00]">€99</span>
                            <span class="text-[#a0a0a0] block mt-2">per 10 lessen</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">10 bootcamp lessen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">6 maanden geldig</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Ideaal voor beginners</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">€9,90 per les</span>
                            </li>
                        </ul>
                        <a href="{{ route('contact') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white text-center py-4 rounded-full font-bold uppercase text-sm tracking-wider transition">
                            Aanmelden
                        </a>
                    </div>
                </div>

                <!-- Losse Les -->
                <div class="fade-in stagger-3 dark-card rounded-2xl overflow-hidden">
                    <div class="bg-[#141414] p-6 text-center border-b border-white/5">
                        <h3 class="text-xl font-bold text-white uppercase">Losse Les</h3>
                        <p class="text-[#a0a0a0] text-sm mt-2">Probeer vrijblijvend</p>
                    </div>
                    <div class="p-8">
                        <div class="text-center mb-8">
                            <span class="text-5xl font-black text-[#c4ff00]">€12,50</span>
                            <span class="text-[#a0a0a0] block mt-2">per les</span>
                        </div>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">1 bootcamp les</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Geen verplichtingen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Perfect om te proberen</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-[#a0a0a0] text-sm">Reserveer online</span>
                            </li>
                        </ul>
                        <a href="{{ route('rooster') }}" class="block w-full bg-[#141414] hover:bg-[#c4ff00] hover:text-[#0a0a0a] text-white text-center py-4 rounded-full font-bold uppercase text-sm tracking-wider transition">
                            Boek Nu
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Vergelijk <span class="text-[#c4ff00]">Pakketten</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg">Welk pakket past het beste bij jou?</p>
            </div>

            <div class="fade-in overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b border-white/10">
                            <th class="text-left py-4 px-4 font-bold text-white uppercase text-sm">Kenmerken</th>
                            <th class="text-center py-4 px-4 font-bold text-white uppercase text-sm">Solo Pass</th>
                            <th class="text-center py-4 px-4 font-bold text-[#c4ff00] uppercase text-sm bg-[#c4ff00]/10">Family</th>
                            <th class="text-center py-4 px-4 font-bold text-white uppercase text-sm">10-Ritten</th>
                            <th class="text-center py-4 px-4 font-bold text-white uppercase text-sm">Losse Les</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-b border-white/5">
                            <td class="py-4 px-4 text-[#a0a0a0]">Prijs</td>
                            <td class="py-4 px-4 text-center font-bold text-white">€39,95/mnd</td>
                            <td class="py-4 px-4 text-center font-bold text-white bg-[#c4ff00]/5">€59,95/mnd</td>
                            <td class="py-4 px-4 text-center font-bold text-white">€99</td>
                            <td class="py-4 px-4 text-center font-bold text-white">€12,50</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-4 px-4 text-[#a0a0a0]">Aantal personen</td>
                            <td class="py-4 px-4 text-center text-white">1</td>
                            <td class="py-4 px-4 text-center text-white bg-[#c4ff00]/5">Tot 4</td>
                            <td class="py-4 px-4 text-center text-white">1</td>
                            <td class="py-4 px-4 text-center text-white">1</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-4 px-4 text-[#a0a0a0]">Onbeperkte lessen</td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-5 h-5 text-[#c4ff00] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center bg-[#c4ff00]/5">
                                <svg class="w-5 h-5 text-[#c4ff00] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-5 h-5 text-[#6b6b6b] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-5 h-5 text-[#6b6b6b] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-4 px-4 text-[#a0a0a0]">Prijs per les (bij 8x/mnd)</td>
                            <td class="py-4 px-4 text-center text-[#c4ff00] font-bold">€5,00</td>
                            <td class="py-4 px-4 text-center text-[#c4ff00] font-bold bg-[#c4ff00]/5">€1,87*</td>
                            <td class="py-4 px-4 text-center text-white">€9,90</td>
                            <td class="py-4 px-4 text-center text-white">€12,50</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-4 px-4 text-[#a0a0a0]">Flexibel opzegbaar</td>
                            <td class="py-4 px-4 text-center">
                                <svg class="w-5 h-5 text-[#c4ff00] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center bg-[#c4ff00]/5">
                                <svg class="w-5 h-5 text-[#c4ff00] mx-auto" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </td>
                            <td class="py-4 px-4 text-center text-[#6b6b6b]">N.v.t.</td>
                            <td class="py-4 px-4 text-center text-[#6b6b6b]">N.v.t.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-xs text-[#6b6b6b] mt-4">* Berekend bij 4 personen die elk 8 lessen per maand volgen (32 lessen totaal)</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Veelgestelde <span class="text-[#c4ff00]">Vragen</span>
                </h2>
            </div>

            <div class="space-y-4">
                <div class="fade-in dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Kan ik eerst een proefles doen?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Ja, je kunt altijd een losse les boeken voor €12,50 om te ervaren of BCN Sports bij je past. Neem contact met ons op om je eerste les te plannen!</p>
                    </div>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Hoe werkt het Family pakket?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Met het Family pakket kunnen tot 4 personen (gezinsleden of vrienden) onbeperkt deelnemen aan alle bootcamp lessen. Iedereen traint onder hetzelfde abonnement maar kan op eigen tijden reserveren.</p>
                    </div>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Hoe lang is de 10-rittenkaart geldig?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">De 10-rittenkaart is 6 maanden geldig vanaf de datum van aankoop. Dit geeft je voldoende flexibiliteit om de lessen in te plannen.</p>
                    </div>
                </div>

                <div class="fade-in stagger-3 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Kan ik mijn abonnement pauzeren?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Ja, bij langere afwezigheid (vakantie, blessure) kun je je abonnement tijdelijk pauzeren. Neem contact met ons op om de mogelijkheden te bespreken.</p>
                    </div>
                </div>

                <div class="fade-in stagger-4 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Wat is de opzegtermijn?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Onze abonnementen zijn flexibel opzegbaar met een opzegtermijn van 1 maand. Je kunt opzeggen per de eerste van de volgende maand.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-6">
                Klaar om te <span class="text-[#c4ff00]">starten</span>?
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Neem contact met ons op voor meer informatie of meld je direct aan voor een van onze pakketten.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg">
                    Neem Contact Op
                </a>
                <a href="{{ route('rooster') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Bekijk Rooster
                </a>
            </div>
        </div>
    </section>
@endsection
