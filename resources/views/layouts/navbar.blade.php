{{-- Aqui a Navbar ou o Cabeçalho --}}

<nav class="navbar navbar-expand-lg mb-3" style="background-color: #b0bfc6;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Oficina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('veiculos.home') }}">Ínicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Veículos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('veiculos.create') }}">Cadastrar Veículo</a></li>
            <!-- @@ ToDo
            <li><a class="dropdown-item" href="">Cadastrar Serviço</a></li>
            <li><a class="dropdown-item" href="#">Re-utilizar Cadastro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Outros Aqui</a></li>
            -->
          </ul>
        </li>
      </ul>
      <!--   @@ ToDo
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Digita a placa" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Busca</button>
      </form>
      -->
    </div>
  </div>
</nav>