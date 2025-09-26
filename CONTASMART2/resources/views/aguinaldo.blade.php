@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo Aguinaldo</h2>
  
        <div class="select">
  <select
    id="options"
    class="form-control"
  >
    <option value="1">
      Aguinaldo 1
  </option>
    <option value="2">
      Aguinaldo 2
    </option>
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SD</th>
      <th scope="col">Dias Trabajados</th>
      <th scope="col">Dias de Aguinaldo</th>
      <th scope="col">Aguinaldo Total</th>
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
  
    </tr>
    @endforeach
  </tbody>
</table>



<table class="table" id="tabla2" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Dias de vacaciones</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Prima Vacacional</th>

    </tr>
  </thead>
  <tbody>
             @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td>{{$antique->dias_vacaciones}}</td>
      <td>{{$n->salario*$antique->dias_vacaciones}}</td>
      <td>{{($n->salario*$antique->dias_vacaciones)*.25}}</td>

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