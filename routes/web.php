<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FilmController::class, 'index'])->name('home');

Route::get('/create', [FilmController::class, 'create'])->name('film.create');

Route::post('/store', [FilmController::class, 'store'])->name('film.store');

Route::get('/show', [FilmController::class, 'show'])->name('film.show');

Route::get('/edit/{id}', [FilmController::class, 'edit'])->where('id', '[0-9]+')
->name('film.edit');

Route::post('/films/{id}', [FilmController::class, 'update'])->name('film.update'); 

