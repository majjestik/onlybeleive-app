<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Only Beleive - Cantiques</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased flex flex-col h-screen">

        @include('layouts.navbar')

        <div class="md:my-10 my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">only beleive songs</h1>
        </div>
        @if (Auth::user())
            <div class="pt-5 mx-6">
                <a href="/songs/create" 
                    class="text-red-500 hover:text-red-800 border-b-2 border-dotted pb-2"
                >
                    Ajouter une chanson &rarr;
                </a>
            </div>
        @else
            <p class="pt-3 px-5 font-bold text-red-600 italic">
                Se connecter pour ajouter un cantique !
            </p>
        @endif
        

        <div class="my-10 grid lg:grid-cols-3 sm:grid-cols-2 gap-x-4 gap-y-8 mb-auto">
            @foreach ($songs as $song)
                <div class="my-1 mx-3">
                    @if (isset(Auth::user()->id))
                        <div class="float-right">
                            <a href="songs/{{ $song->id }}/edit"
                                class="text-green-500 hover:text-green-800 border-b-2 border-dotted pb-2"
                            >
                                Modifier &rarr;
                            </a>
                            
                            <form action="/songs/{{ $song->id }}" method="POST" class="pt-3">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="text-red-500 hover:text-red-800 border-b-2 border-dotted pb-2"
                                >
                                    Supprimer &rarr;
                                </button>
                            </form>
                        </div>
                    @endif
                    
                    
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
        </div>
        

        @include('layouts.footer')

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>
    </body>
</html>
