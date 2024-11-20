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
      'nome' => 'required|max:255',
      'endereco' => 'required|max:255',
      'cpf' => 'required|unique:students|digits:11',
      'telefone' => 'required|max:15',
      'email' => 'required|email|unique:students|max:255',
    ]);

    Student::create([
        'nome' => $request->nome,
        'matricula'=> $request->matricula,
        'endereco' => $request->endereco,
        'cpf' => $request->cpf,
        'telefone' => $request->telefone,
        'email' => $request->email, 
    ]);

    return redirect()->route('students.create')->with('success', 'Estudante cadastrado com sucesso!');
  }
}
