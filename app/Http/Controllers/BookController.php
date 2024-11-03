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
  
  public function store(Request $request) {
    // Validação dos dados
    $request->validate([
        'isbn' => 'required|unique:books|max:255',
        'titulo' => 'required|max:255',
        'autor' => 'required|max:255',
        'categoria' => 'required|max:255',
    ]);

    // Criação do livro
    Book::create([
        'isbn' => $request->isbn,
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'categoria' => $request->categoria,
    ]);

    // Redireciona para uma página de sucesso ou lista de livros
    return redirect()->route('books.create')->with('success', 'Livro cadastrado com sucesso!');
  }

}
