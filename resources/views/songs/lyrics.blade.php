<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Cantique n° {{ $song->numero }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="m-auto w-4/5 py-3">
        <div class="py-5 ">
            <a href="/songs" 
                class="text-red-500 hover:text-red-800 border-b-2 border-dotted pb-2"
            >
                &larr; Les cantiques 
            </a>
        </div>

        <div class="text-center">
            <h1 class="sm:text-1xl md:text-2xl lg:text-4xl uppercase bold">
                {{ $song->titre }}
            </h1>

            <div class="w-1/2 m-auto text-left py-8">
                <div class="m-auto">
                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                if($song->refrain) {
                                    echo "<h5 class='underline text-xl pb-3'>Refrain :</h5>";
                                }

                                $pieces = explode(";", $song->refrain);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>

                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                $pieces = explode(";", $song->couplet_1);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>

                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                $pieces = explode(";", $song->couplet_2);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>

                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                $pieces = explode(";", $song->couplet_3);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>

                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                $pieces = explode(";", $song->couplet_4);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>

                    <p class="text-xl text-gray-900 text-bolder text-justify my-3">
                        @php
                            {{ 
                                $pieces = explode(";", $song->couplet_5);
                                foreach ($pieces as $piece) {
                                    echo "<div class='py-1'>" .$piece. "</div>";
                                }  
                            }}
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>