<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Student;
use App\Models\Book;

class OrderController extends Controller
{
  // Método para listar todos os empréstimos
  public function index() {
    $orders = Order::all(); // Carrega os dados dos relacionamentos
    return view('orders.index', compact('orders'));
  }
  
  public function store(Request $request) {
    // Validação dos dados do empréstimo
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'book_id' => 'required|exists:books,id',
        'data_emprestimo' => 'required|date',
        'data_devolucao' => 'nullable|date|after:data_emprestimo'
    ]);

    // Criação do empréstimo
    Order::create([
        'student_id' => $request->student_id,
        'book_id' => $request->book_id,
        'data_emprestimo' => $request->data_emprestimo,
        'data_devolucao' => $request->data_devolucao
    ]);

    // Redireciona para uma página de sucesso ou lista de empréstimos
    return redirect()->route('orders.create')->with('success', 'Empréstimo registrado com sucesso!');
  }
}
