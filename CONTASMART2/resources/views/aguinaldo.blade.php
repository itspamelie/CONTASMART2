@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo Aguinaldo</h2>

 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SD</th>
      <th scope="col">Dias Trabajados</th>
      <th scope="col">Dias de Aguinaldo</th>
      <th scope="col">Aguinaldo Total</th>
      <th scope="col">Dias de vacaciones</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Prima Vacacional</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
     @foreach($nominas as $n)

      <td>{{$n->name}}</td>
      <td>{{$n->salario}}</td>
      <td>365</td>
      <td>15</td>
      <td>{{$n->salario*15}}</td>
      <td> @php
$antiqueLocal = \App\Models\Antique::find($n->antiguedad + 1);
@endphp  
      {{  $antiqueLocal->dias_vacaciones }}</td>
      <td>{{$n->salario*$antiqueLocal->dias_vacaciones}}</td>
      <td>{{($n->salario*$antiqueLocal->dias_vacaciones)*.25}}</td>

    </tr>
    @endforeach
  </tbody>
</table>



</div>
</div>
@endsection
  @section('script')
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
@endif

</script>

@endsection