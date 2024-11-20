<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Student;
use App\Models\Book;

class OrderController extends Controller
{
  
  public function store(Request $request) {
    $request->validate([
        'student_id' => 'required|exists:students,id',
        'book_id' => 'required|exists:books,id',
        'data_emprestimo' => 'required|date',
        'data_devolucao' => 'nullable|date|after:data_emprestimo'
    ]);

    Order::create([
        'student_id' => $request->student_id,
        'book_id' => $request->book_id,
        'data_emprestimo' => $request->data_emprestimo,
        'data_devolucao' => $request->data_devolucao
    ]);

    return redirect()->route('orders.create')->with('success', 'Empréstimo registrado com sucesso!');
  }
}
