<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', __('ui.meta.description'))">
    <meta name="keywords" content="bootcamp trials, outdoor training, personal training, fitness, Almere, Nederland, personal trainer, functionele training, buiten sporten, 1-op-1 training, bedrijfstraining">
    <meta name="author" content="BCN Sports">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="NL-FL">
    <meta name="geo.placename" content="Almere">

    <!-- Hreflang tags -->
    @if(isset($hreflangUrls))
    <link rel="alternate" hreflang="nl" href="{{ $hreflangUrls['nl'] }}">
    <link rel="alternate" hreflang="en" href="{{ $hreflangUrls['en'] }}">
    <link rel="alternate" hreflang="x-default" href="{{ $hreflangUrls['nl'] }}">
    @endif

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', __('ui.meta.title'))">
    <meta property="og:description" content="@yield('meta_description', __('ui.meta.description'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="{{ app()->getLocale() === 'en' ? 'en_US' : 'nl_NL' }}">
    <meta property="og:site_name" content="BCN Sports">
    <meta property="og:image" content="{{ asset('images/P1210932.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="BCN Sports - Bootcamp Trials & Outdoor Training">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', __('ui.meta.title'))">
    <meta name="twitter:description" content="@yield('meta_description', __('ui.meta.description'))">
    <meta name="twitter:image" content="{{ asset('images/P1210932.jpg') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <title>@yield('title', __('ui.meta.title'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Schema.org LocalBusiness Structured Data -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SportsActivityLocation",
        "@@id": "https://bcnsports.nl/#organization",
        "name": "BCN Sports",
        "alternateName": "Bootcamp Trials & Outdoor Training",
        "description": "Bootcamp Trials door heel Nederland en Outdoor Training in Almere. Uitdagende events en persoonlijke begeleiding met 20+ jaar ervaring. Flexibel, effectief en volledig op maat.",
        "url": "https://bcnsports.nl",
        "logo": "https://bcnsports.nl/images/BCN_LOGO_2024_WHITE.png",
        "image": "https://bcnsports.nl/images/P1210932.jpg",
        "telephone": "+31641541751",
        "email": "info@bcnsports.nl",
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Almere",
            "addressRegion": "Flevoland",
            "addressCountry": "NL"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 52.3508,
            "longitude": 5.2647
        },
        "areaServed": [
            {
                "@@type": "Country",
                "name": "Nederland"
            },
            {
                "@@type": "City",
                "name": "Almere"
            }
        ],
        "priceRange": "€€",
        "currenciesAccepted": "EUR",
        "paymentAccepted": "Cash, Credit Card, iDEAL",
        "openingHoursSpecification": [
            {
                "@@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                "opens": "06:00",
                "closes": "21:00"
            }
        ],
        "sameAs": [
            "https://www.instagram.com/bootcamp_nation/",
            "https://www.facebook.com/bootcampnationalmere/"
        ],
        "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Bootcamp Trials & Training Pakketten",
            "itemListElement": [
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "Personal Training Losse Sessie",
                        "description": "60 minuten 1-op-1 personal training sessie"
                    },
                    "price": "74.95",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@@type": "UnitPriceSpecification",
                        "price": "74.95",
                        "priceCurrency": "EUR",
                        "unitText": "sessie"
                    }
                },
                {
                    "@@type": "Offer",
                    "itemOffered": {
                        "@@type": "Service",
                        "name": "10x Strippenkaart",
                        "description": "10 personal training sessies, 6 maanden geldig"
                    },
                    "price": "649.00",
                    "priceCurrency": "EUR",
                    "priceSpecification": {
                        "@@type": "UnitPriceSpecification",
                        "price": "64.90",
                        "priceCurrency": "EUR",
                        "unitText": "sessie"
                    }
                }
            ]
        }
    }
    </script>

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
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('home')) }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('home') || request()->routeIs('en.home') ? 'text-[#c4ff00]' : 'text-white' }}">{{ __('ui.nav.home') }}</a>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('prijzen') || request()->routeIs('en.prices') ? 'text-[#c4ff00]' : 'text-white' }}">{{ __('ui.nav.services') }}</a>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('ondernemers')) }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('ondernemers') || request()->routeIs('en.business') ? 'text-[#c4ff00]' : 'text-white' }}">{{ __('ui.nav.business') }}</a>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('over-ons')) }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('over-ons') || request()->routeIs('en.about-us') ? 'text-[#c4ff00]' : 'text-white' }}">{{ __('ui.nav.about') }}</a>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] transition {{ request()->routeIs('contact') || request()->routeIs('en.contact') ? 'text-[#c4ff00]' : 'text-white' }}">{{ __('ui.nav.contact') }}</a>
                    <!-- Language Switcher -->
                    <a href="{{ $switchLanguageUrl ?? url('/en') }}" class="text-sm font-semibold uppercase tracking-wider px-3 py-1 rounded border border-white/20 hover:border-[#c4ff00] hover:text-[#c4ff00] transition">
                        {{ app()->getLocale() === 'en' ? 'NL' : 'EN' }}
                    </a>
                </div>

                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="hidden md:inline-block btn-neon px-6 py-3 rounded-full text-sm">
                    {{ __('ui.nav.get_started') }}
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
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('home')) }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('home') || request()->routeIs('en.home') ? 'text-[#c4ff00]' : '' }}">{{ __('ui.nav.home') }}</a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('prijzen') || request()->routeIs('en.prices') ? 'text-[#c4ff00]' : '' }}">{{ __('ui.nav.services') }}</a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('ondernemers')) }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('ondernemers') || request()->routeIs('en.business') ? 'text-[#c4ff00]' : '' }}">{{ __('ui.nav.business') }}</a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('over-ons')) }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('over-ons') || request()->routeIs('en.about-us') ? 'text-[#c4ff00]' : '' }}">{{ __('ui.nav.about') }}</a>
                <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="block py-3 text-sm font-semibold uppercase tracking-wider hover:text-[#c4ff00] {{ request()->routeIs('contact') || request()->routeIs('en.contact') ? 'text-[#c4ff00]' : '' }}">{{ __('ui.nav.contact') }}</a>
                <div class="flex items-center gap-4 mt-4">
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="inline-block btn-neon px-6 py-3 rounded-full text-sm">{{ __('ui.nav.get_started') }}</a>
                    <a href="{{ $switchLanguageUrl ?? url('/en') }}" class="inline-block text-sm font-semibold uppercase tracking-wider px-3 py-2 rounded border border-white/20 hover:border-[#c4ff00] hover:text-[#c4ff00] transition">
                        {{ app()->getLocale() === 'en' ? 'NL' : 'EN' }}
                    </a>
                </div>
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
                        {{ __('ui.footer.description') }}
                    </p>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">{{ __('ui.footer.navigation') }}</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('home')) }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">{{ __('ui.nav.home') }}</a></li>
                        <li><a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('prijzen')) }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">{{ __('ui.footer.services_prices') }}</a></li>
                        <li><a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('ondernemers')) }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">{{ __('ui.nav.business') }}</a></li>
                        <li><a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('over-ons')) }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">{{ __('ui.nav.about') }}</a></li>
                        <li><a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('contact')) }}" class="text-[#a0a0a0] hover:text-[#c4ff00] transition text-sm">{{ __('ui.nav.contact') }}</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">{{ __('ui.footer.contact_heading') }}</h4>
                    <ul class="space-y-3 text-[#a0a0a0] text-sm">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-3 text-[#c4ff00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ __('ui.footer.location') }}
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
                    <h4 class="font-bold uppercase tracking-wider text-sm mb-6 text-[#c4ff00]">{{ __('ui.footer.follow_us') }}</h4>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/bootcamp_nation/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                            <svg class="w-5 h-5 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/bootcampnationalmere/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-[#141414] hover:bg-[#c4ff00] rounded-full flex items-center justify-center transition group">
                            <svg class="w-5 h-5 text-white group-hover:text-[#0a0a0a]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-[#6b6b6b] text-xs">
                <p>&copy; {{ date('Y') }} {{ __('ui.footer.copyright') }}</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('privacy')) }}" class="hover:text-[#c4ff00] transition">{{ __('ui.footer.privacy_policy') }}</a>
                    <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('voorwaarden')) }}" class="hover:text-[#c4ff00] transition">{{ __('ui.footer.terms') }}</a>
                    <button id="cookie-settings-btn" class="hover:text-[#c4ff00] transition">{{ __('ui.footer.cookie_settings') }}</button>
                </div>
            </div>

            <!-- Credits -->
            <div class="mt-6 text-center text-[#6b6b6b] text-xs">
                <p>{{ __('ui.footer.made_by') }} <a href="https://budgetpixels.nl" target="_blank" rel="noopener noreferrer" class="text-[#c4ff00] hover:underline">BudgetPixels</a></p>
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

    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-[#141414] border-t border-white/10 p-4 md:p-6 z-50 transform translate-y-full transition-transform duration-300">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="flex-1">
                    <h3 class="text-white font-bold mb-2">{{ __('ui.cookies.title') }}</h3>
                    <p class="text-[#a0a0a0] text-sm">
                        {{ __('ui.cookies.description') }}
                        <a href="{{ route(\App\Helpers\LocaleHelper::localizedRoute('privacy')) }}" class="text-[#c4ff00] hover:underline">{{ __('ui.cookies.more_info') }}</a>
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                    <button id="cookie-decline" class="px-6 py-3 bg-[#1a1a1a] hover:bg-[#252525] text-white rounded-full text-sm font-semibold uppercase tracking-wider transition border border-white/10">
                        {{ __('ui.cookies.functional_only') }}
                    </button>
                    <button id="cookie-accept" class="px-6 py-3 bg-[#c4ff00] hover:bg-[#d4ff33] text-[#0a0a0a] rounded-full text-sm font-semibold uppercase tracking-wider transition">
                        {{ __('ui.cookies.accept_all') }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Cookie Consent Management
        document.addEventListener('DOMContentLoaded', function() {
            const COOKIE_CONSENT_KEY = 'bcn_cookie_consent';
            const banner = document.getElementById('cookie-banner');
            const acceptBtn = document.getElementById('cookie-accept');
            const declineBtn = document.getElementById('cookie-decline');
            const settingsBtn = document.getElementById('cookie-settings-btn');

            if (!banner || !acceptBtn || !declineBtn || !settingsBtn) {
                console.error('Cookie banner elements not found');
                return;
            }

            // Check if consent was already given
            function getConsent() {
                return localStorage.getItem(COOKIE_CONSENT_KEY);
            }

            // Save consent
            function setConsent(value) {
                localStorage.setItem(COOKIE_CONSENT_KEY, value);
                hideBanner();

                if (value === 'accepted') {
                    loadAnalytics();
                }
            }

            // Show banner
            function showBanner() {
                banner.classList.remove('translate-y-full');
                banner.classList.add('translate-y-0');
            }

            // Hide banner
            function hideBanner() {
                banner.classList.remove('translate-y-0');
                banner.classList.add('translate-y-full');
            }

            // Load analytics scripts (only after consent)
            function loadAnalytics() {
                // Voeg hier je analytics scripts toe, bijvoorbeeld:
                // Google Analytics, Facebook Pixel, etc.
                // Deze worden alleen geladen na expliciete toestemming
                console.log('Analytics cookies toegestaan');
            }

            // Initialize
            function init() {
                const consent = getConsent();

                if (!consent) {
                    // No consent yet, show banner after short delay
                    setTimeout(showBanner, 1000);
                } else if (consent === 'accepted') {
                    // Already accepted, load analytics
                    loadAnalytics();
                }
            }

            // Event listeners
            acceptBtn.addEventListener('click', function() {
                setConsent('accepted');
            });

            declineBtn.addEventListener('click', function() {
                setConsent('declined');
            });

            settingsBtn.addEventListener('click', function(e) {
                e.preventDefault();
                // Reset consent and show banner again
                localStorage.removeItem(COOKIE_CONSENT_KEY);
                showBanner();
            });

            // Run initialization
            init();
        });
    </script>
</body>
</html>
