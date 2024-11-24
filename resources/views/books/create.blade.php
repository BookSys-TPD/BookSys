@extends('layouts.app')

@section('title', 'Cadastro de Empréstimos')

@section('content')
<form action="{{ route('orders.store') }}" method="POST">
  @csrf
  <legend>Cadastro de Livros</legend>

  <fieldset>
    <div class="form-group">
      <div class="linha">
        <div class="campo col-8">
          <label for="titulo">Título</label>
          <input type="text" id="titulo" name="titulo">
        </div>
        <div class="campo col-4">
          <label for="isbn">ISBN</label>
          <input type="text" id="isbn" name="isbn">
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="autor">Autor</label>
          <input type="text" id="autor" name="autor">
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="categoria">Categoria</label>
          <input type="text" id="categoria" name="categoria">
        </div>
      </div>
    </div>

    <input type="submit" class="mt-5" value="Salvar">
  </fieldset>
</form>
@endsection