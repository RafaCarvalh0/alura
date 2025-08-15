<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout'); // LINHA CORRIGIDA

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('/series');
    });

    Route::resource('/series', SeriesController::class)
        ->except(['show']);
});