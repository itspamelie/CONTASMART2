@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cálculo ISR</h2>
        <section class="d-flex">
          <div class="d-flex flex-column">
                   <p>ISR Mensual</p>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Límite inferior</th>
      <th scope="col">Cuota fija</th>
      <th scope="col">Tasa</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
    </tr>
  </tbody>
</table>
          </div>
        </section>


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
    
    <tr>
      <td></td>
      <td>
  
</td>

      <td></td>
<td></td>
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
    <tr>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td>6</td>
      <td>1</td>
      <td><input type="number" style="width:60px;"></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>

    </tr>
  
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
    <tr>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td>6</td>
      <td>1</td>
      <td><input type="number" value="" style="width:60px;"></td>
      <td></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>
      <td><input type="number" style="width:60px;"></td>

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