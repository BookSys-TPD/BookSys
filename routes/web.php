<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('index'); 
})->name('index');

//BOOKS
Route::view('/books/create', 'books.create')->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books', [BookController::class, 'index'])->name('books.index');

//Students
Route::view('/students/create', 'students.create')->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students', action: [StudentController::class, 'index'])->name('students.index');

//ORDER
Route::view('/orders/create', 'orders.create')->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');