@extends('layouts.mainnomina')

@section('contenido')
<div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">
  <h2 class="fw-semibold">Datos Iniciales</h2>
<p>Genera la nómina de cada uno de los empleados.</p>
  @if($nominas->isEmpty())
<form action="/updateyear" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $practica->id}}">
    
    <label for="miCombo" class="form-label">Selecciona el año en el que quieres calcular tu nómina.</label>
    <select id="miCombo" class="form-select" name="year">
        <option disabled>Selecciona un año</option>
        @foreach ($years as $id => $year)
            <option value="{{ $year }}" {{ $practica->year_id == $id ? 'selected' : '' }}>
                {{ $year }}
            </option>
        @endforeach
    </select>

    <div class="d-flex justify-content-end px-1 mt-3">
        <button type="submit" class="btn btn-custom">Editar año</button>
    </div>
</form>
@endif

  <h2 class="fw-semibold">Agregar empleado a la nómina</h2>
  <p>De acuerdo al año en el que simulas tu nómina <b>({{$year_practica->year}})</b>, es importante tomar en cuenta los siguientes datos:</b></p>
<!--TABLA CON DATOS INICIALES-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Año</th>
      <th scope="col">Salario mínimo</th>
      <th scope="col">UMI</th>
      <th scope="col">UMA</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$year_practica->year}}</th>
      <td>{{$year_practica->sm}}</td>
      <td>{{$year_practica->umi}}</td>
      <td>{{$year_practica->uma}}</td>
    </tr>
  </tbody>
</table>

  <!-- Cantidad de empleados -->
  <label for="numero" class="form-label mt-3">Ingresa la cantidad de empleados (1-30):</label>
  <input type="number" id="numero" class="form-control" min="1" max="30" value="1">

<!-- form de los empleados-->
  <form action="/addnomina" method="POST">
  @csrf
  <!-- Tabla de empleados -->
   
   <input type="hidden" name="id_practica" value="{{ $practica->id }}"> <!-- asi se jala la practica-->
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del empleado</th>
        <th scope="col">Salario Diario</th>
        <th scope="col">Antiguedad (años)</th>
        <th scope="col">Tipo de sueldo</th>

      </tr>
    </thead>
    <tbody id="tabla-empleados">
      <!-- Filas generadas dinámicamente -->
    </tbody>
  </table>

  <!-- Botón -->
  <div class="d-flex justify-content-end px-1 mt-3">
    <button type="submit" class="btn btn-custom">Validar Datos</button>
  </div>
  </form>
   <h2 class="fw-semibold">Empleados activos en la nómina</h2>

   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre del Empleado</th>
      <th scope="col">Salario Diario</th>
      <th scope="col">Antiguedad</th>
      <th scope="col">Tipo de Sueldo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @if ($nominas->isNotEmpty())
    @foreach($nominas as $n)
    <tr>
      <th scope="row">{{$n->id}}</th>
      <td>{{$n->name}}</td>
      <td>{{$n->salario}}</td>
      <td>{{$n->antiguedad}}</td>
      <td>@switch($n->tipo_sueldo)
        @case(1)
            Semanal
            @break
        @case(2)
            Quincenal
            @break
        @case(3)
            Mensual
            @break
    @endswitch</td>
    <td>
      <form action="/dropnomina" method="POST" class="form-eliminar" style="display: inline;">
        @csrf
            <input type="hidden" name="id" value="{{ $n->id }}">
            <input type="hidden" name="id_practica" value="{{ $practica->id }}"> 
      <button class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg></button>
</form>

<button type="button" class="btn btn-warning"   data-bs-toggle="modal" 
    data-bs-target="#update"  data-id="{{$n->id}}"  data-name="{{$n->name}}" data-salario="{{$n->salario}}" data-tiposueldo="{{$n->tipo_sueldo}}" data-antiguedad="{{$n->antiguedad}}">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
</button>
</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
</div>




<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Empleado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/updatenomina" method="POST">
          @csrf
       <input type="hidden" name="id" id="editarId">

        <div class="mb-3">
            <label for="editarNombre" class="form-label">Nombre del Empleado</label>
            <input type="text" class="form-control" id="editarNombre" name="name">
          </div>
    
       <div class="mb-3">
            <label for="editarSalario" class="form-label">Salario del Empleado</label>
            <input type="number"  min="{{$year_practica->sm}}" class="form-control" id="editarSalario" name="salario">
          </div>
    

      <div class="mb-3">
            <label for="editarAntiguedad" class="form-label">Antiguedad del Empleado</label>
            <input type="number" class="form-control" id="editarAntiguedad" name="antiguedad">
          </div>

      <div class="mb-3">
            <label for="editarTiposueldo" class="form-label">Tipo de sueldo del Empleado</label>
            <select class="form-select" name="tipo_sueldo" id="editarTiposueldo" required>
                <option value="1">Semanal</option>
                <option value="2">Quincenal</option>
                <option value="3">Mensual</option>
            </select></td>
          </div>

      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning">Guardar Cambios</button>
      </div>
              </form>

    </div>
  </div>
</div>

@endsection
@section('script')
<script>
document.addEventListener('DOMContentLoaded', function () {
  var modalEditar = document.getElementById('update');
  modalEditar.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var name = button.getAttribute('data-name');
    var salario = button.getAttribute('data-salario');
    var antiguedad = button.getAttribute('data-antiguedad');
    var tiposueldo = button.getAttribute('data-tiposueldo');

    // Asignar los valores al formulario
    document.getElementById('editarId').value = id;
    document.getElementById('editarNombre').value = name;
    document.getElementById('editarSalario').value = salario;
    document.getElementById('editarAntiguedad').value = antiguedad;
    document.getElementById('editarTiposueldo').value = tiposueldo;

  });
});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const inputNumero = document.getElementById("numero");
    const tbody = document.getElementById("tabla-empleados");

    function generarFilas(cantidad) {
      tbody.innerHTML = '';

      for (let i = 1; i <= cantidad; i++) {
        const fila = document.createElement("tr");

        fila.innerHTML = `
          <th scope="row">${i}</th>
          <td><input type="text" class="form-control" name="empleados[${i}][nombre]" required></td>
          <td><input type="number" 
                min="{{$year_practica->sm}}" 
                step="0.01" class="form-control" name="empleados[${i}][salario]" required></td>
          <td><input type="number" class="form-control" min="1" max="60" name="empleados[${i}][antiguedad]" required></td>
      <td> <select class="form-select" name="empleados[${i}][tipo_sueldo]" required>
                <option value="1">Semanal</option>
                <option value="2">Quincenal</option>
                <option value="3">Mensual</option>
            </select></td>
        `;

        tbody.appendChild(fila);
      }
    }

    inputNumero.addEventListener("input", function () {
      let cantidad = parseInt(inputNumero.value);
      if (!isNaN(cantidad) && cantidad >= 1 && cantidad <= 30) {
        generarFilas(cantidad);
      }
    });

    // Generar fila inicial por defecto
    generarFilas(1);
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
@endif

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.form-eliminar');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Previene el envío inmediato

            Swal.fire({
                title: '¿Estás seguro de eliminar al empleado?',
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
