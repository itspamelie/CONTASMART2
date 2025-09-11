@extends('layouts.mainnomina')

@section('contenido')
  <div class="p-4" style="flex-grow: 1; background-color: #f8f9fa;">

 <div class="container mt-2">
        <h2>Cuotas IMSS</h2>
       <p>De acuerdo al régimen obligatorio del seguro social. Artículo 11 LSS</p>

 
        <div class="table-responsive">
    <table class="table table-bordered table-sm align-middle text-center">
      <thead class="table-primary">
        <tr>
          <th rowspan="2">DESCRIPCIÓN</th>
          <th rowspan="2">TIPO</th>
          <th colspan="3">CUOTAS A CUBRIR</th>
          <th rowspan="2">BASE PARA CÁLCULO</th>
          <th rowspan="2">MARCO NORMATIVO</th>
        </tr>
        <tr>
          <th>PATRÓN</th>
          <th>OBRERO</th>
          <th>TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <!-- Riesgos de trabajo -->
        <tr>
          <td rowspan="1">I<br>Riesgos de trabajo</td>
          <td>En especie y en dinero</td>
          <td colspan="3">Prima de riesgo vigente de la empresa</td>
          <td>SBC</td>
          <td>LSS (Artículo 71)</td>
        </tr>

        <!-- Enfermedades y maternidad -->
        <tr>
          <td rowspan="4">II<br>Enfermedades y maternidad</td>
          <td>Cuota fija</td>
          <td>20.400%</td>
          <td>0.000%</td>
          <td>20.400%</td>
          <td>UMA</td>
          <td>LSS (Art. 106 y Décimo Noveno Transitorio)</td>
        </tr>
        <tr>
          <td>Aplicación al excedente de 3 UMAS</td>
          <td>1.100%</td>
          <td>0.400%</td>
          <td>1.500%</td>
          <td>SBC - (3*UMA)</td>
          <td>LSS (Art. 106 Fracción II y Décimo Noveno Transitorio)</td>
        </tr>
        <tr>
          <td>Prestaciones en dinero</td>
          <td>0.700%</td>
          <td>0.250%</td>
          <td>0.950%</td>
          <td>SBC</td>
          <td>LSS (Art. 107 Fracción I y II)</td>
        </tr>
        <tr>
          <td>Gastos médicos pensionados</td>
          <td>1.050%</td>
          <td>0.375%</td>
          <td>1.425%</td>
          <td>SBC</td>
          <td>LSS (Art. 25)</td>
        </tr>

        <!-- Invalidez y vida -->
        <tr>
          <td>III<br>Invalidez y vida</td>
          <td>En dinero</td>
          <td>1.750%</td>
          <td>0.625%</td>
          <td>2.375%</td>
          <td>SBC</td>
          <td>LSS (Art. 147)</td>
        </tr>

        <!-- Retiro y Cesantía -->
        <tr>
          <td>IV<br>Retiro</td>
          <td>En dinero</td>
          <td>2.000%</td>
          <td>0.000%</td>
          <td>2.000%</td>
          <td>SBC</td>
          <td>LSS (Art. 168, Fracción I)</td>
        </tr>
        <tr>
          <td>Cesantía en edad avanzada y vejez</td>
          <td>En dinero</td>
          <td>3.150%</td>
          <td>1.125%</td>
          <td>4.275%</td>
          <td>SBC</td>
          <td>LSS (Art. 168, Fracción II)</td>
        </tr>

        <!-- Guarderías -->
        <tr>
          <td>V<br>Guarderías y prestaciones sociales</td>
          <td>En especie</td>
          <td>1.000%</td>
          <td>0.000%</td>
          <td>1.000%</td>
          <td>SBC</td>
          <td>LSS (Art. 111)</td>
        </tr>

        <!-- INFONAVIT -->
        <tr>
          <td>INFONAVIT<br>Fondo para la Vivienda</td>
          <td>Crédito</td>
          <td>5.000%</td>
          <td>0.000%</td>
          <td>5.000%</td>
          <td>SBC</td>
          <td>LINFONAVIT (Art. 211, Fracción II)</td>
        </tr>

        <!-- ISN -->
        <tr>
          <td>ISN<br>Impuesto Sobre Nómina</td>
          <td>Impuesto</td>
          <td colspan="3">Variable</td>
          <td>SBC</td>
          <td>Conforme a la ley aplicable por entidad federativa</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
  @section('script')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection