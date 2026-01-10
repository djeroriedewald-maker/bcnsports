@extends('layouts.app')

@section('title', 'Rooster - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Bekijk het lesrooster van BCN Sports en boek je bootcamp training in Almere. Meerdere lessen per week op verschillende tijdstippen.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/20231220_085224.jpg" alt="BCN Sports Training" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a] via-[#0a0a0a]/95 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Les<span class="text-[#c4ff00]">rooster</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Bekijk wanneer onze bootcamp trainingen plaatsvinden en reserveer direct je plek.
            </p>
        </div>
    </section>

    <!-- Booking Widget Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="fade-in glass-card rounded-2xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-white uppercase mb-4">Reserveer Je Training</h2>
                    <p class="text-[#a0a0a0]">Selecteer een les en boek direct je plek</p>
                </div>

                <!-- Gratis Proefles Badge -->
                <div class="flex justify-center mb-8">
                    <div class="inline-flex items-center bg-[#c4ff00] text-[#0a0a0a] px-6 py-3 rounded-full font-black uppercase text-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                        </svg>
                        Gratis Proefles
                    </div>
                </div>

                <!-- BCN Sports Booking Widget -->
                <div class="bg-[#141414] rounded-xl p-8">
                    <div id="bcn-widget-container-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc" style="position: relative; width: 100% !important; max-width: 100% !important; min-height: 400px; box-sizing: border-box;">
                        <!-- Loading Spinner -->
                        <div id="bcn-widget-loader-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc" style="position: absolute; top: 0; left: 0; width: 100%; height: 400px; display: flex; align-items: center; justify-content: center; background: #141414;">
                            <div style="text-align: center;">
                                <div style="width: 48px; height: 48px; border: 4px solid #e5e7eb; border-top-color: #c4ff00; border-radius: 50%; animation: bcn-spin 0.8s linear infinite; margin: 0 auto 12px;"></div>
                                <div style="color: #6b7280; font-size: 14px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Widget laden...</div>
                            </div>
                        </div>
                        <!-- Widget iframe -->
                        <iframe
                            id="bcn-widget-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc"
                            src="https://app.bcnsports.nl/widget/render/wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc"
                            width="100%"
                            height="600"
                            frameborder="0"
                            scrolling="no"
                            allow="fullscreen"
                            style="border: none; width: 100% !important; max-width: 100% !important; min-height: 400px; display: block; box-sizing: border-box; transition: height 0.3s ease; opacity: 0;"
                            onload="document.getElementById('bcn-widget-loader-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc').style.display='none'; this.style.opacity='1';">
                        </iframe>
                    </div>
                    <style>
                        @keyframes bcn-spin {
                            to { transform: rotate(360deg); }
                        }
                        #bcn-widget-container-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc, #bcn-widget-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc {
                            width: 100% !important;
                            max-width: 100% !important;
                        }
                    </style>
                    <script>
                        (function() {
                            window.addEventListener('message', function(e) {
                                if (e.data && e.data.type === 'widget-resize' && e.data.source === 'bcn-widget') {
                                    var iframe = document.getElementById('bcn-widget-wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc');
                                    if (iframe && e.data.height) {
                                        iframe.style.height = e.data.height + 'px';
                                    }
                                }
                            });
                        })();
                    </script>
                </div>

                <!-- Weekly schedule -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-white uppercase mb-8 text-center">Wekelijks Schema</h3>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Maandag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Maandag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2 border-b border-white/5">
                                    <span class="text-[#a0a0a0]">Ochtend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">07:00</span>
                                </li>
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Avond Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">19:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Dinsdag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Dinsdag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2 border-b border-white/5">
                                    <span class="text-[#a0a0a0]">Ochtend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">09:00</span>
                                </li>
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Avond Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">18:30</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Woensdag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Woensdag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2 border-b border-white/5">
                                    <span class="text-[#a0a0a0]">Ochtend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">07:00</span>
                                </li>
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Avond Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">19:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Donderdag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Donderdag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2 border-b border-white/5">
                                    <span class="text-[#a0a0a0]">Ochtend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">09:00</span>
                                </li>
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Avond Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">18:30</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Vrijdag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Vrijdag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Ochtend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">07:00</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Zaterdag -->
                        <div class="dark-card rounded-xl p-6">
                            <h4 class="font-bold text-white uppercase flex items-center mb-4">
                                <span class="w-3 h-3 bg-[#c4ff00] rounded-full mr-3"></span>
                                Zaterdag
                            </h4>
                            <ul class="space-y-3">
                                <li class="flex justify-between items-center py-2">
                                    <span class="text-[#a0a0a0]">Weekend Bootcamp</span>
                                    <span class="text-[#c4ff00] font-bold">09:00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Trainings<span class="text-[#c4ff00]">locatie</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg">Onze outdoor trainingen vinden plaats in Almere</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="fade-in-left dark-card rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white uppercase mb-6">Wat moet je meenemen?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Sportkleding geschikt voor buiten</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Goede sportschoenen</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Waterfles</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Handdoek (optioneel)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Positieve energie!</span>
                        </li>
                    </ul>
                </div>

                <div class="fade-in-right dark-card rounded-2xl p-8">
                    <h3 class="text-xl font-bold text-white uppercase mb-6">Belangrijke informatie</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Wees 5 minuten voor aanvang aanwezig</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Training gaat door bij alle weersomstandigheden</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#ff3333] mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Bij extreme weersomstandigheden wordt de les geannuleerd</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-[#c4ff00] mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-[#a0a0a0]">Annuleer minimaal 12 uur van tevoren</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-6">
                Heb je vragen over het <span class="text-[#c4ff00]">rooster</span>?
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Neem gerust contact met ons op. We helpen je graag bij het vinden van de juiste lessen.
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
