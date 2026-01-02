<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'BCN Sports - Outdoor Bootcamp Training in Almere. Sluit je aan bij onze fitness community voor intensieve groepstrainingen in de buitenlucht.')">
    <meta name="keywords" content="bootcamp, fitness, Almere, outdoor training, groepstraining, personal training">
    <meta name="author" content="BCN Sports">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'BCN Sports - Outdoor Bootcamp Almere')">
    <meta property="og:description" content="@yield('meta_description', 'Outdoor Bootcamp Training in Almere')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="nl_NL">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <title>@yield('title', 'BCN Sports - Outdoor Bootcamp Almere')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('head')
</head>
<body class="font-sans antialiased bg-[#0a0a0a] text-white">
    <!-- Navigation -->
    <nav class="bg-[#0a0a0a]/95 backdrop-blur-md text-white fixed top-0 left-0 right-0 z-50 border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-12 w-auto">
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('home') ? 'text-[#c4ff00]' : 'text-white' }}">Home</a>
                    <a href="{{ route('prijzen') }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('prijzen') ? 'text-[#c4ff00]' : 'text-white' }}">Prijzen</a>
                    <a href="{{ route('rooster') }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('rooster') ? 'text-[#c4ff00]' : 'text-white' }}">Rooster</a>
                    <a href="{{ route('over-ons') }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('over-ons') ? 'text-[#c4ff00]' : 'text-white' }}">Over Ons</a>
                    <a href="{{ route('contact') }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('contact') ? 'text-[#c4ff00]' : 'text-white' }}">Contact</a>
                </div>

                <a href="{{ route('prijzen') }}" class="hidden md:inline-block btn-neon px-6 py-3 rounded-full text-sm">
                    Start Nu
                </a>

                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-6 border-t border-white/10 mt-4 pt-4">
                <a href="{{ route('home') }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('home') ? 'text-[#c4ff00]' : '' }}">Home</a>
                <a href="{{ route('prijzen') }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('prijzen') ? 'text-[#c4ff00]' : '' }}">Prijzen</a>
                <a href="{{ route('rooster') }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('rooster') ? 'text-[#c4ff00]' : '' }}">Rooster</a>
                <a href="{{ route('over-ons') }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('over-ons') ? 'text-[#c4ff00]' : '' }}">Over Ons</a>
                <a href="{{ route('contact') }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('contact') ? 'text-[#c4ff00]' : '' }}">Contact</a>
                <a href="{{ route('prijzen') }}" class="inline-block mt-4 btn-neon px-6 py-3 rounded-full text-sm">Start Nu</a>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed nav -->
    <div class="h-20"></div>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#0a0a0a] text-white pt-20 pb-8 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-1">
                    <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-10 w-auto mb-6">
                    <p class="text-[#a0a0a0] text-sm leading-relaxed">
                        Outdoor Bootcamp Training in Almere. Word fitter, sterker en gezonder met onze professionele trainingen.
                    </p>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">Navigatie</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">Home</a></li>
                        <li><a href="{{ route('prijzen') }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">Prijzen</a></li>
                        <li><a href="{{ route('rooster') }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">Rooster</a></li>
                        <li><a href="{{ route('over-ons') }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">Over Ons</a></li>
                        <li><a href="{{ route('contact') }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">Contact</h4>
                    <ul class="space-y-3 text-[#a0a0a0] text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-3 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Almere, Nederland
                        </li>
                        <li>
                            <a href="mailto:info@bcnsports.nl" class="flex items-center hover:text-[#c4ff00] transition">
                                <svg class="w-4 h-4 mr-3 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                info@bcnsports.nl
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">Volg Ons</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                            <svg class="w-5 h-5 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                            <svg class="w-5 h-5 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-[#6b6b6b] text-xs">
                <p>&copy; {{ date('Y') }} BCN Sports. Alle rechten voorbehouden.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="{{ route('privacy') }}" class="hover:text-[#c4ff00] transition">Privacy Policy</a>
                    <a href="{{ route('voorwaarden') }}" class="hover:text-[#c4ff00] transition">Algemene Voorwaarden</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Fade in animation on scroll
        const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');

        const fadeObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        fadeElements.forEach(el => fadeObserver.observe(el));
    </script>
</body>
</html>
