<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'AgenziaCom' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    <x-navbar />

    {{-- Messaggio di successo invio mail --}}
    @if (session('success'))
        <div class="container mt-3">
            <div class="alert alert-success border-start border-4 border-success">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1">© {{ date('Y') }} <strong>AgenziaCom</strong> - Tutti i diritti riservati.</p>
            <small class="text-secondary">P.IVA 12345678901 - Creazione con Laravel & Bootstrap</small>
        </div>
    </footer>

</body>
</html>