<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  public function index() {
    $books = Book::all(); // Busca todos os livros
    return view('books.index', compact('books'));
  }
}
