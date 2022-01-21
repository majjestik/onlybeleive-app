@extends('layouts.app')

@section('content')
    <div class="md:my-10 my-5">
        <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">only beleive songs</h1>
    </div>
    @if (Auth::user())
        <div class="pt-5 mx-6 sm:mb-80 mb-96 sm:pb-0 pb-20">
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

    
{{-- <main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>
        </section>
    </div>
</main> --}}
@endsection
