<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container p-5">
        {{-- titolo --}}
        <h1>Film in Catalogo</h1>
        {{-- /titolo --}}
        {{-- cards --}}
        <div class="row g-3">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie['original_title'] }}</h6>
                        <hr>
                        <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                        <hr>
                        <p class="card-text">Data di uscita: {{ $movie['date'] }}</p>
                        <hr>
                        <p class="card-text">Voto: {{ $movie['vote'] }}</p>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        {{-- /cards --}}
    </div>
</body>

</html>
