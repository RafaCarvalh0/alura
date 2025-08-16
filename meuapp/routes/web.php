<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;

// Rotas de Autenticação
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store')->name('login.store');
    Route::post('/logout', 'destroy')->name('logout');
});

// Rotas de Registro
Route::controller(UsersController::class)->group(function () {
    Route::get('/register', 'create')->name('users.create');
    Route::post('/register', 'store')->name('users.store');
});


// Rotas Protegidas
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('/series');
    });

    Route::resource('/series', SeriesController::class)
        ->except(['show']);
});