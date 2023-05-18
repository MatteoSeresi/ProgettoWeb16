<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;


// Livello 0
Route::get('/', [PublicController::class, 'showHome'])
        ->name('home');

Route::view('/catalogo', 'catalogo')
        ->name('catalogo');

Route::get('/aziende', [PublicController::class, 'showAziende'])
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

Route::get('/user', [UserController::class, 'index'])
        ->name('user');

Route::get('/user/usermodify', [UserController::class, 'modificaUtente'])
        ->name('usermodify');

require __DIR__.'/auth.php';