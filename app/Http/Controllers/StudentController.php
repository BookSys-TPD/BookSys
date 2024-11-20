<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class  StudentController extends Controller
{

  public function create()
  {
      return view('students.create');
  }

  public function store(Request $request) {
    $request->validate([
        'matricula' => 'required|unique:students|max:20',
        'cpf' => 'required|unique:students|digits:11',
        'email' => 'required|email|unique:students|max:255',
    ]);

    Student::create([
        'matricula' => $request->matricula,
        'nome' => $request->nome,
    ]);

    return redirect()->route('students.create')->with('success', 'Estudante cadastrado com sucesso!');
  }
}
