<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
  <!-- Fuente Google -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Contenedor principal -->
   
  <div class="container-fluid">
    <div class="row h-100">

      <!-- Columna derecha: Imagen -->
       
      <div class="col-md-6 d-none d-md-flex bg-white justify-content-center align-items-center p-5">
        <img src="{{ asset('img/fotoregistro.webp') }}" alt="Imagen de registro" class="img-fluid">
      </div>

      <!-- Columna izquierda: Formulario -->
      <div class="col-md-6 col-12 bg-white text-white p-0 vh-100  justify-content-center">
        <div class="bg-info px-5 py-4">
          <div class="container d-flex   align-items-start">
          <a href="/" class="ms-3 btn bg-orange fw-bold  me-5">Regresar</a>        <h2 class="text-center  fw-bold">Regístrate</h2>
          </div>

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre y Apellido -->
            <div class="mb-3">
              <div class="d-flex gap-2 flex-column flex-md-row">
                <div class="w-100">
                  <label for="inputNombre" class="form-label fw-bold">Nombre</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputNombre" name="name" placeholder="Nombre" required autocomplete="given-name">
                 
                  @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                
                </div>
                <div class="w-100">
                  <label for="inputApellido" class="form-label fw-bold">Apellido</label>
                  <input type="text" class="form-control" id="inputApellido" name="lastname" placeholder="Apellido" required autocomplete="family-name">
                </div>
              </div>
            </div>

            <!-- Semestre y Grupo -->
            <div class="mb-3">
              <div class="d-flex gap-2 flex-column flex-md-row">
                <div class="w-100">
                  <label for="selectSemestre" class="form-label fw-bold">Semestre</label>
                  <select class="form-select" id="selectSemestre" name="semester" required>
                    <option selected disabled value="">Selecciona tu semestre</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                  </select>

                </div>
                <div class="w-100">
                  <label for="selectGrupo" class="form-label fw-bold">Grupo</label>
                  <select class="form-select" id="selectGrupo" name="group" required>
                    <option selected disabled value="">Selecciona tu grupo</option>
                    <option value="A">Grupo A</option>
                    <option value="B">Grupo B</option>
                  </select>
                  
                </div>
              </div>
            </div>

            <!-- Correo -->
            <div class="mb-3">
              <label for="inputEmail" class="form-label fw-bold">Correo electrónico</label>
              <input type="email" class="form-control" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa tu correo" required autocomplete="email">
              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
              <label for="inputPassword" class="form-label fw-bold">Contraseña</label>
              <input type="password"  id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Ingresa tu contraseña" required autocomplete="new-password">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <!-- Confirmar contraseña -->
            <div class="mb-3">
              <label for="inputConfirmPassword" class="form-label fw-bold">Confirma tu contraseña</label>
              <input type="password" class="form-control" id="inputConfirmPassword" name="password_confirmation" placeholder="Confirma tu contraseña" required autocomplete="new-password">
            </div>

            <!-- Botón de registro -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn w-100 fw-bold bg-orange">Registrarse</button>
            </div>

            <!-- Enlace a inicio de sesión -->
            <div class="d-flex justify-content-center mt-3 fw-bold">
              <p>¿Ya tienes una cuenta? <a href="/login" class="text-orange" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Inicia sesión</a></p> 
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

  

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

