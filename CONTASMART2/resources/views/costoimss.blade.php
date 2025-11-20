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
      @php $totales = []; $totalesrcv=[]; @endphp
     @foreach($nominas as $index=>$n)
@php
$antiqueLocal = \App\Models\Antique::find($n->antiguedad + 1);
@endphp
      <td>{{$n->name}}</td>
      <td>{{ number_format(($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365,2)+number_format(($n->salario * 15) / 365, 2)+$n->salario}}</td>
      <td>31</td>
@php
    // C13 de la hoja del excel
    $c13 = (($n->salario * $antiqueLocal->dias_vacaciones * .25) / 365)
         + (($n->salario * 15) / 365)
         + $n->salario;

    // Valores
    $v1 = $year_practica->uma * 31 * .2040;     // primer td

    // Fórmula tipo Excel convertida
    $c2  = $year_practica->uma * 3;
    $f9  = 0.011;
    $d13 = 31;
    $v2  = $c13 > $c2 ? ($c13 - $c2) * $f9 * $d13 : 0;   // segundo td

    // Los demás porcentajes
    $v3 = $c13 * 0.217;
    $v4 = $c13 * 0.3255;
    $v5 = $c13 * 0.3505015;
    $v6 = $c13 * 0.5425;
    $v7 = $c13 * 0.31;

    // Suma total
    $total = array_sum([$v1, $v2, $v3, $v4, $v5, $v6, $v7]);
    $totales[$index] = $total;

@endphp


<td>{{ number_format($v1, 2) }}</td>
<td>{{ number_format($v2, 2) }}</td>
<td>{{ number_format($v3, 2) }}</td>
<td>{{ number_format($v4, 2) }}</td>
<td>{{ number_format($v5, 2) }}</td>
<td>{{ number_format($v6, 2) }}</td>
<td>{{ number_format($v7, 2) }}</td>

<!-- Última celda (suma total) -->
<td >{{ number_format($total, 2) }}</td>

  
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
             @foreach($nominas as $index=>$n)
    <tr>
      @php
$antiqueLocal1 = \App\Models\Antique::find($n->antiguedad + 1);
@endphp
      <td>{{$n->name}}</td>
      @php
    // C13 o SDI
    $c13 = (($n->salario * $antiqueLocal1->dias_vacaciones * .25) / 365)
         + (($n->salario * 15) / 365)
         + $n->salario;

    // Valores
    $v1 = $c13 * .0775;     // primer td
    $v3 = $c13 * 0.11625;

    // Fórmula tipo Excel convertida
    $c2  = $year_practica->uma * 3;
    $f9  = 0.04;
    $d13 = 31;
    $v2  = $c13 > $c2 ? ($c13 - $c2) * $f9 * $d13 : 0;   // segundo td

    // Los demás porcentajes
    $v4 = $c13 * 0.19375;

    // Suma total
    $total2 = array_sum([$v1, $v2, $v3, $v4]);
@endphp

      <td>0</td>
      <td>{{ number_format($v1, 2) }}</td>
      <td>{{ number_format($v3, 2) }}</td>
      <td>{{ number_format($v4, 2) }}</td>
      <td>{{ number_format($total2, 2) }}</td>
      <td>{{ number_format($totales[$index]+$total2,2) }}</td>
      

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
     @foreach($nominas as $index=>$n)
      @php
$antiqueLocal2 = \App\Models\Antique::find($n->antiguedad + 1);
@endphp
 @php
    // C13 o SDI
    $c13 = (($n->salario * $antiqueLocal2->dias_vacaciones * .25) / 365)
         + (($n->salario * 15) / 365)
         + $n->salario;

    // Valores
    $v1 = $c13 * 0.675;     // primer td
    $v3 = $c13 * 1.2;

    // Los demás porcentajes
    $v4 = $c13 * 1.89;
    $subtotal= $v3+$v4;
    $totalrcv=$subtotal+$v1;
    $totalesrcv[$index]=$totalrcv;
        $totalesrcv[$index]=$totalrcv;

@endphp
    <tr>
      <td>{{$n->name}}</td>
      <td>60</td>
      <td>{{ number_format($v1, 2) }}</td>
      <td>{{ number_format($v3, 2) }}</td>
      <td>{{ number_format($v4, 2) }}</td>
      <td>{{ number_format($subtotal, 2) }}</td>
      <td>{{ number_format($totalrcv, 2) }}</td>

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
        @foreach($nominas as $index => $n)
         @php
$antiqueLocal3 = \App\Models\Antique::find($n->antiguedad + 1);
@endphp
@php
    // C13 o SDI
    $c13 = (($n->salario * $antiqueLocal3->dias_vacaciones * .25) / 365)
         + (($n->salario * 15) / 365)
         + $n->salario;

    // Valores
    $v1 = $c13 * 3;     // primer td
@endphp
    <tr>
      <td>{{$n->name}}</td>
      <td>{{ number_format($v1, 2) }}</td>
      <td></td>
      <td>{{ number_format($v1, 2) }}</td>
      <td>{{ number_format($totalesrcv[$index]+$v1,2) }}</td>

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