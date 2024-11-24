@extends('layouts.app')

@section('title', 'Livros')

@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
    <h1 class="titulo">Livros</h1>
    <a href="{{ route('books.create') }}" class="btn btn-warning">Novo Livro</a>
  </div>
</div>

<div class="container mt-4">
  <table class="table table-sm table-bordered">
    <thead class="table-light">
      <tr>
        <th>Título</th>
        <th>ISBN</th>
        <th>Autor</th>
        <th>Categoria</th>
        <th>ID Livro</th>
        <th>Editar</th>
        <th>Deletar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($books as $book)
      <tr>
      <td>{{ $book->titulo }}</td>
      <td>{{ $book->isbn }}</td>
      <td>{{ $book->autor }}</td>
      <td>{{ $book->categoria }}</td>
      <td>{{ $book->id}}</td>
      <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-secondary btn-sm">Editar</a></td>
      <td>
          <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $book->id }})">Deletar</button>

          <form id="delete-form-{{ $book->id }}" action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
          </form>
        </td>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection