<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;


Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/progetto/{id}', [PublicController::class, 'showProject'])->name('progetto.show');


Route::get('/contatti', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contatti', [ContactController::class, 'send'])->name('contact.send');