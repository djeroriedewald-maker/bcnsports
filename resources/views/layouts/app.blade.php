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
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @yield('head')
</head>
<body class="font-sans antialiased bg-light text-dark">
    <!-- Navigation -->
    <nav class="bg-secondary text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-primary">
                    BCN Sports
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-primary transition {{ request()->routeIs('home') ? 'text-primary' : '' }}">Home</a>
                    <a href="{{ route('prijzen') }}" class="hover:text-primary transition {{ request()->routeIs('prijzen') ? 'text-primary' : '' }}">Prijzen</a>
                    <a href="{{ route('rooster') }}" class="hover:text-primary transition {{ request()->routeIs('rooster') ? 'text-primary' : '' }}">Rooster</a>
                    <a href="{{ route('over-ons') }}" class="hover:text-primary transition {{ request()->routeIs('over-ons') ? 'text-primary' : '' }}">Over Ons</a>
                    <a href="{{ route('contact') }}" class="hover:text-primary transition {{ request()->routeIs('contact') ? 'text-primary' : '' }}">Contact</a>
                </div>
                
                <a href="{{ route('prijzen') }}" class="hidden md:inline-block bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-full font-semibold transition">
                    Start Nu
                </a>
                
                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 hover:text-primary">Home</a>
                <a href="{{ route('prijzen') }}" class="block py-2 hover:text-primary">Prijzen</a>
                <a href="{{ route('rooster') }}" class="block py-2 hover:text-primary">Rooster</a>
                <a href="{{ route('over-ons') }}" class="block py-2 hover:text-primary">Over Ons</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-primary">Contact</a>
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-secondary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-primary mb-4">BCN Sports</h3>
                    <p class="text-gray-300">Outdoor Bootcamp Training in Almere. Word fitter, sterker en gezonder!</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Navigatie</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-primary transition">Home</a></li>
                        <li><a href="{{ route('prijzen') }}" class="hover:text-primary transition">Prijzen</a></li>
                        <li><a href="{{ route('rooster') }}" class="hover:text-primary transition">Rooster</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-primary transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>Almere, Nederland</li>
                        <li><a href="mailto:info@bcnsports.nl" class="hover:text-primary transition">info@bcnsports.nl</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Volg Ons</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-primary transition">Instagram</a>
                        <a href="#" class="text-gray-300 hover:text-primary transition">Facebook</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} BCN Sports. Alle rechten voorbehouden.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="{{ route('privacy') }}" class="hover:text-primary transition">Privacy Policy</a>
                    <a href="{{ route('voorwaarden') }}" class="hover:text-primary transition">Algemene Voorwaarden</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
