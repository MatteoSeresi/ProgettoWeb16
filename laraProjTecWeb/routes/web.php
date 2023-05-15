<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'showCatalog1'])
        ->name('catalog1');


Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

require __DIR__.'/auth.php';
