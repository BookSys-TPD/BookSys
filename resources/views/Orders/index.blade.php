@extends('layouts.app')

@section('title', 'Empréstimos')

@section('content')
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
    <h1 class="titulo">Empréstimos</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-warning btn-sm">Novo Empréstimo</a>
  </div>
</div>

<div class="container mt-4">
  <table class="table table-sm table-bordered">
    <thead class="table-light">
      <tr>
        <th>Código</th>
        <th>Código Aluno</th>
        <th>Nome</th>
        <th>Data Devolução</th>
        <th>ID Livro</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
      <td>{{ $order->id }}</td>
      <td>{{ $order->student_id }}</td>
      <td>{{ $order->student->nome }}</td>
      <td>{{ $order->data_devolucao_prevista }}</td>
      <td>{{ $order->book_id }}</td>
      <td><a href="{{ route('orders.edit', $order->id) }}" class="btn btn-secondary btn-sm">Editar</a></td>
      </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection