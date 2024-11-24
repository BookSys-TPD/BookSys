@extends('layouts.app')

@section('title', 'Cadastro de Empréstimos')

@section('content')
<form action="{{ route('orders.store') }}" method="POST">
  @csrf
  <legend class="titulo">Cadastro de Empréstimos</legend>

  <fieldset class="form-fieldset">
    <div class="form-group">
      <div class="linha">
        <div class="campo col-6">
          <label for="matricula" class="form-label">Matrícula</label>
          <input type="number" id="matricula" name="matricula" required class="form-control {{ session('error_student') ? 'error' : '' }}">
          @if (session('error_student'))
            <p class="alert">{{ session('error_student') }}</p>
          @endif
        </div>
        <div class="campo col-6">
          <label for="data_devolucao" class="form-label">Data de Devolução</label>
          <input type="date" id="data_devolucao" name="data_devolucao" required class="form-control">
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="livro" class="form-label">Livro</label>
          <input type="text" id="livro" name="livro" required class="form-control {{ session('error_book') ? 'error' : '' }}">
          @if (session('error_book'))
            <p class="alert">{{ session('error_book') }}</p>
          @endif
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </fieldset>
</form>
@endsection