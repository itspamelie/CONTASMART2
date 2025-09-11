<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ContaSmart</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

  <!-- Fuente Google -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active slide-in">
        <img src="{{ asset('img/imagen_fondo_perfil.png') }}" class="d-block w-100 vh-100" alt="...">

        <!-- Overlay oscuro -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.9);">

          <!-- Botón con X en la esquina superior izquierda -->
          <a class="btn position-absolute top-0 start-0 m-3 fw-bold bg-orange text-white"
                  style="z-index: 999;"
                  onmouseover="this.style.backgroundColor='#e69500'" 
                  onmouseout="this.style.backgroundColor='orange'" href="dashboard">
            Regresar
</a>

          <!-- Botón con engrane en la esquina superior derecha -->
          <button class="btn position-absolute top-0 end-0 m-3 text-white"
                  style="z-index: 999;"
                  data-bs-toggle="modal"
                  data-bs-target="#modalEditar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                 class="bi bi-gear-fill" viewBox="0 0 16 16">
              <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
            </svg>
          </button>

          <!-- Contenido centrado -->
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 slide-in">
            <img src="{{ asset('imgs_de_perfil/astronauta.webp') }}"
                 alt="Foto de usuario"
                 class="dropdown-toggle me-3"
                 style="width: 40%; height: 60%; border-radius: 50%; border: 2px solid white; cursor: pointer;"
                 id="userDropdown"
                 role="button"
                 data-bs-toggle="dropdown"
                 aria-expanded="false">

            <h1 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">{{ Auth::user()->name}}  {{ Auth::user()->lastname }}</h1>
            <p class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">Grupo {{ Auth::user()->group}} | {{ Auth::user()->semester}} Semestre</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Editar Perfil -->
  <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarLabel">Editar Perfil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body">
          <form action="/editarusuario" method="POST">
            @csrf
     <!-- Campo oculto para el ID -->
          <input type="hidden" name="id" value="{{ Auth::user()->id}}">

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="semestre" class="form-label fw-bold" name="semester">Semestre</label>
               <select id="semestre" name="semester" class="form-select">
  <option disabled>Selecciona semestre</option>
  <option value="1" {{ Auth::user()->semester == 1 ? 'selected' : '' }}>1</option>
  <option value="2" {{ Auth::user()->semester == 2 ? 'selected' : '' }}>2</option>
  <option value="3" {{ Auth::user()->semester == 3 ? 'selected' : '' }}>3</option>
  <option value="4" {{ Auth::user()->semester == 4 ? 'selected' : '' }}>4</option>
  <option value="5" {{ Auth::user()->semester == 5 ? 'selected' : '' }}>5</option>
  <option value="6" {{ Auth::user()->semester == 6 ? 'selected' : '' }}>6</option>
  <option value="7" {{ Auth::user()->semester == 7 ? 'selected' : '' }}>7</option>
  <option value="8" {{ Auth::user()->semester == 8 ? 'selected' : '' }}>8</option>
  <option value="9" {{ Auth::user()->semester == 9 ? 'selected' : '' }}>9</option>
</select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="grupo" class="form-label fw-bold">Grupo</label>
                <select id="grupo" name="group" class="form-select">
  <option value="A" {{ Auth::user()->group == 'A' ? 'selected' : '' }}>A</option>
  <option value="B" {{ Auth::user()->group == 'B' ? 'selected' : '' }}>B</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label fw-bold">Correo electrónico</label>
<input type="email" class="form-control" id="correo"  name="email" value="{{ Auth::user()->email }}">
            </div>

            <!-- Botón para mostrar u ocultar campos de contraseña -->
            <div class="mb-3">
              <button type="button" class="btn bg-orange text-white fw-bold" id="togglePasswordFields"
                      onmouseover="this.style.backgroundColor='#e69500'"
                      onmouseout="this.style.backgroundColor='orange'">
                Cambiar contraseña
              </button>
            </div>

            <!-- Campos ocultos por defecto -->
            <div id="passwordFields" style="display: none;">
              <div class="mb-3">
                <label for="nuevaPassword" class="form-label fw-bold">Nueva contraseña</label>
                <input type="password" class="form-control" name="newpassword" id="nuevaPassword" placeholder="Nueva contraseña">
              </div>

              <div class="mb-3">
                <label for="confirmarPassword" class="form-label fw-bold">Confirmar contraseña</label>
                <input type="password" class="form-control" name="confirmpassword"
                id="confirmarPassword" placeholder="Confirma tu contraseña">
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" 
        class="btn fw-bold text-white border-0" 
        style="background-color: red; box-shadow: none; outline: none;"
        onmouseover="this.style.backgroundColor='#c10000'" 
        onmouseout="this.style.backgroundColor='red'" 
        data-bs-dismiss="modal">
  Cancelar
</button>

<button type="submit" 
        class="btn fw-bold text-white border-0 " 
        style="background-color: orange; box-shadow: none; outline: none;"
        onmouseover="this.style.backgroundColor='#e69500'" 
        onmouseout="this.style.backgroundColor='orange'">
  Guardar Cambios
</button>

            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- Script para mostrar/ocultar campos -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleBtn = document.getElementById('togglePasswordFields');
      const passwordSection = document.getElementById('passwordFields');

      toggleBtn.addEventListener('click', function () {
        const visible = passwordSection.style.display === 'block';
        passwordSection.style.display = visible ? 'none' : 'block';
        toggleBtn.textContent = visible ? 'Cambiar contraseña' : 'Cancelar cambio de contraseña';
      });
    });
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



@if (session('message'))
<script>
Swal.fire({
  icon: 'success',
  title: '¡Éxito!',
  text: '{{ session('message') }}',
  customClass: {
    confirmButton: 'bg-blue text-white'
  }
});
</script>
@endif

@if (session('error'))
<script>
Swal.fire({
  icon: 'error',
  title: '¡Error!',
  text: '{{ session('error') }}',
  customClass: {
    confirmButton: 'bg-blue text-white'
  }
});
</script>
@endif



</body>
</html>

