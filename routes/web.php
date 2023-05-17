<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


// Livello 0
Route::get('/', [PublicController::class, 'showHome'])
        ->name('home');

Route::view('/catalogo', 'catalogo')
        ->name('catalogo');

Route::view('/aziende', 'aziende')
        ->name('aziende');

Route::view('/faq', 'faq')
        ->name('faq');

Route::view('/contattaci', 'contattaci')
        ->name('contattaci');

Route::view('/accedi', 'login')
        ->name('accedi');

Route::view('/registrtazione', 'registrazione')
        ->name('registrazione');

//Livello1

require __DIR__.'/auth.php';