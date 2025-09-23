@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo ISR</h2>
    <section class="d-flex justify-content-center align-items-start p-4 bg-light">
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-12 col-md-6 d-flex flex-column">
                <p class="text-center fw-bold">ISR Mensual</p>
                <div class="table-responsive">
                    <table class="table  table-bordered text-center">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">Límite inferior</th>
                                <th scope="col">Cuota fija</th>
                                <th scope="col">Tasa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column">
                <p class="text-center fw-bold">Subsidio al empleo Mensual</p>
                <div class="table-responsive">
                    <table class="table  table-bordered text-center">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">Límite inferior</th>
                                <th scope="col">SAE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="d-flex justify-content-center align-items-start p-3 bg-light">
    <div class="container-fluid">
        <div class="row g-4">
            <div class="col-12 col-md-9 d-flex flex-column">
                <p class="text-center fw-bold">UMA</p>
                <div class="table-responsive">
                    <table class="table  table-bordered text-center">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">UMA inferior</th>
                                <th scope="col">Porcentaje de decreto</th>
                                <th scope="col">Subsidio diario</th>
                                <th scope="col">Subsidio mensual</th>
                                <th scope="col">% Enero</th>
                                <th scope="col">% Febrero</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                                <td><input type="number" class="form-control text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column align-center justify-center">
                <p class="text-center fw-bold">Tope Mensual</p>
                <input type="number" class="form-control text-center">
                <p class="text-center fw-bold mt-1">Subsidio</p>
                <input type="number" class="form-control text-center">
                
            </div>
        </div>
    </div>
</section>


        <div class="select">
  <select
    id="options"
    class="form-control"
  >
    <option value="1">
      ISR 1
  </option>
    <option value="2">
      ISR 2
    </option>
    <option value="3">
      ISR 3
    </option>
     <option value="4">
      ISR 4
    </option>
  </select>
</div>



 <div class="container mt-2">

<table class="table" id="tabla1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Ult. dia</th>
      <th scope="col">Vacaciones</th>
      <th scope="col">Prima vacacional</th>
      <th scope="col">Pv Grav</th>
      <th scope="col">Aguinaldo</th>
      <th scope="col">Aguinaldo grav</th>
      <th scope="col">Bono productividad</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
     @foreach($nominas as $n)

      <td>{{$n->name}}</td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
            {{$n->salario*6}}
            @break
        @case(2)
            {{$n->salario*13}}
            @break
        @case(3)
            {{$n->salario*29}}
            @break
    @endswitch
      </td>
      <td>{{$n->salario}}</td>
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
      <th scope="col">Prima Dominical</th>
      <th scope="col">PD Grav</th>
      <th scope="col">Despensa</th>
      <th scope="col">Puntualidad</th>
      <th scope="col">Asistencia </th>
      <th scope="col">Hrs.Ext Dobles</th>
      <th scope="col">Mitad exc</th>

    </tr>
  </thead>
  <tbody>
             @foreach($nominas as $n)
    <tr>
      <td>{{$n->name}}</td>
      <td></td>
      <td></td>
      <td> @switch($n->tipo_sueldo)
        @case(1)
{{(113.14*.4)*7}}
        @break
        @case(2)
{{(113.14*.4)*15}}
            @break
        @case(3)
{{(113.14*.4)*30}}
            @break
    @endswitch</td>
      <td></td>
      <td></td>
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



<table class="table" id="tabla3" style="display:none;">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Mitad grav 3</th>
      <th scope="col">Hrs. Ext. 3</th>
      <th scope="col">Festivo</th>
      <th scope="col">ISR</th>
      <th scope="col">Suma exc</th>
      <th scope="col">Mitad grav</th>
      <th scope="col">Total Grav. Semanal</th>
      <th scope="col">Total Grav Mensual</th>

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
      <th scope="col">Limite Inferior</th>
      <th scope="col">Excedente</th>
      <th scope="col">Tasa</th>
      <th scope="col">Impuesto Marginal</th>
      <th scope="col">Cuota fija</th>
      <th scope="col">ISR a cargo</th>
      <th scope="col">SAE</th>
      <th scope="col">ISR mensual</th>
      <th scope="col">ISR/SAE</th>
      <th scope="col"></th>

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
@endsection