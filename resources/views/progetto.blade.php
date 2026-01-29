<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $progetto['titolo'] }} - AgenziaCom</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<x-navbar />


<section class="py-5 bg-light text-center">
    <div class="container">
        <h1 class="display-4 mb-2">{{ $progetto['titolo'] }}</h1>
        <p class="lead mb-4">Cliente: {{ $progetto['cliente'] }}</p>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6">
                <img src="{{ $progetto['immagine'] }}" class="img-fluid rounded" alt="{{ $progetto['titolo'] }}">
            </div>
            <div class="col-md-6">
                <h3>Descrizione</h3>
                <p>{{ $progetto['descrizione'] }}</p>
                <h5>Risultati</h5>
                <p>{{ $progetto['risultati'] }}</p>
                <a href="/" class="btn btn-primary">Torna alla Home</a>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h2 class="mb-3">Vuoi realizzare un progetto simile?</h2>
        <a href="/contatti" class="btn btn-light btn-lg">Contattaci</a>
    </div>
</section>

</body>
</html>
