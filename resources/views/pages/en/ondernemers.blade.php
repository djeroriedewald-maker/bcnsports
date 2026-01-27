@extends('layouts.app')

@section('title', 'Business - BCN Sports Corporate Training across the Netherlands')
@section('meta_description', 'BCN Sports for businesses across the Netherlands. Corporate bootcamp, teambuilding and outdoor training sessions. Strengthen your team with energetic outdoor sessions. Request a quote.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 lg:py-40 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1270912.jpg" alt="BCN Sports Corporate Training" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/70 via-[#0a0a0a]/80 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-4 py-2 rounded-full mb-6">
                For Companies
            </span>
            <h1 class="fade-in text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                Corporate Bootcamp<br><span class="text-[#c4ff00]">With Impact</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-3xl mx-auto mb-8">
                Teambuilding that goes beyond drinks. Outdoor training for companies that want to challenge and strengthen their team.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#quote" class="btn-neon px-8 py-4 rounded-full text-sm">
                    Request a Quote
                </a>
                <a href="#services" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
                    More Information
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
                        More Than <span class="text-[#c4ff00]">Teambuilding</span>
                    </h2>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        A corporate bootcamp at BCN Sports is not a standard team outing. It is an energetic outdoor experience where your team works together, motivates each other, and pushes boundaries together.
                    </p>
                    <p class="text-[#a0a0a0] text-lg mb-6">
                        Whether it's a one-time team outing, an incentive, or a structural vitality program - we fully tailor the training to your wishes and fitness level.
                    </p>
                    <p class="text-[#a0a0a0] text-lg">
                        Suitable for all fitness levels. We ensure that everyone is challenged at their own level.
                    </p>
                </div>
                <div class="fade-in-right">
                    <div class="relative rounded-2xl overflow-hidden">
                        <img src="/images/P1210932.jpg" alt="BCN Sports Corporate Training" class="w-full h-auto">
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
                    Why Corporate <span class="text-[#c4ff00]">Bootcamp?</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Invest in your team with an experience they won't soon forget
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Team Strengthening</h3>
                    <p class="text-[#a0a0a0]">By being physically challenged together, a unique bond is formed. Colleagues get to know each other in a different way.</p>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Energy & Vitality</h3>
                    <p class="text-[#a0a0a0]">An active day outdoors gives energy. Employees return to the office fitter and more motivated.</p>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Fully Customized</h3>
                    <p class="text-[#a0a0a0]">Every training is adapted to your group size, fitness level, and goals. From relaxed to intensive.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Our <span class="text-[#c4ff00]">Options</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Across the Netherlands. We come to your location or organize at a beautiful outdoor spot
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Team Outing -->
                <div class="fade-in glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/P1270860.jpg" alt="BCN Sports Team Outing" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                One-time
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Team Outing / Incentive</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Perfect for teambuilding, company outings, or special occasions. An energetic outdoor experience that brings your team closer together.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                At a location of your choice
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Suitable for all fitness levels
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Fully customized
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                All materials included
                            </li>
                        </ul>
                        <a href="#quote" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                            Request a Quote
                        </a>
                    </div>
                </div>

                <!-- Structural -->
                <div class="fade-in stagger-1 glass-card rounded-2xl overflow-hidden">
                    <div class="relative h-64">
                        <img src="/images/P1270832.jpg" alt="BCN Sports Vitality Program" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <span class="bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Structural
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-white uppercase mb-4">Vitality Program</h3>
                        <p class="text-[#a0a0a0] mb-6">
                            Structural collaboration for companies that invest in the health of their employees. Regular outdoor sessions on a fixed day.
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Weekly or monthly
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Flexible number of participants
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Dedicated trainer for continuity
                            </li>
                            <li class="flex items-center text-[#a0a0a0]">
                                <svg class="w-5 h-5 text-[#c4ff00] mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                                Affordable subscription rate
                            </li>
                        </ul>
                        <a href="#quote" class="btn-neon block w-full text-center py-4 rounded-full text-sm">
                            Request a Quote
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
                    What Can You <span class="text-[#c4ff00]">Expect?</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="fade-in text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">1</div>
                    <h3 class="text-white font-bold mb-2">Warm-up</h3>
                    <p class="text-[#a0a0a0] text-sm">Preparing the body together for the training</p>
                </div>
                <div class="fade-in stagger-1 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">2</div>
                    <h3 class="text-white font-bold mb-2">Team Exercises</h3>
                    <p class="text-[#a0a0a0] text-sm">Taking on challenges together and motivating each other</p>
                </div>
                <div class="fade-in stagger-2 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">3</div>
                    <h3 class="text-white font-bold mb-2">Functional Training</h3>
                    <p class="text-[#a0a0a0] text-sm">Strength, endurance, and coordination</p>
                </div>
                <div class="fade-in stagger-3 text-center p-6">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-4 text-[#0a0a0a] font-bold text-xl">4</div>
                    <h3 class="text-white font-bold mb-2">Cool-down</h3>
                    <p class="text-[#a0a0a0] text-sm">Wind down calmly and reflect</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Quote Section -->
    <section id="quote" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-2xl p-8 md:p-12 text-center">
                <h2 class="fade-in text-3xl md:text-4xl font-black uppercase text-white mb-4">
                    Ready To <span class="text-[#c4ff00]">Get Started?</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg mb-8 max-w-2xl mx-auto">
                    Request a no-obligation quote and discover what BCN Sports can do for your team. We are happy to help you find the best approach.
                </p>
                <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}?subject=business" class="btn-neon px-8 py-4 rounded-full text-sm">
                        Request a Quote
                    </a>
                    <a href="mailto:info@bcnsports.nl?subject=Business%20inquiry%20-%20Corporate%20bootcamp" class="bg-transparent border-2 border-[#c4ff00] text-[#c4ff00] hover:bg-[#c4ff00] hover:text-[#0a0a0a] px-8 py-4 rounded-full text-sm font-bold uppercase tracking-wider transition">
                        Email Directly
                    </a>
                </div>
                <p class="text-[#a0a0a0] text-sm mt-8">
                    Or call us directly: <a href="tel:+31641541751" class="text-[#c4ff00] hover:underline">+31 6 4154 1751</a>
                </p>
            </div>
        </div>
    </section>
@endsection