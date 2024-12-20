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
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('books/{id}', [BookController::class, 'destroy'])->name('books.destroy');

//Students
Route::view('/students/create', 'students.create')->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students', action: [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

//ORDER
Route::view('/orders/create', 'orders.create')->name('orders.create');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');