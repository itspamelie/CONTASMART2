@extends('layouts.main')
@section('contenido')
<div id="carouselExampleCaptions" class="carousel slide">
  
    <div class="carousel-inner ">
    <div class="carousel-item active slide-in">
    <img src="{{ asset('img/fondointroduccion2.webp') }}" class="d-block w-100 vh-100" alt="...">
    
    <!-- Overlay oscuro -->
    <div class="position-absolute top-0 start-0 w-100 h-100 mt-5" style="background-color: rgba(0, 0, 0, 0.6);">
        
      <!-- Contenido centrado -->
      <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100 slide-in">
        
        <!-- Imagen centrada y más chica -->
        <img src="{{ asset('img/iconnomina1.webp') }}" class="img-fluid mb-3" style="max-width: 200px;" alt="Ícono de nómina">
        <h1 class="fw-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">¿Qué son las nóminas?</h1>
        <p>Un poco de información</p>
      </div>

    </div>
  </div>
</div>

<div id="carouselExampleCaptions" class="carousel slide">


  
<!--Sección de dos-->
    
  <div class="d-flex  active w-100 bg-white align-items-center justify-content-center" style="height: 75vh;">

  <div class="container d-flex flex-column w-25 h-50 bg-white align-items-center justify-content-center p-0 ">
  <img src="{{ asset('img/iconnominaIntroduccion.webp') }}" class="img-fluid mb-3" style="max-width: 200px;" alt="Ícono de nómina">
  <h3 class="fw-bold">Las nominas son...</h3>
  </div>
  <div class="container w-50 h-50 bg-white p-0 d-flex align-items-center justify-content-center ">
    <h5 class="" style="line-height: 1.5; text-align: justify;">Fundamentales para cualquier empresa. No solo representan el pago que reciben los trabajadores, 
      sino que también garantizan el cumplimiento legal, el control administrativo y la transparencia entre empleador y empleado. 
      Conocer cómo funciona una nómina es clave para una buena gestión laboral y financiera.</h5>
  </div>

 
    </div>
  </div>
<!--Sección de tres-->
<div id="carouselExampleCaptions" class="carousel slide">
  
    <div class="carousel-inner">
  <div class="d-flex carousel-item active d-block w-100 vh-100 bg-white align-items-center justify-content-center">

  <div class="d-flex flex-column info-card container w-25 h-75 bg-orange rounded-3 align-items-center justify-content-center ">
  <img src="{{ asset('img/icon3.webp') }}" class="img-fluid mb-3" style="max-width: 200px;" alt="Ícono de nómina">
  <h4 class="fw-bold text-white" style="text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5)">¿Qué contiene una nómina?</h4>
  <p class= "p-2 text-white "style="text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5)">La nómina muestra los datos del empleado, su sueldo bruto, percepciones, deducciones y el sueldo neto a pagar.</p>
  </div>

  <div class="container d-flex flex-column info-card w-25 h-75 bg-orange rounded-3 align-items-center justify-content-center" style="background-color: #0dcaf0;" >
  <img src="{{ asset('img/icon4.webp') }}" class="img-fluid mb-3" style="max-width: 200px;" alt="Ícono de nómina">
  <h4 class="fw-bold text-white " style="text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5)">Importancia de la nómina</h4>
  <p class ="text-white"style="text-align: center;  text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">La nómina asegura un pago justo y cumple con obligaciones fiscales y de control interno.</p>
  </div>
  <div class="bg-orange container d-flex info-card flex-column w-25 h-75 rounded-3 align-items-center justify-content-center">
  <img src="{{ asset('img/icon5.webp') }}" class="img-fluid mb-3" style="max-width: 200px;" alt="Ícono de nómina">
  <h4 class="fw-bold text-white" style="text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Tipos de nómina</h4>
  <p class= "text-white"style="text-align: center; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);" >Las nóminas pueden ser semanales, quincenales, mensuales o por pagos especiales, según el tipo de trabajo.</p>
  </div>
 
    </div>
  </div>
</div>
<!--Sección de tres-->

    
    
  </div>
</div>
@endsection

@section('script')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection