@extends('layouts.app')

@section('title', 'Editar Empréstimo')

@section('content')
<form action="{{ route('orders.update', $order->id) }}" method="POST">
  @csrf
  @method('PUT') 
  <fieldset class="form-fieldset">
    <div class="form-group">
      <label for="matricula" class="form-label">Matrícula</label>
      <input type="number" id="matricula" name="matricula" value="{{ old('matricula', $order->student->matricula) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="data_devolucao" class="form-label">Data de Devolução</label>
      <input type="date" id="data_devolucao" name="data_devolucao" value="{{ old('data_devolucao', $order->data_devolucao_prevista) }}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="livro" class="form-label">Livro</label>
      <input type="text" id="livro" name="livro" value="{{ old('livro', $order->book->titulo) }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar Empréstimo</button>
  </fieldset>
</form>
@endsection