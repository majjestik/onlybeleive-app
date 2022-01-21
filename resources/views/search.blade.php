<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Only Beleive - Recherches</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        @include('layouts.navbar')

        <nav class="hidden relative flex items-top justify-center bg-yellow-300 dark:bg-yellow-700
            sm:items-center py-8 font-serif font-bold mb-8"
        >
            <div class="fixed top-0 left-0 px-6 py-4 sm:block">
                <a href="{{ url('/songs') }}" class="text-lg text-gray-700">Accueil</a>
            </div>

            <div class="flex justify-between fixed top-0 py-3">
                <form action="{{ route('web.search') }}" method="GET" 
                    class="relative flex items-center"
                >
                    @csrf

                    <button type="submit" name="submit" 
                        class="w-5 h-5 absolute ml-3 cursor-pointer"
                    >
                        <x-heroicon-o-search />
                    </button>
                    

                    <input type="text" placeholder="Rechercher..." name="query"
                        class="font-semibold w-80 py-2 pl-10 pr-5 rounded-2xl bg-gray-900 
                            bg-opacity-10 placeholder-gray-500 ring-1 ring-yellow-200"
                    />
                </form>
            </div>

            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-600 underline hover:text-red-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" 
                            class="text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700"
                        >
                            Se Connecter
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                                class="ml-4 text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700"
                            >
                                S'inscrire
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        <div class="md:my-10 my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">Recherches</h1>
        </div>

        <div class="my-10 grid lg:grid-cols-2 sm:grid-cols-1 gap-x-4 gap-y-8 
            lg:px-8 md:px-5 px-3"
        >
            @if (isset($songs))
                    @if (count($songs) > 0)
                        @foreach ($songs as $song)
                            <div class="my-1 mx-3">
                                <span class="font-bold border-dashed border-red-500 border-2 p-2 mx-2 rounded-md">
                                    {{ $song->numero }}
                                </span>
                                <a href="/songs/{{ $song->id }}" 
                                    class="underline hover:no-underline hover:text-gray-700 hover:font-bolder font-bold"
                                >
                                {{$song->titre}}
                                </a>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-red-500 font-bold">
                            Aucun résultat pour 
                            "<span class="text-gray-800">{{ $_GET['query'] }}</span>"
                        </h1>
                    @endif
            @endif
        </div>
        

        @include('layouts.footer')

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>
    </body>
</html>
