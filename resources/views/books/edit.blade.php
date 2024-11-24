@extends('layouts.app')

@section('title', 'Livros')

@section('content')
<form action="{{ route('books.update', $book->id) }}" method="POST">
  @csrf
  @method('PUT') 
  <fieldset class="form-fieldset">
    <div class="form-group">
      <label for="isbn" class="form-label">ISBN</label>
      <input type="text" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $book->titulo) }}" class="form-control"
        required>
    </div>

    <div class="form-group">
      <label for="autor" class="form-label">Autor</label>
      <input type="text" id="autor" name="autor" value="{{ old('autor', $book->autor) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="categoria" class="form-label">Categoria</label>
      <input type="text" id="categoria" name="categoria" value="{{ old('categoria', $book->categoria) }}"
        class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Livro</button>
  </fieldset>
</form>
@endsection