<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class  StudentController extends Controller
{
    public function index() {
    $students = Student::all(); 
    return view('students.index', compact('students'));
  }

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
  public function edit($id)
  {
      $student = Student::findOrFail($id);
      return view('students.edit', compact('student'));
  }

  public function update(Request $request, $id)
  {
      $request->validate([
          'nome' => 'required|max:255',
          'endereco' => 'required|max:255',
          'cpf' => 'required|digits:11|unique:students,cpf,' . $id,
          'telefone' => 'required|max:15',
          'email' => 'required|email|max:255|unique:students,email,' . $id,
      ]);

      $student = Student::findOrFail($id);
      $student->update([
          'nome' => $request->nome,
          'matricula' => $request->matricula,
          'endereco' => $request->endereco,
          'cpf' => $request->cpf,
          'telefone' => $request->telefone,
          'email' => $request->email,
      ]);

      return redirect()->route('students.index')->with('success', 'Estudante atualizado com sucesso!');
  }
  public function destroy($id) {
    $student = Student::findOrFail($id);
    $student->delete(); 

    return redirect()->route('students.index')->with('success', 'Aluno deletado com sucesso!');
}
}