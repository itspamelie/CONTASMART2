@extends('layouts.mainnomina')

@section('contenido')
<div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">
  <h2 class="fw-semibold">Cálculo ISR</h2>

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
