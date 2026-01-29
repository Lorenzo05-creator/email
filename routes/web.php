<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/progetto/{id}', function ($id) {
    $progetto = [
        'id' => $id,
        'titolo' => 'Progetto ' . $id,
        'cliente' => 'Cliente ' . $id,
        'descrizione' => 'Descrizione dettagliata del progetto. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'immagine' => 'https://via.placeholder.com/800x400',
        'risultati' => 'Risultati ottenuti: +50% engagement sui social.'
    ];

    return view('progetto', compact('progetto'));
})->name('progetto.show');


Route::get('/contatti', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contatti', [ContactController::class, 'send'])->name('contact.send');

