<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('books/create');
Route::post('/books/store', [BookController::class, 'store'])->name('books/store');
