<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/books/create', [BookController::class, 'create'])->name('books/create');
Route::post('/books/store', [BookController::class, 'store'])->name('books/store');
Route::put('/books/update/{id}', [BookController::class, 'update'])->name('books/update');
Route::delete('/books/delete/{id}', [BookController::class, 'delete'])->name('books/delete');
