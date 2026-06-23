<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re:ZERO -Starting Life in Another World - Avaliações</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#181624] text-white">
    <nav class="fixed top-0 left-0 right-0 z-50 bg-indigo-50 border-b border-[#776eb4] shadow-sm">
        <div class="flex items-center justify-between px-6 h-16">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/re-zero-logo.png') }}" alt="Logo" class="h-13">
            </a>

            <div class="flex items-center gap-3">
                @auth
                    <span class="text-white">Olá, {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-sm text-gray-300 hover:underline">Sair</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-[#776eb4] hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="bg-[#776eb4] text-indigo-50 text-sm font-semibold px-4 py-2 rounded hover:bg-[#6b63a2]">Sign Up</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="text-center items-center mx-auto pt-16">
        @yield('content')
    </div>
</body>
</html>