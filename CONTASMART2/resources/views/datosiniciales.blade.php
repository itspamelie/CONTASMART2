@extends('layouts.mainnomina')

@section('contenido')
<div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">
  <h2 class="fw-semibold">Datos Iniciales</h2>

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

  <h2 class="fw-semibold">Agregar empleado a la nómina</h2>
  <p>De acuerdo al año en el que simulas tu nómina <b>({{$year_practica->year}})</b>, el salario diario debe ser de al menos:  <b>{{$year_practica->sm}}</b></p>

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
</div>
</form>
@endsection

@section('script')
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
</script>
@endif

@endsection
