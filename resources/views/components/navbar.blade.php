<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-4" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="{{ asset('assets/brand/Blue Illustrative Bookstore Logo (2) 3 (2).svg') }}" alt="">
      </a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.index') }}">Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('students.index') }}">Alunos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('orders.index') }}">Empréstimos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Consulta Empréstimo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>