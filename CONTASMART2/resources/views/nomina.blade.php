@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Nomina Principal</h2>
       <p>Aquí puedes observar tu nómina y generar el reporte</p>


        <div class="select">
  <select
    id="options"
    class="form-control"
  >
    <option value="1">
      Datos generales
  </option>
    <option value="2">
      Datos de asistencia
    </option>
    <option value="3">
      ISR, IMSS, INFONAVIT Y deducciones
    </option>
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de Sueldo</th>
      <th scope="col">Neto</th>
      <th scope="col">Factor</th>
      <th scope="col">SD</th>
      <th scope="col">SDI</th>
      <th scope="col">Dias</th>
      <th scope="col">Ultimo dia</th>
      <th scope="col">Sueldo Total</th>
      <th scope="col">Sueldo ult. dia</th>
      <th scope="col">Aguinaldo</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Prima vacacional</th>

    </tr>
  </thead>
  <tbody>
    @foreach($rosters as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td>
    @switch($n->tipo_sueldo)
        @case(1)
            Semanal
            @break
        @case(2)
            Quincenal
            @break
        @case(3)
            Mensual
            @break
        @default
            No definido
    @endswitch
</td>

      <td></td>
<td>{{ $n->factor_antiguedad }}</td>
      <td>{{$n->salario}}</td>
      <td></td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
           6
            @break
        @case(2)
           14
            @break
        @case(3)
            29
            @break
        @default
            No definido
    @endswitch</td>
      <td>1</td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
           {{ $n->salario*7}}
            @break
        @case(2)
           {{$n->salario*15}} 
            @break
        @case(3)
            {{$n->salario*30}}
            @break
        @default
            No definido
    @endswitch</td>
      <td>{{$n->salario}}</td>
      <td>{{ number_format(($n->salario * 15) / 365, 4) }}</td>
      <td>{{$n->dias_vacaciones}}</td>      
    <td>{{ number_format(($n->salario * $n->dias_vacaciones * .25) / 365, 4) }}</td>



    </tr>
    @endforeach
  
  </tbody>
</table>



<table class="table" id="tabla2" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Percepciones</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Sept</th>
      <th scope="col">Bono desp</th>
      <th scope="col">Bono punt</th>
      <th scope="col">Bono asist</th>
      <th scope="col">H.E</th>

    </tr>
  </thead>
  <tbody>
    @foreach($rosters as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td><input type="number" style="width:60px;"></td>
      <td></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td>6</td>
      <td>1</td>
      <td><input type="number" value="{{$n->salariodiario*7}}" style="width:60px;"></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>

    </tr>
    @endforeach
  
  </tbody>
</table>



<table class="table" id="tabla3" style="display:none;">
  <thead>
    <tr>
      <th scope="col">HOLA</th>
      <th scope="col">Neto</th>
      <th scope="col">Factor</th>
      <th scope="col">SD</th>
      <th scope="col">SDI</th>
      <th scope="col">Dias</th>
      <th scope="col">Septimo dia</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Sueldo septimo dia</th>
      <th scope="col">Aguinaldo</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Prima vacacional</th>

    </tr>
  </thead>
  <tbody>
    @foreach($rosters as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td><input type="number" style="width:60px;"></td>
      <td></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td>6</td>
      <td>1</td>
      <td><input type="number" value="{{$n->salariodiario*7}}" style="width:60px;"></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>

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


    } else if(id==2) {
    document.querySelector("#tabla1").style.display='none'
    document.querySelector("#tabla3").style.display='none'


    } else {
    document.querySelector("#tabla1").style.display='none'
    document.querySelector("#tabla2").style.display='none'



    }





  })

</script>
@endsection