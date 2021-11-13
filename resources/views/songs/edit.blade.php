@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/8 py-8">
        <div class="md:my-10 sm:my-5">
            <h1 class="text-center lg:text-4xl sm:text-2xl xs:text-xl uppercase underline font-bold">Modifier un cantique</h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/songs/{{ $song->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="block">
                    <input type="number" 
                        name="numero" 
                        value="{{ $song->numero }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="titre" 
                        value="{{ $song->titre }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="refrain" 
                        value="{{ $song->refrain }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="couplet_1" 
                        value="{{ $song->couplet_1 }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="couplet_2" 
                        value="{{ $song->couplet_2 }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="couplet_3" 
                        value="{{ $song->couplet_3 }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="couplet_4" 
                        value="{{ $song->couplet_4 }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <input type="text" 
                        name="couplet_5" 
                        value="{{ $song->couplet_5 }}"
                        class="block shadow-5xl mb-10 p-3 w-80 italic" 
                    >

                    <button type="submit" class="bg-green-500 block shadow-5xl p-3 mb-10 w-80 uppercase font-bold">
                        Modifier
                    </button>
                </div>
            </form>
        </div>

    </div>

@endsection