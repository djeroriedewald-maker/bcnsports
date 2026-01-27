@extends('layouts.app')

@section('title', 'Bootcamp Trials & Outdoor Training | BCN Sports')
@section('meta_description', 'Bootcamp Trials events throughout the Netherlands and outdoor personal training in Almere. Push your limits with challenging events, 1:1 coaching and small group training. 20+ years of experience.')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="/images/canva/hero%20frontpage.jpg" alt="BCN Sports Training" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-[#0a0a0a]"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center py-32">
            <div class="fade-in">
                <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-24 md:h-32 w-auto mx-auto mb-8">
            </div>

            <h1 class="fade-in stagger-1 text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-white mb-6">
                Bootcamp Trials.<br>
                <span class="text-[#c4ff00]">Push your limits.</span>
            </h1>

            <p class="fade-in stagger-2 text-xl md:text-2xl text-[#a0a0a0] max-w-2xl mx-auto mb-10">
                Challenging Bootcamp Trials events and outdoor personal training. No excuses, no distractions. Just you, your team and results.
            </p>

            <div class="fade-in stagger-3 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('en.prices') }}" class="btn-neon px-10 py-4 rounded-full text-lg pulse-neon">
                    Discover Bootcamp Trials
                </a>
                <a href="{{ route('en.contact') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg">
                    Get In Touch
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="fade-in text-xl md:text-2xl text-[#a0a0a0] leading-relaxed mb-8">
                    BCN Sports organises <span class="text-white font-semibold">Bootcamp Trials</span> - challenging outdoor events
                    where your mental and physical limits are pushed. We also offer personal coaching
                    with outdoor personal training.
                </p>
                <p class="fade-in stagger-1 text-lg text-[#a0a0a0] leading-relaxed mb-8">
                    Bootcamp Trials events take place throughout the Netherlands. Personal training and small group sessions
                    are offered in Almere and surroundings. Always outside, always challenging.
                </p>
                <p class="fade-in stagger-2 text-lg text-[#a0a0a0] leading-relaxed">
                    Whether you join a Bootcamp Trials event, want to lose weight, get stronger or prepare
                    for a competition - we build a program that fits your goals.
                </p>
            </div>
        </div>
    </section>

    <!-- Why BCN Sports Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Why <span class="text-[#c4ff00]">BCN Sports</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="fade-in dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">20+ Years Experience</h3>
                    <p class="text-[#a0a0a0]">In coaching athletes at a physical and mental level</p>
                </div>

                <div class="fade-in stagger-1 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Proven Mentality</h3>
                    <p class="text-[#a0a0a0]">Shaped by years of experience in extreme physical and mental challenges</p>
                </div>

                <div class="fade-in stagger-2 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Flexible Sessions</h3>
                    <p class="text-[#a0a0a0]">Your training adapts to your schedule and level</p>
                </div>

                <div class="fade-in stagger-3 dark-card rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-[#c4ff00]/10 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Always Outdoors</h3>
                    <p class="text-[#a0a0a0]">Fresh air, no queues, pure focus</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootcamp Trials & Events Section -->
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Bootcamp Trials <span class="text-[#c4ff00]">& Events</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    All our coaches actively participate in challenges such as HYROX, ultra runs of 50+ kilometres,
                    marathons and many other events where they are tested mentally and physically.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="fade-in-left dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/team%20spirit.jpg" alt="BCN Sports Bootcamp Trials teamwork" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Bootcamp Trials
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Team Spirit</h3>
                        <p class="text-[#a0a0a0]">
                            We never ask anything of you that we haven't done ourselves first.
                        </p>
                    </div>
                </div>

                <div class="fade-in-right dark-card rounded-2xl overflow-hidden group">
                    <div class="relative h-80 overflow-hidden">
                        <img src="/images/uitdaging%20aangaan.jpg" alt="BCN Sports push boundaries" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                            Take On The Challenge
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white uppercase mb-2">Push Boundaries</h3>
                        <p class="text-[#a0a0a0]">
                            Obstacle run, marathon or ultra trail? We get you ready.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-[#141414]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Our <span class="text-[#c4ff00]">Services</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Choose the training formula that suits you. From one-on-one coaching to small groups - always personal, always outdoors.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Bootcamp Trials (featured) -->
                <div class="fade-in dark-card rounded-2xl p-8 border-2 border-[#c4ff00] relative">
                    <div class="absolute -top-3 left-6 bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                        Our Specialty
                    </div>
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6 mt-2">
                        <svg class="w-6 h-6 text-[#0a0a0a]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Bootcamp Trials</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Challenging outdoor events throughout the Netherlands where you push your mental and physical limits.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Events will be announced</p>
                    <a href="{{ route('en.prices') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        View services
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- 1:1 Personal Training -->
                <div class="fade-in stagger-1 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">1:1</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Personal Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Full attention, maximum results. In a 1:1 session everything revolves around your goal.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">&euro;74.95 per session</p>
                    <a href="{{ route('en.prices') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        View prices
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- 1:2 Training -->
                <div class="fade-in stagger-2 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">1:2</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Duo Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Train together with your partner, friend or colleague. Motivate each other, challenge each other and share the cost.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">&euro;54.95 per person</p>
                    <a href="{{ route('en.prices') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        View prices
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Small Group Training -->
                <div class="fade-in dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00] rounded-xl flex items-center justify-center mb-6">
                        <span class="text-[#0a0a0a] font-black text-lg">4</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Small Group</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        The energy of a group, the attention of personal training. Minimum 3, maximum 4 participants.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">&euro;39.95 per person</p>
                    <a href="{{ route('en.prices') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        View prices
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Event Training -->
                <div class="fade-in stagger-1 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00]/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Event Training</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Obstacle run, marathon, HYROX or Mud Masters? We get you ready with a targeted programme.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Custom programme</p>
                    <a href="{{ route('en.contact') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Get in touch
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Corporate Bootcamp -->
                <div class="fade-in stagger-2 dark-card rounded-2xl p-8">
                    <div class="w-12 h-12 bg-[#c4ff00]/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Corporate Bootcamp</h3>
                    <p class="text-[#a0a0a0] mb-6">
                        Take your team out of their comfort zone. Build not only fitness, but also team spirit and mental resilience.
                    </p>
                    <p class="text-[#c4ff00] font-bold mb-4">Custom quote</p>
                    <a href="{{ route('en.contact') }}" class="inline-flex items-center text-[#c4ff00] font-bold uppercase text-sm tracking-wider hover:text-white transition">
                        Request a quote
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-24 bg-[#141414] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    Upcoming <span class="text-[#c4ff00]">Events</span>
                </h2>
                <p class="fade-in stagger-1 text-[#a0a0a0] text-lg max-w-2xl mx-auto">
                    Bootcamp Trials events will be announced here. As soon as a date is confirmed, you can sign up directly.
                </p>
            </div>

            <!-- Event Cards - horizontally scrollable on mobile, grid on desktop -->
            <div class="fade-in flex gap-6 overflow-x-auto pb-6 snap-x snap-mandatory scrollbar-hide lg:grid lg:grid-cols-4 lg:overflow-visible lg:pb-0">
                <!-- Event Card 1 - Male -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_male.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Date to be announced</p>
                            <p class="text-[#a0a0a0] text-sm">Push your limits in this challenging outdoor event.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 2 - Female -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_female.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Date to be announced</p>
                            <p class="text-[#a0a0a0] text-sm">Push your mental and physical boundaries.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 3 - Male -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_male.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Date to be announced</p>
                            <p class="text-[#a0a0a0] text-sm">Take on the challenge individually or as a team.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Card 4 - Female -->
                <div class="snap-center shrink-0 w-[280px] sm:w-[300px] lg:w-auto group">
                    <div class="relative rounded-2xl overflow-hidden aspect-[3/4] border border-white/10 group-hover:border-[#c4ff00]/50 transition duration-300">
                        <img src="/images/eventcard_female.jpg" alt="Bootcamp Trials Event" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0a0a0a] via-[#0a0a0a]/40 to-transparent"></div>
                        <div class="absolute top-4 left-4 right-4">
                            <span class="inline-block bg-[#c4ff00] text-[#0a0a0a] text-xs font-bold uppercase px-3 py-1 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-xl font-bold text-white uppercase mb-1">Bootcamp Trials</h3>
                            <p class="text-[#c4ff00] text-sm font-semibold uppercase tracking-wider mb-3">Date to be announced</p>
                            <p class="text-[#a0a0a0] text-sm">Are you ready for the challenge?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA below the cards -->
            <div class="fade-in stagger-2 text-center mt-12">
                <p class="text-[#a0a0a0] mb-6">Want to be the first to know about new events?</p>
                <a href="{{ route('en.contact') }}" class="btn-neon inline-block px-10 py-4 rounded-full text-lg">
                    Keep Me Updated
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    @if(isset($testimonials) && $testimonials->count() > 0)
    <section class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="fade-in text-4xl md:text-5xl font-black uppercase text-white mb-4">
                    What Our <span class="text-[#c4ff00]">Clients</span> Say
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach($testimonials as $index => $testimonial)
                    <div class="fade-in {{ $index > 0 ? 'stagger-' . $index : '' }} glass-card rounded-2xl p-8">
                        <div class="flex mb-4">
                            @for ($i = 0; $i < $testimonial->rating; $i++)
                                <svg class="w-5 h-5 text-[#c4ff00]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                        <p class="text-[#a0a0a0] mb-6 italic">"{{ $testimonial->localized_content }}"</p>
                        <p class="font-bold text-white">- {{ $testimonial->name }}</p>
                        @if($testimonial->localized_role)
                            <p class="text-[#a0a0a0] text-sm">{{ $testimonial->localized_role }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0">
            <img src="/images/P1210932.jpg" alt="BCN Sports Trainer" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a] via-[#0a0a0a]/90 to-[#0a0a0a]/70"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="fade-in-left text-[#c4ff00] font-bold uppercase tracking-wider mb-4">Stop putting it off</p>
                <h2 class="fade-in-left text-4xl md:text-5xl lg:text-6xl font-black uppercase text-white mb-6">
                    You already know it's time to make a <span class="text-[#c4ff00]">change</span>
                </h2>
                <p class="fade-in-left stagger-1 text-xl text-[#a0a0a0] mb-10">
                    This is your moment. Get in touch and take the first step today.
                </p>
                <div class="fade-in-left stagger-2 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('en.contact') }}" class="btn-neon px-10 py-4 rounded-full text-lg text-center">
                        Book Your Free Intake
                    </a>
                    <a href="{{ route('en.prices') }}" class="btn-neon-outline px-10 py-4 rounded-full text-lg text-center">
                        View Services
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
