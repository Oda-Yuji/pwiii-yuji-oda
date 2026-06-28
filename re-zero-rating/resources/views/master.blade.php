<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re:ZERO -Starting Life in Another World- Avaliações</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-white min-h-dvh">
    <nav class="fixed top-0 left-0 right-0 z-50 bg-indigo-50 border-b border-accent shadow-sm">
        <div class="flex items-center justify-between px-6 h-14">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logos/re-zero-logo.png') }}" alt="Logo" class="h-12 w-auto object-contain">
            </a>

            <div class="flex items-center gap-3">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-base text-accent hover:underline">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-accent hover:underline">Log In</a>
                    <a href="{{ route('register') }}" class="bg-accent text-indigo-50 text-sm font-semibold px-4 py-2 rounded hover:bg-accent-hover transition" >Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="mx-auto pt-14 pb-8">
        @yield('content')
    </div>
</body>
</html>