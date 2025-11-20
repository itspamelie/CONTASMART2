@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo SDI</h2>


        <div class="select">
  <select
    id="options"
    class="form-control"
  >
    <option value="1">
      SDI 1
  </option>
    <option value="2">
      SDI 2
    </option>
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de ingreso</th>
      <th scope="col">Fecha actual</th>
      <th scope="col">Años promedio</th>
      <th scope="col">Años completos</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Sueldo diario</th>
    </tr>
  </thead>
  <tbody>
    @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td>01/01/{{$anioEntero-$n->antiguedad}}</td>
      <td>{{ now()->format('d-m-Y') }}</td>
      <td>{{$n->antiguedad}}</td>
      <td>{{$n->antiguedad+1}}</td>
      <td>@php
$antiqueLocal = \App\Models\Antique::find($n->antiguedad + 1);
@endphp
{{ $antiqueLocal ? $antiqueLocal->dias_vacaciones : '-' }}</td>
      <td>{{$n->salario}}</td>
    </tr>
  @endforeach
  </tbody>
</table>



<table class="table" id="tabla2" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Prima vacacional</th>
      <th scope="col">Aguinaldo</th>
      <th scope="col">SBC</th>
      <th scope="col">Prima dominical 1UMA</th>
      <th scope="col">SDI</th>
      <th scope="col">Factor</th>
    </tr>
  </thead>
  <tbody>
        @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td>
      @php
$antiqueLocal = \App\Models\Antique::find($n->antiguedad + 1);
@endphp  
      {{ number_format(($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365, 2) }}</td>
      <td>{{ number_format(($n->salario * 15) / 365, 2) }}</td>
      <td>{{ number_format(($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>
      <td class="text-center">0/{{$year_practica->uma}}/0</td>
      <td>{{ number_format(($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>
<td>{{ round(((($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365) + (($n->salario * 15) / 365) + $n->salario) / $n->salario, 4) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>



</div>
</div>
@endsection
  @section('script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelector('#options').addEventListener('change',function(){
    var id=document.querySelector('#options').value
    document.querySelector("#tabla"+id).style.display='block'
    console.log(id)
    if(id==1){
    document.querySelector("#tabla2").style.display='none'


    } else if(id==2) {
    document.querySelector("#tabla1").style.display='none'

    }





  })

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

@endsection 