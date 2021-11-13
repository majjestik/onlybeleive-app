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
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-600 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-600 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>

        <div class="md:my-10 sm:my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">only beleive songs</h1>
        </div>

        <div class="md:my-10 sm:my-5 w-4/5 m-auto">
            <a href="" class="underline hover:no-underline font-bold">Ma foi regarde à toi</a>
        </div>

        <div class="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur hic commodi aspernatur reiciendis ullam nam, sequi, qui assumenda quisquam harum facere, esse natus illo tenetur. Explicabo dolores temporibus dolore sed?</p>

        </div>
        

        @include('layouts.footer')
    </body>
</html>
