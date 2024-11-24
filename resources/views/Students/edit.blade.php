@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
<form action="{{ route('students.update', $student->id) }}" method="POST">
  @csrf
  @method('PUT')
  <fieldset class="form-fieldset">
    <div class="form-group">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" id="nome" name="nome" value="{{ old('nome', $student->nome) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="matricula" class="form-label">Matrícula</label>
      <input type="text" id="matricula" name="matricula" value="{{ old('matricula', $student->matricula) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="endereco" class="form-label">Endereço</label>
      <input type="text" id="endereco" name="endereco" value="{{ old('endereco', $student->endereco) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $student->cpf) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="telefone" class="form-label">Telefone</label>
      <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $student->telefone) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Aluno</button>
  </fieldset>
</form>
@endsection