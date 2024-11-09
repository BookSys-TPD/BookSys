<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class  StudentController extends Controller
{
  public function index() {
    $students = Student::all(); // Busca todos os estudantes
    return view('students.index', compact('students'));
  }
  
  public function store(Request $request) {
    // Validação dos dados do estudante
    $request->validate([
        'matricula' => 'required|unique:students|max:20',
        'nome' => 'required|max:255',
    ]);

    // Criação do estudante
    Student::create([
        'matricula' => $request->matricula,
        'nome' => $request->nome,
    ]);

    // Redireciona para uma página de sucesso ou lista de estudantes
    return redirect()->route('students.create')->with('success', 'Estudante cadastrado com sucesso!');
  }
}
