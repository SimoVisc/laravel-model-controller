<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <div class="page-title bg-info w-100 d-flex justify-content-center ">
            <h1 class="text-light"> Movies </h1>
        </div>
        <div class="container d-flex flex-wrap justify-content-center ">
            @foreach ($movies as $movie)
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $movie->title }}</h3>
                        <p class="card-text"><strong>Titolo originale:</strong>{{ $movie->original_title }}</p>
                        <p class="card-text"><strong>Nazionalità:</strong>{{ $movie->nationality }}</p>
                        <p class="card-text"><strong>Voto:</strong> {{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </main>

</body>

</html>
