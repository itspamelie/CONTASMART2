@extends('layouts.main')
@section('contenido')

<!--IMAGEN PRINCIPAL-->
<div class="position-relative mt-5 d-flex justify-content-center">
    <img src="{{ asset('img/background.webp')}}" class="img-fluid mt-4 slide-in" style="height:600px;" alt="Fondo">
    <div class="overlay"></div>
    <div class="content">
        <h2 class="text-white fw-bold">Aprende a Calcular Nóminas</h2>
        <p class="text-white">El aprendizaje nunca fue tan sencillo</p>
        <a href="/login" class="btn btn-custom fw-bold">Empezar</a>
    </div>
</div>

<!--ESLOGAN-->
<div class="container d-flex flex-wrap justify-content-center align-items-center">
<h4 class="fw-bold">CONOCIMIENTO CONTABLE AL ALCANCE DE UN CLICK</h4>
</div>


<!--CONTENEDOR>>>>>BENEFICIOS-->
<div class="container d-flex flex-wrap px-1 justify-content-between mt-4" style="height:800px;">
<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center text-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/calculadoraicon.png" alt="" style="height:200px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">CALCULA</h3>
    <p class="text-center">Procesa automáticamente los salarios, deducciones e impuestos para generar nóminas precisas.</p>
</div>

<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/basculaicon.png" alt="" style="height:200px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">APRENDE</h3>
    <p class="text-center">Accede a guías y recursos para entender mejor la gestión de nóminas y normativas laborales.</p>
</div>

<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/documenticon.png" alt="" style="height:200px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">SIMULA</h3>
    <p class="text-center">Realiza cálculos hipotéticos de salarios y deducciones antes de aplicarlos oficialmente.</p>
</div>

<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/brainicon.png" alt="" style="height:200px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">EXPERIMENTA</h3>
    <p class="text-center">Prueba diferentes configuraciones de nómina en tus prácticas sin afectar los datos reales.</p>
</div>

<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/estadisticasicon.png" alt="" style="height:200px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">ANALIZA</h3>
    <p class="text-center">Obtén reportes detallados sobre costos laborales, impuestos y tendencias salariales.</p>
</div>

<div class="col-4 px-5">
    <div class="bg-blue d-flex justify-content-center align-items-center info-card" style="height:65%; width:100%;">
        <img src="/img/validaricon.png" alt="" style="height:150px;">
    </div>
    <h3 class="mt-2 fw-bold text-center">VALIDA</h3>
    <p class="text-center">Revisa y confirma que los cálculos cumplan con las regulaciones y políticas.</p>
</div>

<!--TERMINA CONTENEDOR-->
</div>

<!-- OPCIONES SOFTWARE -->
<div class="d-flex text-center mt-4 flex-column justify-content-center align-items-center bg-blue-light" style="height:400px;">
    <h4 class="fw-bold mt-5 text-white">EXPLORA TODAS NUESTRAS HERRAMIENTAS</h4>

<div class="container d-flex justify-content-center mt-1">
  <iframe src="/carrusel.html" style="border: none; width: 100%; max-width: 800px; height: 350px;" loading="lazy"></iframe>
</div>




</div>


<div class="d-flex text-center flex-column align-items-center" style="height:400px;">
    <h4 class="fw-bold mt-5">TERMINOLOGÍA CONTABLE</h4>
    <p class="text-center">Cálculos que aprenderás a realizar.</p>

<div class="container d-flex flex-wrap">
<div class="col-4 d-flex justify-content-flex-start py-3 align-items-center">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<h5 class="px-3 text-left fs-6">Sueldos e impuestos: SM,UMA,UMI.</h5>
</div>

<div class="col-4 d-flex justify-content-flex-start py-3  align-items-center">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<p class="px-3">Costos relacionados con IMSS.</p>
</div>

<div class="col-4 d-flex justify-content-flex-start py-3  align-items-center ">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<p class="px-3">Antigüedad y prima vacacional.</p>
</div>

<div class="col-4 d-flex justify-content-flex-start py-3 align-items-center ">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<p class="px-3">Costos relacionados con Aguinaldo.</p>
</div>

<div class="col-4 d-flex justify-content-flex-start py-3  align-items-center ">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<p class="px-3">Costos relacionados con INFONAVIT.</p>
</div>

<div class="col-4 d-flex justify-content-flex-start py-3  align-items-center">
<img src="/img/checkboxicon.png" alt="" style="width:40px; height:40px;">
<p class="px-3">Cálculo de ISR y SDI</p>
</div>
</div>


    <a href="/herramientas" class="mt-3 btn btn-custom fw-bold">Ver más</a>


</div>
@endsection

@section('script')
@endsection