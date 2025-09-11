<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

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

      <!-- Columna izquierda: Formulario de Login -->
      <div class="col-md-6 text-white p-0 vh-100 overflow-hidden" style="background-color: #0dcaf0;">
        <div class="bg-info px-5 py-5">
          <a href="/" class="ms-3 btn bg-orange fw-bold">Regresar</a>
          <h2 class="text-center mt-5 fw-bold">Iniciar Sesión</h2>

          <form method="POST" action="{{ route('login') }}" class="p-3">
                        @csrf
            <div class="mb-3">
              <label for="inputEmail" class="form-label fw-bold">Correo</label>
              <input placeholder="Ingresa tu correo electrónico" type="email" 
              name="email"
                    class="form-control" id="inputEmail" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="mb-3">
              <label for="inputPassword" class="form-label fw-bold">Contraseña</label>
              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="inputPassword" 
              name="password"
              placeholder="Ingresa tu contraseña" required autocomplete="current-password">
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

            <div class="mb-3">
              <a href="#" class="text-white fw-bold">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn text-dark w-100 fw-bold bg-orange" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">Ingresar</button>
            </div>

            <div class="d-flex justify-content-center mt-3 fw-bold">
              <p>¿Eres nuevo? <a href="/register" class="text-orange border-dark">Regístrate</a></p>
            </div>

          </form>
        </div>
      </div>

      <!-- Columna derecha: Imagen -->
      <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center bg-white p-5">
        <img src="{{ asset('img/fotologin.webp') }}" alt="Imagen de login" class="img-fluid">
      </div>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
