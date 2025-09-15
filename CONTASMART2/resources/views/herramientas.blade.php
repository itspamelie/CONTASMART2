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
<h5 class="">Campos relacionados con la nomina del empleado.</h4>
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



<div class="container my-5">
        <h2 class="text-center mb-4">Campos relacionados con las prestaciones y deducciones del empleado</h2>
        <hr>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Aguinaldo</h4>
            </div>
            <div class="card-body">
                <p>El aguinaldo es un ingreso adicional que ayuda a los empleados durante las festividades de fin de año. Por ley, si has cumplido un año de trabajo con tu empleador, te corresponde un aguinaldo equivalente al salario de <strong>15 días</strong>. Si no has trabajado un año completo, recibirás un aguinaldo proporcional.</p>
                <div class="alert alert-info">
                    <strong>Fórmula:</strong>
                    <div class="formula">Aguinaldo = Salario neto diario × Días de aguinaldo</div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Vacaciones</h4>
            </div>
            <div class="card-body">
                <p>Las vacaciones son un período de descanso remunerado. El Artículo 7 de la LFT establece que, después de un año de servicio, los trabajadores tienen derecho a un mínimo de <strong>12 días de vacaciones pagadas</strong>, que aumentan en dos días por cada año subsecuente hasta llegar a 20. Después, el aumento es de dos días por cada cinco años de servicio.</p>
                <div class="alert alert-info">
                    <strong>Fórmulas:</strong>
                    <div class="formula">
                        Vacaciones = Días de vacaciones × Salario Diario del empleado<br><br>
                        <strong>Para tiempo proporcional:</strong><br>
                        Vacaciones = ((12 días de vacaciones / 365 días del año) × días laborados) × Salario diario
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Prima Dominical</h4>
            </div>
            <div class="card-body">
                <p>Es un monto adicional que se paga por trabajar los domingos. Esta prima corresponde al <strong>25% adicional</strong> al salario de ese día.</p>
                <div class="alert alert-info">
                    <strong>Fórmula:</strong>
                    <div class="formula">Prima dominical = Salario diario ordinario × 25% × Cantidad de domingos trabajados</div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Horas Extras Dobles y Triples</h4>
            </div>
            <div class="card-body">
                <p>
                    <strong>Horas extras dobles:</strong> Se pagan al doble de la tarifa regular. El límite es de <strong>9 horas dobles a la semana</strong>.
                </p>
                <div class="alert alert-info">
                    <strong>Fórmula:</strong>
                    <div class="formula">Horas extras dobles = Salario por hora × Horas extras trabajadas × 2</div>
                </div>
                <p>
                    <strong>Horas extras triples:</strong> Aplican cuando se excede el límite de 9 horas extras semanales. Estas se pagan al <strong>triple</strong> de la tarifa regular.
                </p>
                <div class="alert alert-info">
                    <strong>Fórmula:</strong>
                    <div class="formula">Horas extras triples = Salario por hora × Horas extras trabajadas × 3</div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Bonos</h4>
            </div>
            <div class="card-body">
                <p>De acuerdo con el artículo 84, los bonos recurrentes forman parte del salario integrado. Esto significa que deben ser considerados al calcular prestaciones como el aguinaldo, la prima vacacional e indemnizaciones.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Percepciones y Deducciones</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Percepciones:</strong> Son los ingresos que el empleado recibe por el trabajo realizado en un periodo determinado.</li>
                    <li class="list-group-item"><strong>Deducciones:</strong> Son los importes que se restan del salario bruto de un empleado para obtener su salario neto.</li>
                </ul>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Impuesto Sobre la Renta (ISR)</h4>
            </div>
            <div class="card-body">
                <p>El ISR es un impuesto que se aplica a los ingresos de personas físicas o empresas. Se calcula aplicando una tasa que varía según el tipo y monto de ingreso. Están obligados a pagarlo:</p>
                <ul>
                    <li>Personas que viven y trabajan en México.</li>
                    <li>Empresas en México.</li>
                    <li>Personas en el extranjero con negocios que les generan ingresos en México.</li>
                </ul>
                <div class="card-footer bg-light">
                    <h6 class="text-center">Cómo calcular el ISR con las Tablas de ISR:</h6>
                    <ol>
                        <li><strong>Determina la base gravable:</strong> Tu ingreso total menos las deducciones permitidas.</li>
                        <li><strong>Ubica tu tabla de ISR y Límite Inferior:</strong> Elige la tabla correcta (mensual, quincenal, etc.) y encuentra el Límite inferior más cercano a tu base gravable, sin ser mayor.</li>
                        <li><strong>Resta el Límite Inferior:</strong> A tu ingreso total, réstale el Límite inferior.</li>
                        <li><strong>Aplica el porcentaje:</strong> Multiplica el resultado anterior por el porcentaje que corresponda a tu rango de ingresos.</li>
                        <li><strong>Suma la Cuota Fija:</strong> Suma la Cuota fija que se encuentra en la misma fila de la tabla. El resultado es el total del ISR.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>Subsidio al Empleo (SAE)</h4>
            </div>
            <div class="card-body">
                <p>Es un beneficio fiscal que reduce el Impuesto Sobre la Renta (ISR) que se retiene a los trabajadores con salarios bajos o medios.</p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header text-center">
                <h4>RCV (Retiro, Cesantía y Vejez)</h4>
            </div>
            <div class="card-body">
                <p>En esta subcuenta se depositan las cuotas y aportaciones tripartitas (patrón, gobierno federal y trabajador) para el retiro.</p>
                <div class="list-group">
                    <div class="list-group-item">
                        <strong>Patrón:</strong> Aporta el 2% del salario base de cotización (SBC) para retiro y 3.15% del SBC para cesantía y vejez.
                    </div>
                    <div class="list-group-item">
                        <strong>Gobierno:</strong> Aporta el 0.225% del SBC para cesantía y vejez, más una cuota social equivalente al 5.5% del salario mínimo por cada día cotizado.
                    </div>
                    <div class="list-group-item">
                        <strong>Trabajador:</strong> Aporta el 1.125% sobre el salario base de cotización de manera bimestral.
                    </div>
                </div>
            </div>
        </div>





  </div>
</div>
@endsection

@section('script')
<script>
  
</script>
@endsection