<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Software</title>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

  <!-- Fuente Google -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">

  <style>
    .nav-item {
      color: white;
    }
    .btncursor:hover {
      background-color: #036096;
      cursor: pointer;
      color: orange;
    }
    .btncursor a:hover {
      color: orange;
    }
    .btncursor:hover a {
      color: orange !important;
    }
    .btncursor:hover svg {
      color: orange !important;
      fill: orange !important;
    }
  </style>
</head>
<body>

<header class="d-flex w-100 align-items-center bg-blue" style="height: 75px; background-color: #0dcaf0;">
  <div class="d-flex align-items-center text-white px-3" style="width: 20%; height: 100%;">
    <img src="{{ asset('img/CONTASMARTLOGO.png') }}" alt="Logo Contasmart" style="height:50px;" class="me-2">
    <h4 class="fw-bold m-0" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">DASHBOARD</h4>
  </div>

 
</header>

<!-- Contenedor general: menú + contenido -->
<div class="d-flex" style="min-height: 100vh;">

  <!-- Menú lateral -->
  <div class="d-flex flex-column ms-0 justify-content-start px-0 fw-bold" style="width: 20%; background-color: #0277bd">
    <!-- Imagen centrada -->
    <div class="d-flex justify-content-center mt-4 mb-4">
        <img src="{{ asset('imgs_de_perfil/' . Auth::user()->profile_id . '.webp') }}"
           alt="Foto de usuario"
           class="dropdown-toggle"
           style="width: 200px; height: 200px; border-radius: 50%; border: 2px solid white; cursor: pointer;"
           id="userDropdown"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
    </div>

    <ul class="nav flex-column d-flex flex-column justify-content-start px-3">
      <div class="container d-flex justify-content-center">
        <h5 class="me-3 fw-bold text-white text-center"> {{ Auth::user()->name}}  {{ Auth::user()->lastname }}</h5>
      </div>

      <li class="nav-item d-flex align-items-center p-2 btncursor">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half text-white" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
</svg>
        <a href="#" class="nav-link text-white ps-2">Proyectos</a>
      </li>

      <li class="nav-item d-flex align-items-center p-2 btncursor">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
        <a href="/perfil" class="nav-link text-white ps-2">Perfil</a>
      </li>


      <li class="nav-item d-flex align-items-center p-2 btncursor">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
</svg>
        <a class="nav-link text-white ps-2"  
          href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                Salir</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li>
    </ul>
  </div>

  <!-- Contenido principal -->
  <div class="flex-grow-1 p-4">
    @yield('contenido')
  </div>
</div>




<!-- Bootstrap JS -->
 @yield('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
