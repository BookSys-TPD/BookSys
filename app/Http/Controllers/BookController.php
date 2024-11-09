<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
  // Método para listar todos os livros
  public function index() {
    $books = Book::all(); // Busca todos os livros
    return view('books.index', compact('books'));
  }
  
  // Método para salvar um novo livro
  public function store(Request $request) {
    // Validação dos dados do livro
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

    // Redireciona para a página de listagem de livros com uma mensagem de sucesso
    return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso!');
  }

  // Método para exibir o formulário de edição de livro
  /*public function edit($id) {
    $book = Book::findOrFail($id); // Encontra o livro pelo ID ou lança uma exceção
    return view('books.edit', compact('book')); // Retorna a view de edição com o livro específico
  }*/

  // Método para atualizar os dados do livro
  public function update(Request $request, $id) {
    // Validação dos dados do livro
    $request->validate([
        'isbn' => 'required|max:255|unique:books,isbn,' . $id,
        'titulo' => 'required|max:255',
        'autor' => 'required|max:255',
        'categoria' => 'required|max:255',
    ]);

    // Busca e atualização do livro
    $book = Book::findOrFail($id);
    $book->update([
        'isbn' => $request->isbn,
        'titulo' => $request->titulo,
        'autor' => $request->autor,
        'categoria' => $request->categoria,
    ]);

    // Redireciona para a página de listagem de livros com uma mensagem de sucesso
    return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso!');
  }
}
