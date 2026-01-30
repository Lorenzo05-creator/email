<x-layout :title="$progetto['titolo']">
    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">{{ $progetto['titolo'] }}</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <img src="{{ $progetto['immagine'] }}" class="img-fluid rounded shadow mb-4" alt="{{ $progetto['titolo'] }}">
                <h2>{{ $progetto['titolo'] }}</h2>
                <p class="lead text-muted">Cliente: {{ $progetto['cliente'] }}</p>
                <hr>
                <p>{{ $progetto['descrizione'] }}</p>
                <div class="alert alert-info">
                    <strong>Risultato:</strong> {{ $progetto['risultati'] }}
                </div>
            </div>
        </div>
    </div>
</x-layout>