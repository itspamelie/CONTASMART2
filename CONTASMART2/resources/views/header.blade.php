<header class="fixed-top bg-light shadow">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <!-- Logo y nombre -->
      <a href="/" class="text-decoration-none d-flex align-items-center p-2">
        <img src="{{ asset('img/CONTASMARTLOGO.png') }}" class="px-2" style="height:50px;" alt="">
        <h3 class="text-dark fw-bold mt-2 mb-0">CONTA</h3>
        <h3 class="text-orange fw-bold mt-2 mb-0">SMART</h3>
      </a>

      <!-- Botón hamburguesa -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú de navegación -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-100 d-flex justify-content-evenly align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="/introduction">Introducción</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/herramientas">Herramientas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tutoriales">Tutoriales</a>
          </li>
          <li class="nav-item">
            <a href="/login" class="btn border-dark mx-2 text-decoration-none text-dark fw-bold">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="btn btn-custom mx-2 text-decoration-none text-dark fw-bold">Registro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
