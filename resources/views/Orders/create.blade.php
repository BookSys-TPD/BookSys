@extends('layouts.app')

@section('title', 'Cadastro de Empréstimos')

@section('content')
<form action="{{ route('orders.store') }}" method="POST">
  @csrf
  <legend class="titulo">Cadastro de Empréstimos</legend>

  <fieldset>
    <div class="form-group">
      <div class="linha">
        <div class="campo col-6">
          <label for="matricula">Matrícula</label>
          <input type="number" id="matricula" name="matricula" required
            class="{{ session('error_student') ? 'error' : '' }}">
          @if (session('error_student'))
            <p class="alert">{{ session('error_student') }}</p>
          @endif
        </div>
        <div class="campo col-6">
          <label for="data_devolucao">Data de Devolução</label>
          <input type="date" id="data_devolucao" name="data_devolucao" required>
        </div>
      </div>

      <div class="linha">
        <div class="campo col-12">
          <label for="livro">Livro</label>
          <input type="text" id="livro" name="livro" required class="{{ session('error_book') ? 'error' : '' }}">
          @if (session('error_book'))
            <p class="alert">{{ session('error_book') }}</p>
          @endif
        </div>
      </div>

      <input type="submit" value="Salvar">
    </div>
  </fieldset>
</form>
@endsection