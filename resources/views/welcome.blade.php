<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- Style --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-purple-200">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-black hover:drop-shadow-md focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-black hover:drop-shadow-md focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-black hover:drop-shadow-md focus:outline focus:outline-2 focus:rounded-sm focus:outline-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="text-center">
                <h1 class="text-5xl sm:text-9xl font-mono font-extrabold text-gray-900 drop-shadow-xl hover:scale-110 transition cursor-default">Benvenuto!</h1>
                <p class="mt-4 text-lg text-black">Sei nella pagina principale, effettua l'accesso per apportare modifiche.</p>
                <p class="mt-4 text-lg text-black">Da qui puoi solo visualizzare i progetti se non sei loggato.</p>
            </div>
        </div>
    </body>
</html>
