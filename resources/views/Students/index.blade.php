@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
    <h1 class="titulo">Alunos</h1>
    <a href="{{ route('students.create') }}" class="btn btn-warning btn-sm">Novo Aluno</a>
  </div>
</div>

<div class="container mt-4">
  <table class="table table-sm table-bordered">
    <thead class="table-light">
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Editar</th>
        <!-- <th>Desativar</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
      <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->nome }}</td>
      <td>{{ $student->telefone }}</td>
      <td><a href="{{ route('students.edit', $student->id) }}" class="btn btn-secondary btn-sm">Editar</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection