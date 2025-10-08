 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-orange">
            <div class="d-flex align-items-center justify-content-between text-white px-3 " style="width: 50%; height: 100%;">
    <img src="{{ asset('img/CONTASMARTLOGO.png') }}" alt="Logo Contasmart" style="height:50px;" class="me-2">
    <h4 class="fw-bold m-0" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">CALCULADORA DE NOMINAS</h4>
<button class="btn btn-link bg-white px-2 btn-sm order-1 order-lg-0 me-4 me-lg-0" 
        type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#offcanvasSidenav" 
        aria-controls="offcanvasSidenav">
    <i class="fas fa-bars"></i>
</button>   
</div>
          <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                     </div>
            </form>
            <!-- Navbar-->
              <div class="d-flex justify-content-end align-items-center px-4 text-white " style="width: 80%;">
    <span class="me-3 fw-bold"> Practica: {{$practica->titulo}} </span>


            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     
                        <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();" class="dropdown-item"><i class="bi bi-box-arrow-in-left"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
</svg>Cerrar sesión</a>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                    </ul>
                </li>
            </ul>
        </nav>
      