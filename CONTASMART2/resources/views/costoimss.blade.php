@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo Costo IMSS</h2>
 

        <div class="select">
  <select
    id="options"
    class="form-control"
  >
    <option value="1">
      Costo IMSS 1
  </option>
    <option value="2">
      Costo IMSS 2
    </option>
    <option value="3">
      Costo IMSS 3
    </option>
     <option value="4">
      Costo IMSS 4
    </option>
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SDI</th>
      <th scope="col">Dias</th>
      <th scope="col">Cuota fija</th>
      <th scope="col">Excedente</th>
      <th scope="col">Prestaciones</th>
      <th scope="col">Gastos médicos</th>
      <th scope="col">Riesgo de trabajo</th>
      <th scope="col">Invalidez y vida</th>
      <th scope="col">Guarderías y prestaciones</th>
      <th scope="col">Total patronal</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
     @foreach($nominas as $n)

      <td>{{$n->name}}</td>
      <td>{{ number_format(($n->salario * $antique->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>
      <td>31</td>
      <td>{{$year_practica->uma*31*.2040}}</td>
      <td>0</td>
      <td></td>
      <td></td>
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
      <th scope="col">Excedente</th>
      <th scope="col">Prestaciones en dinero</th>
      <th scope="col">Gastos médicos</th>
      <th scope="col">Invalidez y vida</th>
      <th scope="col">Total Obrero </th>
      <th scope="col">Total mensual</th>

    </tr>
  </thead>
  <tbody>
             @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td></td>
      <td></td>
      <td> </td>
      <td></td>
      <td></td>
      <td></td>
      

    </tr>
  @endforeach
  </tbody>
</table>



<table class="table" id="tabla3" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Días</th>
      <th scope="col">Cesantía y vejez trabajador</th>
      <th scope="col">Retiro</th>
      <th scope="col">Cesantía y Vejez</th>
      <th scope="col">Subtotal RCV patronal</th>
      <th scope="col">Total RCV</th>

    </tr>
  </thead>
  <tbody>
    @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
  @endforeach
  </tbody>
</table>


<table class="table" id="tabla4" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Infonavit Patron</th>
      <th scope="col">Infonavit Trabajador</th>
      <th scope="col">Total Infonavit</th>
      <th scope="col">Total Bimestral</th>
    </tr>
  </thead>
  <tbody>
        @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

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
    document.querySelector("#tabla3").style.display='none'
    document.querySelector("#tabla4").style.display='none'


    } else if(id==2) {
    document.querySelector("#tabla1").style.display='none'
    document.querySelector("#tabla3").style.display='none'
    document.querySelector("#tabla4").style.display='none'


    } else if(id==3) {
    document.querySelector("#tabla1").style.display='none'
    document.querySelector("#tabla2").style.display='none'
    document.querySelector("#tabla4").style.display='none'


    } else{
    document.querySelector("#tabla1").style.display='none'
    document.querySelector("#tabla2").style.display='none'
    document.querySelector("#tabla3").style.display='none'

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