<?php

use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series/create', [SerieController::class, 'create'])->name('series.create');
Route::post('/series', [SerieController::class, 'store'])->name('series.store');