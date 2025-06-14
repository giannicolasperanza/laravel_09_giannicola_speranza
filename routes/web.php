<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

// rotta home page
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// rotta posts
Route::get('/articoli', [PostController::class ,'articoli'])->name('listaArticoli');

// Dettaglio articolo 
Route::get('/articleDetail/{id}', [PostController::class, 'dettaglio'])->name('articleDetail');


// CREAZIONE ARTICOLI
Route::get('/article/create', [PostController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/submit', [PostController::class, 'store'])->name('article.submit')->middleware('auth');