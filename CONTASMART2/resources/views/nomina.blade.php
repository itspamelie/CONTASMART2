@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Nómina Principal</h2>
       <p>Aquí puedes observar tu nómina (SD,SDI,percepciones,deducciones,etc)</p>


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
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo de Sueldo</th>
      <th scope="col">Factor</th>
      <th scope="col">SD</th>
      <th scope="col">SDI</th>
      <th scope="col">Dias</th>
      <th scope="col">Ultimo dia</th>
      <th scope="col">Sueldo Total</th>
      <th scope="col">Sueldo ult. dia</th>
      <th scope="col">Prima dominical</th>

    </tr>
  </thead>
  <tbody>
    @foreach($nominas as $n)
      @php
$antiqueLocal = \App\Models\Antique::find($n->antiguedad + 1);
@endphp 

@php
    // C13 de la hoja del excel
    $c13 = (($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365)
         + (($n->salario * 15) / 365)
         + $n->salario;

@endphp
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
    @endswitch
</td>

<td>{{ round(((($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365) + (($n->salario * 15) / 365) + $n->salario) / $n->salario, 4) }}</td>
      <td>{{$n->salario}}</td>
      <td>{{ number_format(($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>

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
    @endswitch</td>
      <td>1</td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
           {{ $n->salario*6}}
            @break
        @case(2)
           {{$n->salario*14}} 
            @break
        @case(3)
            {{$n->salario*29}}
            @break
    @endswitch</td>
      <td>{{$n->salario}}</td>
      <td>0.00</td>


    </tr>
    @endforeach
  
  </tbody>
</table>



<table class="table" id="tabla2" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Bono desp.</th>
      <th scope="col">Bono punt.</th>
      <th scope="col">Bono asist.</th>
      <th scope="col">HRS EXT DOBLES</th>
      <th scope="col">HRS EXT TRIPLES</th>
      <th scope="col">Días festivos</th>
      <th scope="col">Percepciones</th>
      <th scope="col">ISR</th>
      <th scope="col">IMSS Y CV</th>
      <th scope="col">INFONAVIT</th>
      <th scope="col">Deducciones</th>
      <th scope="col">Neto</th>

    </tr>
  </thead>
  <tbody>
    @foreach($nominas as $n)
     @php
$antiqueLocal1 = \App\Models\Antique::find($n->antiguedad + 1);

$c14 = (($n->salario * $antiqueLocal1->dias_vacaciones * .25) / 365)
     + (($n->salario * 15) / 365)
     + $n->salario;

// SUELDO SEGÚN TIPO DE PAGO
switch($n->tipo_sueldo){
    case 1: $sueldo_periodo = $n->salario * 6; break;
    case 2: $sueldo_periodo = $n->salario * 14; break;
    case 3: $sueldo_periodo = $n->salario * 29; break;
}

// BONOS
$bono_despensa = $year_practica->uma * 0.4 *
    ($n->tipo_sueldo == 1 ? 7 : ($n->tipo_sueldo == 2 ? 14 : 30));

$bono_puntualidad = $c14 *
    ($n->tipo_sueldo == 1 ? 7 : ($n->tipo_sueldo == 2 ? 14 : 30)) * 0.1;

$bono_asistencia = $c14 *
    ($n->tipo_sueldo == 1 ? 7 : ($n->tipo_sueldo == 2 ? 14 : 30)) * 0.1;

// SUMA TOTAL DE PERCEPCIONES
$percepciones = $sueldo_periodo + $n->salario + $bono_despensa + $bono_puntualidad + $bono_asistencia;
@endphp

    <tr>
      <td>{{$n->name}}</td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
           {{number_format(($year_practica->uma*0.4*7),2) }}
            @break
        @case(2)
           {{number_format(($year_practica->uma*0.4*14),2) }}
            @break
        @case(3)
           {{number_format(($year_practica->uma*0.4*30),2) }}
            @break
    @endswitch</td>
      <td>@switch($n->tipo_sueldo)
        @case(1)
           {{ number_format(($c14*7*.1),2)}}
            @break
        @case(2)
           {{ number_format(($c14*14*.1),2)}}
            @break
        @case(3)
           {{ number_format(($c14*30*.1),2)}}
            @break
    @endswitch</td>
      <td>@switch($n->tipo_sueldo)
        @case(1)
           {{ number_format(($c14*7*.1),2)}}
            @break
        @case(2)
           {{ number_format(($c14*14*.1),2)}}
            @break
        @case(3)
           {{ number_format(($c14*30*.1),2)}}
            @break
    @endswitch</td>
      <td></td>
      <td></td>
      <td></td>
    <td>{{ number_format($percepciones, 2) }}</td>
      <td></td>
      <td>  @switch($n->tipo_sueldo)
        @case(1)
           {{ number_format(($c14*0.02375*7),2)}}
            @break
        @case(2)
           {{ number_format(($c14*0.02375*14),2)}}
            @break
        @case(3)
           {{ number_format(($c14*0.02375*30),2)}}
            @break
    @endswitch  </td>
      <td></td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
           {{ number_format(($c14*0.02375*7),2)}}
            @break
        @case(2)
           {{ number_format(($c14*0.02375*14),2)}}
            @break
        @case(3)
           {{ number_format(($c14*0.02375*30),2)}}
            @break
    @endswitch</td>
    <td>@switch($n->tipo_sueldo)
        @case(1)
           {{ number_format($percepciones-($c14*0.02375*7),2)}}
            @break
        @case(2)
           {{ number_format($percepciones-($c14*0.02375*14),2)}}
            @break
        @case(3)
           {{ number_format($percepciones-($c14*0.02375*30),2)}}
            @break
    @endswitch</td>
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