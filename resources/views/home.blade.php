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
        <header>
            <div class="header text-center">
                <h1>Movies</h1>
            </div>

        </header>
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
                <div class="card m-2" style="width: 18rem;">

                    <img src="{{ $movie['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">


                        <h5 class="card-title">{{ $movie['title'] }}</h5>

                        <p class="card-text">{{ $movie['original_title'] }} - {{ $movie['nationality'] }}</p>

                    </div>
                </div>
            @endforeach

        </div>


        </div>
    </main>

</body>

</html>
