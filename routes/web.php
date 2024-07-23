<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmController::class, 'index'])->name('home');

Route::get('/create', [FilmController::class, 'create'])->name('film.create');

Route::post('/store', [FilmController::class, 'store'])->name('film.store');
