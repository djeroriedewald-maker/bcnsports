@extends('layouts.app')

@section('title', 'Contact - BCN Sports Outdoor Bootcamp Almere')
@section('meta_description', 'Neem contact op met BCN Sports voor vragen over onze outdoor bootcamp trainingen in Almere. We staan klaar om je te helpen!')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/20240309_102438.jpg" alt="BCN Sports Training" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a] via-[#0a0a0a]/95 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                Neem <span class="text-[#c4ff00]">Contact</span> Op
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Heb je vragen of wil je meer informatie? We horen graag van je!
            </p>
        </div>
    </section>

    <!-- Direct Booking Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Direct Een <span class="text-[#c4ff00]">Proefles</span> Boeken?
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Boek direct je gratis proefles via ons boekingssysteem - geen wachttijd!
                </p>
            </div>

            <div class="fade-in glass-card rounded-2xl p-8 md:p-12">
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
                    <div id="bcn-widget-container-contact" style="position: relative; width: 100% !important; max-width: 100% !important; min-height: 400px; box-sizing: border-box;">
                        <!-- Loading Spinner -->
                        <div id="bcn-widget-loader-contact" style="position: absolute; top: 0; left: 0; width: 100%; height: 400px; display: flex; align-items: center; justify-content: center; background: #141414;">
                            <div style="text-align: center;">
                                <div style="width: 48px; height: 48px; border: 4px solid #e5e7eb; border-top-color: #c4ff00; border-radius: 50%; animation: bcn-spin-contact 0.8s linear infinite; margin: 0 auto 12px;"></div>
                                <div style="color: #6b7280; font-size: 14px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">Widget laden...</div>
                            </div>
                        </div>
                        <!-- Widget iframe -->
                        <iframe
                            id="bcn-widget-contact"
                            src="https://app.bcnsports.nl/widget/render/wgt_5g5jCyu9g6LR2yMgKULO86OztFqUdyygKhaeB7cc"
                            width="100%"
                            height="600"
                            frameborder="0"
                            scrolling="no"
                            allow="fullscreen"
                            style="border: none; width: 100% !important; max-width: 100% !important; min-height: 400px; display: block; box-sizing: border-box; transition: height 0.3s ease; opacity: 0;"
                            onload="document.getElementById('bcn-widget-loader-contact').style.display='none'; this.style.opacity='1';">
                        </iframe>
                    </div>
                    <style>
                        @keyframes bcn-spin-contact {
                            to { transform: rotate(360deg); }
                        }
                    </style>
                    <script>
                        (function() {
                            window.addEventListener('message', function(e) {
                                if (e.data && e.data.type === 'widget-resize' && e.data.source === 'bcn-widget') {
                                    var iframe = document.getElementById('bcn-widget-contact');
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

    <!-- Contact Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12">

                <!-- Contact Form -->
                <div class="fade-in-left glass-card rounded-2xl p-8 md:p-12">
                    <h2 class="text-2xl font-bold text-white uppercase mb-8">Stuur ons een bericht</h2>

                    @if(session('success'))
                        <div class="bg-[#c4ff00]/10 border border-[#c4ff00] text-[#c4ff00] px-4 py-3 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-white uppercase tracking-wider mb-2">Naam *</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    class="input-dark w-full px-4 py-4 rounded-lg @error('name') border-[#ff3333] @enderror"
                                    placeholder="Je naam"
                                    required
                                >
                                @error('name')
                                    <p class="text-[#ff3333] text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-bold text-white uppercase tracking-wider mb-2">E-mail *</label>
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="input-dark w-full px-4 py-4 rounded-lg @error('email') border-[#ff3333] @enderror"
                                    placeholder="je@email.nl"
                                    required
                                >
                                @error('email')
                                    <p class="text-[#ff3333] text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-bold text-white uppercase tracking-wider mb-2">Telefoonnummer</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="input-dark w-full px-4 py-4 rounded-lg"
                                placeholder="06 12345678"
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-bold text-white uppercase tracking-wider mb-2">Onderwerp *</label>
                            <select
                                id="subject"
                                name="subject"
                                class="input-dark w-full px-4 py-4 rounded-lg @error('subject') border-[#ff3333] @enderror"
                                required
                            >
                                <option value="">Selecteer een onderwerp</option>
                                <option value="proefles" {{ old('subject') == 'proefles' ? 'selected' : '' }}>Proefles aanvragen</option>
                                <option value="abonnement" {{ old('subject') == 'abonnement' ? 'selected' : '' }}>Vraag over abonnement</option>
                                <option value="rooster" {{ old('subject') == 'rooster' ? 'selected' : '' }}>Vraag over rooster</option>
                                <option value="algemeen" {{ old('subject') == 'algemeen' ? 'selected' : '' }}>Algemene vraag</option>
                                <option value="anders" {{ old('subject') == 'anders' ? 'selected' : '' }}>Anders</option>
                            </select>
                            @error('subject')
                                <p class="text-[#ff3333] text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-white uppercase tracking-wider mb-2">Bericht *</label>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                class="input-dark w-full px-4 py-4 rounded-lg resize-none @error('message') border-[#ff3333] @enderror"
                                placeholder="Schrijf je bericht hier..."
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-[#ff3333] text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-start">
                            <input
                                type="checkbox"
                                id="privacy"
                                name="privacy"
                                class="mt-1 mr-3 h-5 w-5 rounded border-white/10 bg-[#141414] text-[#c4ff00] focus:ring-[#c4ff00]"
                                required
                            >
                            <label for="privacy" class="text-sm text-[#a0a0a0]">
                                Ik ga akkoord met de <a href="{{ route('privacy') }}" class="text-[#c4ff00] hover:text-white">privacy policy</a> en geef toestemming om mijn gegevens te verwerken. *
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="btn-neon w-full py-4 rounded-full text-lg"
                        >
                            Verstuur Bericht
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="fade-in-right space-y-8">
                    <!-- Info Cards -->
                    <div class="dark-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-white uppercase mb-8">Contactgegevens</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-[#c4ff00]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-bold text-white uppercase text-sm">Locatie</h3>
                                    <p class="text-[#a0a0a0]">Almere, Nederland</p>
                                    <p class="text-[#6b6b6b] text-sm">Exacte trainingslocatie wordt gedeeld na inschrijving</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-[#c4ff00]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-bold text-white uppercase text-sm">E-mail</h3>
                                    <a href="mailto:info@bcnsports.nl" class="text-[#c4ff00] hover:text-white transition">info@bcnsports.nl</a>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-[#c4ff00]/10 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="font-bold text-white uppercase text-sm">Reactietijd</h3>
                                    <p class="text-[#a0a0a0]">Binnen 24 uur op werkdagen</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="dark-card rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-white uppercase mb-6">Volg Ons</h2>
                        <p class="text-[#a0a0a0] mb-6">Blijf op de hoogte van onze trainingen, tips en community updates!</p>

                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                                <svg class="w-6 h-6 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                                <svg class="w-6 h-6 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Help -->
                    <div class="neon-border rounded-2xl p-8">
                        <h2 class="text-2xl font-bold text-white uppercase mb-4">Snel starten?</h2>
                        <p class="text-[#a0a0a0] mb-6">
                            Wil je direct beginnen met trainen? Bekijk ons rooster en boek je eerste les!
                        </p>
                        <a href="{{ route('rooster') }}" class="btn-neon inline-block px-8 py-3 rounded-full text-sm">
                            Bekijk Rooster
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Veelgestelde <span class="text-[#c4ff00]">Vragen</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0]">Misschien vind je hier al het antwoord op je vraag</p>
            </div>

            <div class="space-y-4">
                <div class="fade-in dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Hoe meld ik me aan voor een proefles?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Je kunt direct een gratis proefles boeken via de boekingswidget bovenaan deze pagina. Kies een geschikte datum en tijd, en je bent klaar! Je eerste proefles is altijd gratis.</p>
                    </div>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Waar vinden de trainingen plaats?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Onze outdoor bootcamp trainingen vinden plaats op verschillende locaties in Almere. Na inschrijving ontvang je de exacte locatiegegevens.</p>
                    </div>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-xl overflow-hidden">
                    <button class="w-full text-left px-6 py-5 font-bold text-white flex justify-between items-center" onclick="this.nextElementSibling.classList.toggle('hidden')">
                        <span>Kan ik ook als beginner meedoen?</span>
                        <svg class="w-5 h-5 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="px-6 pb-5 hidden">
                        <p class="text-[#a0a0a0]">Absoluut! Onze trainingen zijn geschikt voor alle niveaus. De trainer past de oefeningen aan op jouw niveau en zorgt ervoor dat je veilig en effectief traint.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
