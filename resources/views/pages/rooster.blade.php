@extends('layouts.app')

@section('title', 'Rooster - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Bekijk het lesrooster van BCN Sports en boek je bootcamp training in Almere. Meerdere lessen per week op verschillende tijdstippen.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/20231220_085224.jpg" alt="BCN Sports Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
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

                <!-- BCN Sports Booking Widget -->
                <div class="bg-[#141414] rounded-xl p-8 text-center">
                    <a href="https://app.bcnsports.nl/widget/render/wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center bg-[#c4ff00] text-[#0a0a0a] px-8 py-4 rounded-full font-black uppercase text-lg hover:bg-[#d4ff33] transition-colors">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Boek Nu Je Proefles
                    </a>
                    <p class="text-[#a0a0a0] mt-4 text-sm">Opent in een nieuw venster</p>
                </div>

                <!-- Weekly schedule widget -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-white uppercase mb-8 text-center">Wekelijks Schema</h3>

                    <div id="bcn-widget-container-schedule" style="position: relative; width: 100% !important; max-width: 100% !important; min-height: 400px; box-sizing: border-box;">
                        <!-- Loading Spinner -->
                        <div id="bcn-widget-loader-schedule" style="position: absolute; top: 0; left: 0; width: 100%; height: 400px; display: flex; align-items: center; justify-content: center; background: #0a0a0a;">
                            <div style="text-align: center;">
                                <div style="width: 48px; height: 48px; border: 4px solid #e5e7eb; border-top-color: #c4ff00; border-radius: 50%; animation: bcn-spin-schedule 0.8s linear infinite; margin: 0 auto 12px;"></div>
                                <div style="color: #6b7280; font-size: 14px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Schema laden...</div>
                            </div>
                        </div>
                        <!-- Widget iframe -->
                        <iframe
                            id="bcn-widget-schedule"
                            src="https://app.bcnsports.nl/widget/render/wgt_tLYL2X42djEoxflqnkTCJ7zDTsGrTP2mcShNzATM"
                            width="100%"
                            height="1000"
                            frameborder="0"
                            scrolling="auto"
                            allow="fullscreen"
                            style="border: none; width: 100% !important; max-width: 100% !important; min-height: 800px; display: block; box-sizing: border-box; transition: height 0.3s ease; opacity: 0;"
                            onload="document.getElementById('bcn-widget-loader-schedule').style.display='none'; this.style.opacity='1';">
                        </iframe>
                    </div>
                    <style>
                        @keyframes bcn-spin-schedule {
                            to { transform: rotate(360deg); }
                        }
                    </style>
                    <script>
                        (function() {
                            window.addEventListener('message', function(e) {
                                if (e.data && e.data.type === 'widget-resize' && e.data.source === 'bcn-widget') {
                                    var iframe = document.getElementById('bcn-widget-schedule');
                                    if (iframe && e.data.height) {
                                        iframe.style.height = e.data.height + 'px';
                                    }
                                }
                            });
                        })();
                    </script>
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
