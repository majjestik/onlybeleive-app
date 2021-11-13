<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Only Beleive - Accueil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <nav class="relative flex items-top justify-center bg-yellow-300 dark:bg-yellow-700 sm:items-center py-8 font-serif font-bold mb-8">
            <div class="fixed top-0 left-0 px-6 py-4 sm:block">
                <a href="{{ url('/') }}" class="text-lg text-gray-700">Only Beleive</a>
            </div>

            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-600 underline hover:text-red-700">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-600 underline hover:no-underline hover:text-red-700">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        <div class="md:my-10 sm:my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">only beleive songs</h1>
        </div>

        <div class="pt-5 mx-8">
            <a href="/create" class="text-red-500 border-b-2 border-dotted pb-2">
                Ajouter une chanson &rarr;
            </a>
        </div>

        <div class="my-10 grid lg:grid-cols-3 sm:grid-cols-2 gap-x-4 gap-y-8 ">
            @foreach ($songs as $song)
                <div class="my-1 mx-4">
                    <div class="float-right">
                        <a href="/{{ $song->id }}/edit"
                            class="text-green-500 border-b-2 border-dotted pb-2""
                            >
                            Modifier &rarr;
                        </a>
                    </div>
                    
                    <span class="font-bold border-dashed border-red-500 border-2 p-2 mx-3 rounded-md">
                        {{ $song->numero }}
                    </span>
                    <a href="" class="underline hover:no-underline font-bold">
                       {{$song->titre}}
                    </a>
                </div>
            @endforeach
        </div>
        

        @include('layouts.footer')
    </body>
</html>
