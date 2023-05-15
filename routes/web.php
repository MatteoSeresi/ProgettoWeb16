<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'showHome'])
        ->name('home');


Route::view('/aziende', 'aziende')
        ->name('aziende');

Route::view('/faq', 'faq')
        ->name('faq');

Route::view('/contattaci', 'contattaci')
        ->name('contattaci');

require __DIR__.'/auth.php';