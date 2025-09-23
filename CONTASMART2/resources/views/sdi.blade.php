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
      Datos generales
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
      <td>{{$n->name}}</td>
      <td>{{ now()->format('d-m-Y') }}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
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
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
  
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
@endsection 