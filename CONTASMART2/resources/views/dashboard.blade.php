@extends('layouts.maindashboard')

@section('contenido')

  <div class="d-flex justify-content-between px-4 text-white">
    <h3 class="text-black">Mis proyectos</h3>
    <button type="button" 
            class="btn fw-bold text-white border-0" 
            data-bs-toggle="modal" 
            data-bs-target="#miModal"
            style="background-color: orange; box-shadow: none; outline: none;"
            onmouseover="this.style.backgroundColor='#e69500'" 
            onmouseout="this.style.backgroundColor='orange'">
      Agregar proyecto
    </button>
  </div>

  <div class="container">
  </div>

  <!-- Modal btn -->
  <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="miModalLabel">Agregar Proyecto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body">
           <form action="/saveproyect" method="POST">
              @csrf
            <div class="mb-3">
              <label for="nombreProyecto" class="form-label">Nombre del proyecto</label>
              <input type="text" class="form-control" id="nombreProyecto" placeholder="Nombre del proyecto" name="title">
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
                  </form>


      </div>
    </div>
  </div>

  <div class="container mt-5">

    <div class="row g-3">

    <!--ITERAR PARA IMPRIMIR VARIAS VECES LOS DATOS-->
@if(!empty($practices))
 @foreach($practices as $p)

      <div class="col-md-6 col-lg-4">
        <div class="card h-100">
          <div class="card-body d-column">
            <h5 class="card-title mb-3">{{$p->titulo}}</h5>
            <div class="d-flex justify-content-between">

             <a href="{{ url('/datosiniciales/' . $p->id) }}"
   class="btn bg-blue text-white flex-fill me-1 border-0"
   onmouseover="this.style.backgroundColor='#0056b3'"
   onmouseout="this.style.backgroundColor='#007bff'">
    <svg xmlns="http://www.w3.org/2000/svg" 
         width="16" height="16" 
         fill="currentColor" 
         class="bi bi-eye-fill" 
         viewBox="0 0 16 16">
      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 
               3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
    </svg>
</a>


     <a href="#"
   class="btn flex-fill mx-1 text-white border-0"
   style="background-color: orange;"
   data-bs-toggle="modal"
   data-bs-target="#modalEditar"
   data-id="{{$p->id}}"
   data-title="{{$p->titulo}}"
   onmouseover="this.style.backgroundColor='#e69500'"
   onmouseout="this.style.backgroundColor='orange'">
  <svg xmlns="http://www.w3.org/2000/svg" 
       width="16" height="16" 
       fill="currentColor" 
       class="bi bi-pencil-fill" 
       viewBox="0 0 16 16">
    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 
             14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061
             L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1
             .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 
             7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 
             0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 
             1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 
             5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
  </svg>
</a>

<form action="/deleteproyect" method="POST" class="form-eliminar" style="display: inline;">
    @csrf
    <input type="hidden" name="id" value="{{ $p->id }}">
    <button type="submit" class="btn btn-danger flex-fill ms-1 text-white">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="16" height="16"
             fill="currentColor"
             class="bi bi-trash-fill"
             viewBox="0 0 16 16">
          <path d="M2.5 1a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1H15a.5.5 0 0 1 0 1h-1v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2H1a.5.5 0 0 1 0-1h1.5zm3 3a.5.5 0 0 0-1 0v9a.5.5 0 0 0 1 0V4zm3 0a.5.5 0 0 0-1 0v9a.5.5 0 0 0 1 0V4zm3 0a.5.5 0 0 0-1 0v9a.5.5 0 0 0 1 0V4z"/>
        </svg>
    </button>
</form>



            </div>
            <p class="mt-3" style="opacity: 0.6;">Creado el: {{$p->created_at}}</p>
          </div>
        </div>
      </div>


    @endforeach
    @endif
    </div>
  </div>

  <!-- Modal Editar Proyecto -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Editar Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body">
        <form action="/updateproyect" method="POST">
          @csrf
          <!-- Campo oculto para el ID -->
          <input type="hidden" name="id" id="editarIdProyecto">

          <div class="mb-3">
            <label for="editarNombreProyecto" class="form-label">Nombre del proyecto</label>
            <input type="text" class="form-control" id="editarNombreProyecto" name="title">
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn text-white fw-bold" data-bs-dismiss="modal" style="background-color: red; box-shadow: none; outline: none;"
        onmouseover="this.style.backgroundColor='#c10000'" 
        onmouseout="this.style.backgroundColor='red'" >Cancelar</button>
        <button type="submit" class="btn text-white fw-bold" style="background-color: orange; box-shadow: none; outline: none;"
        onmouseover="this.style.backgroundColor='#e69500'" 
        onmouseout="this.style.backgroundColor='orange'">Guardar Cambios</button>
      </div>
        </form>

    </div>
  </div>
</div>



@endsection
@section('script')
<script>
document.addEventListener('DOMContentLoaded', function () {
  var modalEditar = document.getElementById('modalEditar');
  modalEditar.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var title = button.getAttribute('data-title');

    // Asignar los valores al formulario
    document.getElementById('editarIdProyecto').value = id;
    document.getElementById('editarNombreProyecto').value = title;
    console.log("ID:", id);
console.log("Título:", title);

  });
});
</script>

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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.form-eliminar');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Previene el envío inmediato

            Swal.fire({
                title: '¿Estás seguro de eliminar tu proyecto?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Ahora sí enviamos el formulario
                }
            });
        });
    });
});
</script>

@endsection