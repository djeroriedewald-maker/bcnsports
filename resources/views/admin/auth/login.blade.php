<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BCN Sports</title>
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
<body class="bg-bcn-dark min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <img src="/images/BCN_LOGO_2024_WHITE.png" alt="BCN Sports" class="h-16 w-auto mx-auto mb-4">
            <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
            <p class="text-gray-500 mt-2">Log in om verder te gaan</p>
        </div>

        <div class="bg-bcn-gray rounded-2xl p-8 border border-white/10">
            @if($errors->any())
                <div class="mb-6 bg-red-500/10 border border-red-500 text-red-500 px-4 py-3 rounded-lg text-sm">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-400 mb-2">E-mailadres</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                        placeholder="admin@bcnsports.nl"
                    >
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Wachtwoord</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        class="w-full bg-bcn-dark border border-white/10 rounded-lg px-4 py-3 text-white placeholder-gray-500 focus:outline-none focus:border-bcn-green transition"
                        placeholder="••••••••"
                    >
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/10 bg-bcn-dark text-bcn-green focus:ring-bcn-green focus:ring-offset-bcn-dark">
                        <span class="ml-2 text-sm text-gray-400">Onthoud mij</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-bcn-green text-bcn-dark font-bold py-3 rounded-lg hover:bg-bcn-green/90 transition">
                    Inloggen
                </button>
            </form>
        </div>

        <p class="text-center text-gray-600 text-sm mt-6">
            <a href="{{ route('home') }}" class="hover:text-bcn-green transition">← Terug naar website</a>
        </p>
    </div>
</body>
</html>
