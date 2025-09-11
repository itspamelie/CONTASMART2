@extends('layouts.main')

@section('css')
 <!-- Swiper CSS -->
 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      overflow-x: hidden;
      color: #000;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .container {
    width: 90%;
    padding: 10px 40px;
    flex-grow: 1;
  }

  .swiper-container {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    position: relative;
    font-size: 18px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 4px 4px rgba(196, 196, 196, 0.25);
    padding: 1rem;
  }

  .card-title,
  .card-text {
    margin-bottom: .5rem;
  }

  .card-title h4 {
    text-align: center;
  }

  .card-text p {
    text-align: center;
  }

  .video-frame {
    width: 100%;
    aspect-ratio: 16/9;
    border: none;
    border-radius: 10px;
    margin-bottom: 10px;
  }

  .swiper-button-next {
    right: 26px !important;
  }

  .swiper-button-prev {
    left: 26px !important;
  }

  footer {
    background-color: #343a40;
    color: white;
    text-align: center;
    padding: 15px 0;
  }

  </style>
  @endsection

  @section('contenido')

  <div class="container mt-3 d-flex align-items-center" style="padding-top: 100px;">
  <!-- Tu contenido -->

  <h4 class="">Video tutoriales simples y prácticos para que desarrolles tus habilidades contables.</h5>
</div>


  <div class="container mb-5">
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide" style="background-color:rgb(13, 177, 253); color: white;">
          <div class="card-title">
            <h4 class="fw-bold">¿Qué es una nómina?</h4>
          </div>
          <iframe class="video-frame" src="https://www.youtube.com/embed/_RnAzn_EJS4" title="Video 1" allowfullscreen></iframe>
          <div class="card-text">
            <p class="fw-bold">Introducción al concepto de nómina y su importancia en el entorno laboral.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide" style="background-color:rgb(13, 177, 253); color: white;">
          <div class="card-title ">
            <h4 class="fw-bold text-white">Elementos de la nómina</h4>
          </div>
          <iframe class="video-frame" src="https://www.youtube.com/embed/ugxCocs75zE" title="Video 2" allowfullscreen></iframe>
          <div class="card-text">
            <p class="fw-bold">Aprende qué contiene una nómina: percepciones, deducciones y sueldo neto.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide" style="background-color:rgb(13, 177, 253); color: white;">
          <div class="card-title">
            <h4 class="fw-bold">Tipos de nómina</h4>
          </div>
          <iframe class="video-frame" src="https://www.youtube.com/embed/pbqlZVPFksI" title="Video 3" allowfullscreen></iframe>
          <div class="card-text">
            <p class="fw-bold">Explora las diferentes formas de nómina según el tipo de contrato y frecuencia de pago.</p>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide" style="background-color:rgb(13, 177, 253); color: white;">
          <div class="card-title">
            <h4 class="fw-bold">Uso del software</h4>
          </div>
          <iframe class="video-frame" src="https://www.youtube.com/embed/w0QFCjmMXFs" title="Video 4" allowfullscreen></iframe>
          <div class="card-text">
            <p class="fw-bold">Tutorial sobre cómo gestionar nóminas desde un software especializado.</p>
          </div>
        </div>

      </div>
    </div>
  </div>

  @endsection

  @section('script')
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

@endsection