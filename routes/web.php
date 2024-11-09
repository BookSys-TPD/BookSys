<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrderController;


//STUDENT
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

//ORDER
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

//BOOKS
Route::view('/books/create', 'books.create')->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
