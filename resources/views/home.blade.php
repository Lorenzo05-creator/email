<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - AgenziaCom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


<x-navbar />


<section class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-4 mb-3">Comunicazione che crea Connessioni</h1>
        <p class="lead mb-4">Aiutiamo il tuo brand a crescere e a farsi notare nel mondo digitale</p>
        <a href="#servizi" class="btn btn-primary btn-lg">Scopri i nostri servizi</a>
    </div>
</section>


<section id="servizi" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">I nostri servizi</h2>
        <div class="row g-4">
            <div class="col-md-3 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Strategia di Marketing</h5>
                        <p class="card-text">Consulenza su brand e campagne per far crescere il tuo business.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Design & Branding</h5>
                        <p class="card-text">Logo, identità visiva e materiali promozionali di alto impatto.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Digital Marketing</h5>
                        <p class="card-text">Social media, SEO e pubblicità online per raggiungere nuovi clienti.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Content Creation</h5>
                        <p class="card-text">Copywriting, video e grafica per raccontare la tua storia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="portfolio" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Portfolio</h2>
        <div class="row g-4">
            @for ($i = 1; $i <= 6; $i++)
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Progetto {{ $i }}">
                    <div class="card-body">
                        <h5 class="card-title">Cliente {{ $i }}</h5>
                        <p class="card-text">Risultato ottenuto: +{{ rand(20, 50) }}% engagement</p>
                        <a href="/progetto/{{ $i }}" class="btn btn-primary">Vedi progetto</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>


<section id="team" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Il nostro team</h2>
        <div class="row g-4 text-center">
            @foreach (['Mario Rossi','Luisa Bianchi','Giulia Verdi','Luca Neri'] as $member)
            <div class="col-md-3">
                <div class="card border-0">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto" alt="{{ $member }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member }}</h5>
                        <p class="card-text">Ruolo</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h2 class="mb-3">Pronto a far crescere il tuo brand?</h2>
        <a href="/contatti" class="btn btn-light btn-lg">Contattaci</a>
    </div>
</section>

</body>
</html>
