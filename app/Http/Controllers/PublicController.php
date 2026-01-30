<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('home');
    }

    public function showProject($id) {
        $progetto = [
            'id' => $id,
            'titolo' => 'Progetto ' . $id,
            'cliente' => 'Cliente ' . $id,
            'descrizione' => 'Descrizione dettagliata del progetto.',
            'immagine' => 'https://via.placeholder.com/800x400',
            'risultati' => 'Risultati ottenuti: +50% engagement sui social.'
        ];

        return view('progetto', compact('progetto'));
    }
}