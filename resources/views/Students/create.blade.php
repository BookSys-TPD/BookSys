@extends('layouts.app')

@section('title', 'Cadastro de Estudantes')

@section('content')
<form action="{{ route('students.store') }}" method="post">
  @csrf 
  <legend>Cadastro de Alunos</legend>

  <fieldset>
    <div class="form-group">
      <div class="linha">
        <div class="campo col-8">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" required>
        </div>
        <div class="campo col-4">
          <label for="cpf">CPF</label>
          <input type="number" id="cpf" name="cpf" required>
        </div>
      </div>

      <div class="linha">
        <div class="campo col-6">
          <label for="telefone">Telefone</label>
          <input type="tel" id="telefone" name="telefone" required>
        </div>
        <div class="campo col-6">
          <label for="matricula">Matricula</label>
          <input type="number" id="matricula" name="matricula" required>
        </div>
      </div>
    </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="endereco">Endereço</label>
          <input type="text" id="endereco" name="endereco" required>
        </div>
      </div>

    <div class="linha">
        <div class="campo col-12">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
      </div>

    <input type="submit" class="mt-5" value="Salvar">
  </fieldset>
</form>
@endsection