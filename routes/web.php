<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::view('/books/create', 'books.create')->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');