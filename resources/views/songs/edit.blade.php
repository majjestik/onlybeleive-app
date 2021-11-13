@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-8">
        <div class="md:my-10 sm:my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">Modifier un cantique</h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/" method="POST">
                @csrf
                <div class="block">
                    <input type="number" 
                        name="numero" 
                        placeholder="Numéro du chant"
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="titre" 
                        placeholder="Titre..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="refrain" 
                        placeholder="Refrain..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="couplet_1" 
                        placeholder="Couplet n° 1..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="couplet_2" 
                        placeholder="Couplet n° 2..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="couplet_3" 
                        placeholder="Couplet n° 3..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="couplet_4" 
                        placeholder="Couplet n° 4..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <input type="text" 
                        name="couplet_5" 
                        placeholder="Couplet n° 5..."
                        class="block shadow-5xl mb-10 p-3 w-80 italic placeholder-gray-400" 
                    >

                    <button type="submit" class="bg-green-500 block shadow-5xl p-3 mb-10 w-80 uppercase font-bold">
                        Ajouter
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection