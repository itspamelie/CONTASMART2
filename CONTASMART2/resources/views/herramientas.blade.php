@extends('layouts.main')

@section('contenido')
<div class="mt-5 d-flex text-center justify-content-center">
    <br>
<h4 class="mt-5">Campos relacionados con los datos iniciales.</h4>
</div>


<div class="accordion px-5 mt-4 mb-4" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        SM
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Salario Mínimo.</strong> Es el salario mínimo establecido por la ley para un país o región. En México, lo fija la Comisión Nacional de Salarios Mínimos (CONASAMI). El salario mínimo tiende a variar dependiendo del año en el que se esté calculando la nómina.

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        UMI
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Unidad Mixta Infonavit.</strong>Es un esquema utilizado por el Infonavit para los créditos hipotecarios. Permite calcular pagos basados en el menor valor entre el aumento del salario mínimo o la inflación, y busca proteger a los trabajadores de incrementos excesivos en sus pagos hipotecarios.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        UMA
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Unidad de Medida Actualizada.</strong> Se usa como base para cálculos de pagos, multas, créditos hipotecarios, prestaciones y contribuciones en México. Se actualiza anualmente por el INEGI, y reemplazó el Salario Mínimo en algunos cálculos fiscales y administrativos para evitar su uso en incrementos de impuestos o multas.


        
      </div>
    </div>
  </div>

</div>

<div class="d-flex text-center justify-content-center">
<h4 class="">Campos relacionados con la antiguedad del empleado.</h4>
</div>

<div class="d-flex align-items-center justify-content-center mb-3">
<table class="table mt-4" style="width:800px;">
  <thead>
    <tr>
      <th scope="col">Antigüedad</th>
      <th scope="col">Dias de vacaciones</th>
      <th scope="col">Prima vacacional</th>
      <th scope="col">Dias de Aguinaldo</th>
      <th scope="col">Factores</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>12</td>
      <td>25%</td>
      <td>15</td>
      <td>1.0493</td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14</td>
      <td>25%</td>
      <td>15</td>
      <td>1.0507</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>16</td>
      <td>25%</td>
      <td>15</td>
      <td>1.0521</td>

    </tr>
    <tr>
      <th scope="row">4</th>
      <td>18</td>
      <td>25%</td>
      <td>15</td>
      <td>1.0534</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>20</td>
      <td>25%</td>
      <td>15</td>
      <td>1.0548</td>
    </tr>
    
     
  </tbody>
</table>

</div>


<div class="d-flex text-center justify-content-center">
<h4 class="">Campos relacionados con la nomina del empleado.</h4>
</div>


<div class="accordion px-5 mt-4 mb-5" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       SD
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Salario Diario.</strong> Es el salario que un trabajador gana por cada día laborado. Se obtiene dividiendo el sueldo mensual entre 30 días. Se usa para calcular pagos proporcionales como días trabajados, vacaciones y aguinaldo.


      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        SDI
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Salario Diario Integrado.</strong>  Se utiliza para calcular las contribuciones al Instituto Mexicano del Seguro Social (IMSS) y para determinar las prestaciones a las que tiene derecho un trabajador. Este cálculo no solo incluye el salario base sino también otras prestaciones y beneficios. Calcular el SDI implica sumar el sueldo diario y las prestaciones que la ley establece en México que son vacaciones, prima vacacional y aguinaldo. 
<br><br>•	Paso 1: Identifica el salario base diario = Sueldo mensual/30 días.
<br>•	Paso 2: Determinar el factor de integración = Sumar los días del año + días de vacaciones (multiplicados por la prima vacacional que por ley es del 25%) + días de aguinaldo. Después el resultado se divide entre los días del año.
<br>•	Paso 3: Determinar el salario diario integrado = Salario diario (x) factor de integración.
</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Sueldo
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Sueldo del empleado.</strong> Siendo semanal, es el resultado de la multiplicación del salario diario por los días trabajados.
      </div>
    </div>

  
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Prima Vacacional
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
Prestación establecida por la Ley Federal del Trabajo (LFT) en México, que garantiza un beneficio adicional a los trabajadores durante su período de vacaciones. Los empleados tienen derecho a recibir una compensación equivalente a un mínimo del 25% sobre el salario que corresponda durante sus días de vacaciones. Se calcula de la siguiente manera: Prima vacacional = (salario diario = salario mensual / 30 días) x días de vacaciones x 25%      </div>
    </div>
  </div>


   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Factor de Integración
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
 Coeficiente que se utiliza para calcular el Salario Diario Integrado (SDI) de un trabajador. Se calcula de la siguiente manera, Factor = (Sumar los días del año + (días de vacaciones (x) prima vacacional que por ley es del 25%) + días de aguinaldo) / días del año.     </div>
  </div>
</div>
</div>

<div class="d-flex text-center justify-content-center mt-4">
<h4 class="">Campos relacionados con las prestaciones del empleado.</h4>
</div>


  </div>

@endsection

@section('script')
<script>
  
</script>
@endsection