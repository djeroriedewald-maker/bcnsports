<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - BCN Sports</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bcn-green': '#c4ff00',
                        'bcn-dark': '#0a0a0a',
                        'bcn-gray': '#141414',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bcn-dark min-h-screen">
    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-full w-64 bg-bcn-gray border-r border-white/10 flex flex-col">
        <div class="p-6 flex-shrink-0">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-10 w-auto">
            </a>
            <a href="{{ route('home') }}" target="_blank" class="mt-4 flex items-center justify-center gap-2 w-full px-4 py-2 bg-white/5 hover:bg-white/10 text-gray-300 hover:text-white text-sm font-medium rounded-lg border border-white/10 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                Bekijk Website
            </a>
        </div>

        <nav class="mt-2 flex-1 overflow-y-auto">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.dashboard') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Dashboard
            </a>
            <a href="{{ route('admin.messages') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.messages*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Berichten
                @php $newCount = \App\Models\ContactMessage::where('status', 'new')->count(); @endphp
                @if($newCount > 0)
                    <span class="ml-auto bg-bcn-green text-bcn-dark text-xs font-bold px-2 py-1 rounded-full">{{ $newCount }}</span>
                @endif
            </a>
            <a href="{{ route('admin.analytics') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.analytics') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
                Analytics
            </a>

            <div class="mt-6 px-6 py-2">
                <p class="text-xs font-medium text-gray-600 uppercase tracking-wider">Content</p>
            </div>

            <a href="{{ route('admin.faqs') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.faqs*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                FAQ's
            </a>
            <a href="{{ route('admin.packages') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.packages*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Prijzen
            </a>
            <a href="{{ route('admin.testimonials') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.testimonials*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Testimonials
            </a>

            <div class="mt-6 px-6 py-2">
                <p class="text-xs font-medium text-gray-600 uppercase tracking-wider">Instellingen</p>
            </div>

            <a href="{{ route('admin.users') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.users*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
                Gebruikers
            </a>
            <a href="{{ route('admin.password') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.password*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                </svg>
                Wachtwoord
            </a>
            <a href="{{ route('admin.site') }}" class="flex items-center px-6 py-3 text-sm {{ request()->routeIs('admin.site*') ? 'text-bcn-green bg-bcn-green/10 border-r-2 border-bcn-green' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                Site Instellingen
                @if(\App\Models\Setting::isMaintenanceMode())
                    <span class="ml-auto w-2 h-2 bg-yellow-500 rounded-full animate-pulse"></span>
                @endif
            </a>
        </nav>

        <div class="flex-shrink-0 p-6 border-t border-white/10">
            <div class="flex items-center mb-4">
                <div class="w-10 h-10 bg-bcn-green rounded-full flex items-center justify-center text-bcn-dark font-bold">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div class="ml-3">
                    <p class="text-sm text-white font-medium">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left text-sm text-gray-400 hover:text-white transition">
                    <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Uitloggen
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-64 p-8">
        @if(\App\Models\Setting::isMaintenanceMode())
            <div class="mb-6 bg-yellow-500/10 border border-yellow-500/30 text-yellow-500 px-4 py-3 rounded-lg flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <span class="font-medium">Onderhoudsmodus is actief</span>
                    <span class="text-yellow-500/70">- Bezoekers zien de "Under Construction" pagina</span>
                </div>
                <a href="{{ route('admin.site') }}" class="text-sm font-medium hover:underline">Beheren</a>
            </div>
        @endif

        @if(session('success'))
            <div class="mb-6 bg-bcn-green/10 border border-bcn-green text-bcn-green px-4 py-3 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="mb-6 bg-red-500/10 border border-red-500 text-red-500 px-4 py-3 rounded-lg">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <script>
        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('[class*="bg-bcn-green/10"], [class*="bg-red-500/10"]').forEach(el => {
                el.style.transition = 'opacity 0.5s';
                el.style.opacity = '0';
                setTimeout(() => el.remove(), 500);
            });
        }, 5000);
    </script>
</body>
</html>
