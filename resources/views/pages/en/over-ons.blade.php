@extends('layouts.app')

@section('title', 'About Us - BCN Sports Bootcamp Trials & Outdoor Training')
@section('meta_description', 'BCN Sports - Bootcamp Trials throughout the Netherlands and Outdoor Training in Almere. Challenging events and personal outdoor training with 20+ years of experience.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-32 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/canva/forrest%20feel.jpg" alt="BCN Sports Personal Training" class="w-full h-full object-cover brightness-150">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0a0a0a]/30 via-[#0a0a0a]/40 to-[#0a0a0a]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="fade-in text-5xl md:text-6xl lg:text-7xl font-black uppercase text-white mb-6">
                About <span class="text-[#c4ff00]">BCN Sports</span>
            </h1>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] max-w-2xl mx-auto">
                Bootcamp Trials events, personal attention and the power of outdoor training.
            </p>
        </div>
    </section>

    <!-- About BCN Sports Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="fade-in-left">
                    <h2 class="text-4xl md:text-5xl font-black uppercase text-white mb-8">
                        Bootcamp Trials & <span class="text-[#c4ff00]">Outdoor Training</span>
                    </h2>
                    <div class="space-y-6 text-[#a0a0a0] text-lg">
                        <p>
                            BCN Sports organises Bootcamp Trials - challenging outdoor events throughout the Netherlands where you
                            push your mental and physical limits. In addition, we offer personal outdoor training
                            in and around Almere, fully tailored to you.
                        </p>
                        <p>
                            At BCN Sports I believe that real growth starts outside your comfort zone.
                            Whether you join a Bootcamp Trials event, want to lose weight,
                            get stronger or improve your fitness - together we work towards your results.
                        </p>
                        <p>
                            The combination of challenging events, personal coaching and the benefits of outdoor training
                            creates a unique experience you won't find anywhere else.
                        </p>
                    </div>
                </div>

                <div class="fade-in-right">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">100%</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Personal Attention</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">1:1</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Training Focus</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">Flex</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Location & Time</div>
                        </div>
                        <div class="dark-card rounded-2xl p-8 text-center">
                            <div class="stat-number mb-2">Custom</div>
                            <div class="text-[#a0a0a0] text-sm uppercase tracking-wider">Training Plan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Coaches Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Our <span class="text-[#c4ff00]">Coaches</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    All our coaches actively participate in numerous challenges themselves. From HYROX competitions and ultra runs
                    of 50+ kilometres to marathons and other events where they are tested mentally and physically.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-96 overflow-hidden">
                        <img src="/images/team%20spirit.jpg" alt="BCN Sports team spirit" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Team Spirit
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Stronger Together</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">We participate ourselves</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-96 overflow-hidden">
                        <img src="/images/uitdaging%20aangaan.jpg" alt="BCN Sports embrace the challenge" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Embrace the Challenge
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <h3 class="text-2xl font-bold text-white uppercase">Push Boundaries</h3>
                            <p class="text-[#c4ff00] font-semibold uppercase tracking-wider text-sm">Never Give Up</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-[#a0a0a0] max-w-2xl mx-auto">
                    We never ask anything of you that we haven't done ourselves first. By participating in
                    challenges ourselves, we understand what it means to perform under pressure. We bring that experience
                    directly to our Bootcamp Trials events and training sessions.
                </p>
            </div>
        </div>
    </section>

    <!-- Why BCN Sports Section -->
    <section class="py-32 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Why <span class="text-[#c4ff00]">BCN Sports</span>?
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    What makes Bootcamp Trials & Outdoor Training at BCN Sports different?
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Personal</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        No group classes where you're just a number. Complete focus on your goals and progression.
                    </p>
                </div>

                <div class="fade-in stagger-1 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Outdoors</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        Fresh air, daylight and nature as your gym. Training in and around Almere.
                    </p>
                </div>

                <div class="fade-in stagger-2 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Flexible</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        Train whenever it suits you. No fixed group times or mandatory schedules.
                    </p>
                </div>

                <div class="fade-in stagger-3 text-center">
                    <div class="w-20 h-20 bg-[#c4ff00] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white uppercase mb-3">Results</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        Measurable progress and adjustments based on your development.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Outdoor Section -->
    <section class="py-32 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Why <span class="text-[#c4ff00]">Outdoor</span> Fitness?
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Outdoor training offers unique benefits that you won't find in a gym.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="fade-in glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Vitamin D</h3>
                    <p class="text-[#a0a0a0]">
                        Sunlight provides natural vitamin D production, essential for your health and immune system.
                    </p>
                </div>

                <div class="fade-in stagger-1 glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">Mental Boost</h3>
                    <p class="text-[#a0a0a0]">
                        Exercising in nature reduces stress, improves your mood and provides a mental reset.
                    </p>
                </div>

                <div class="fade-in stagger-2 glass-card rounded-2xl p-8 text-center">
                    <svg class="w-12 h-12 text-[#c4ff00] mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3 class="text-xl font-bold text-white uppercase mb-4">More Effective</h3>
                    <p class="text-[#a0a0a0]">
                        Training on uneven terrain and with natural elements activates more muscle groups.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-6">
                Ready to <span class="text-[#c4ff00]">start</span>?
            </h2>
            <p class="fade-in stagger-1 text-xl text-[#a0a0a0] mb-10">
                Schedule a free introduction meeting and discover how Bootcamp Trials & Outdoor Training can help you achieve your goals.
            </p>
            <div class="fade-in stagger-2 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="btn-neon px-10 py-4 rounded-full text-lg">
                    Free Introduction
                </a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    View Services
                </a>
            </div>
        </div>
    </section>
@endsection
