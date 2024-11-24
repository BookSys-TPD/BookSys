@extends('layouts.app')

@section('title', 'Cadastro de Livros')

@section('content')
<form action="{{ route('books.store') }}" method="POST">
  @csrf
  <legend>Cadastro de Livros</legend>

  <fieldset class="form-fieldset">
    <div class="form-group">
      <div class="linha">
        <div class="campo col-8">
          <label for="titulo" class="form-label">Título</label>
          <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="campo col-4">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" id="isbn" name="isbn" class="form-control" required>
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="autor" class="form-label">Autor</label>
          <input type="text" id="autor" name="autor" class="form-control" required>
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="categoria" class="form-label">Categoria</label>
          <input type="text" id="categoria" name="categoria" class="form-control" required>
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
  </fieldset>
</form>
@endsection