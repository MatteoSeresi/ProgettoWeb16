<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;


// Livello 0
Route::get('/', [PublicController::class, 'showHome'])
        ->name('home');

Route::get('/catalogo', [PublicController::class, 'showOfferta'])
        ->name('catalogo');

Route::get('/aziende', [PublicController::class, 'showAziende'])
        ->name('aziende');

Route::view('/faq', 'faq')
        ->name('faq');

Route::view('/contattaci', 'contattaci')
        ->name('contattaci');

// Route::view('/accedi', 'login')
//         ->name('accedi');

// Route::view('/registrtazione', 'registrazione')
//         ->name('registrazione');

//Livello1

Route::get('/user', [UserController::class, 'userarea'])
        ->name('user')->middleware('can:isUser'); 

Route::get('/user/usermodify', [UserController::class, 'modificaUtente'])
        ->name('usermodify');

//Livello2
Route::get('/staff', [StaffController::class, 'staffarea'])
        ->name('staff')->middleware('can:isStaff');

require __DIR__.'/auth.php';