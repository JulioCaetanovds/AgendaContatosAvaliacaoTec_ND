<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Rota para a página inicial (home)
Route::get('/', function () {
    return view('home');
})->name('home');

// rota principal
Route::resource('contacts', ContactController::class);
