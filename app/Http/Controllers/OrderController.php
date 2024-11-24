<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Student;
use App\Models\Book;

class OrderController extends Controller
{
  public function index() {
    $orders = Order::all(); 
    $orders = Order::with('student')->get(); 
    return view('orders.index', compact('orders'));
  }

  public function store(Request $request)
  {

    $request->validate([
      'matricula' => 'required|numeric',
      'data_devolucao' => 'required|date',
      'livro' => 'required|string',
    ]);

    $student = Student::where('matricula', $request->matricula)->first();
    if (!$student) {
      return back()->with('error_student', 'Aluno não encontrado!!');
    }

    $book = Book::where('titulo', $request->livro)->first();
    if (!$book) {
      return back()->with('error_book', 'Livro não encontrado!!');
    }

    $dataDevolucao = \Carbon\Carbon::parse($request->data_devolucao)->format('Y-m-d');


    Order::create([
      'student_id' => $student->id,
      'book_id' => $book->id,
      'data_devolucao_prevista' => $dataDevolucao,
    ]);

    return redirect()->route('orders.create')->with('success', 'Empréstimo registrado com sucesso!');
  }
}