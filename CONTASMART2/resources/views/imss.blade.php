@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo IMSS</h2>

 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SDI</th>
      <th scope="col">Cuota fija</th>
      <th scope="col">Salario mayor a 3SMGDF</th>
      <th scope="col">Total IMSS diario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td>{{ number_format(($n->salario * $antique->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>
      <td>{{ (number_format(($n->salario * $antique->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario)*0.02375 }}</td>
      <td>Pendiente</td>
      <td>{{ (number_format(($n->salario * $antique->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario)*0.02375 }}</td>
    </tr>
  @endforeach
  </tbody>
</table>




</div>
</div>
@endsection
  @section('script')

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