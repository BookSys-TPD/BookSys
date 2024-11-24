@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
  <div class="Services d-flex flex-column align-items-center justify-content-center text-center" style="height: 40vh;">
    <h1 class="logo-booksys">BookSys</h1>
    <h5>"Seu aliado no gerenciamento de bibliotecas"</h5>
  </div>

  <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card d-flex flex-row align-items-center p-3">
          <div class="icon-box me-3">
            <i class='bx bxs-book-bookmark'></i>
          </div>
          <div class="card-body">
          <a href="{{ route('books.create') }}" class="card-title">CADASTRAR LIVROS</a>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card d-flex flex-row align-items-center p-3">
          <div class="icon-box me-3">
            <i class='bx bx-transfer'></i>
          </div>
          <div class="card-body">
          <a href="{{ route('orders.create') }}" class="card-title">CADASTRAR EMPRÉSTIMO</a>
          </div>
        </div>
      </div>

      <div class="col mb-5">  
        <div class="card d-flex flex-row align-items-center p-3">
          <div class="icon-box me-3">
            <i class='bx bxs-user'></i>
          </div>
          <div class="card-body">
          <a href="{{ route('students.create') }}" class="card-title">CADASTRAR ALUNOS</a>
          </div>
        </div>
      </div>

      <div class="col mb-5">
        <div class="card d-flex flex-row align-items-center p-3">
          <div class="icon-box me-3">
            <i class='bx bx-clipboard'></i>
          </div>
          <div class="card-body">
            <h5 class="card-title">CONSULTAR EMPRÉSTIMOS</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection