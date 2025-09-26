<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; //PONER EN TODOS LOS CONTROLADORES DE NOMINA
//PONER EN TODOS LOS CONTROLADORES DE NOMINA
use Illuminate\Support\Facades\DB;
use App\Models\Practice;
use App\Models\Year;
use App\Models\Antique;
use Auth;
use App\Models\Roster;
use Illuminate\Http\Request;

class CostoimssController extends Controller
{
     //PARA LAS SESIONES 
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(string $id)
    {
          $practica = Practice::find($id);
    if (!$practica || $practica->user_id != Auth::user()->id) {
        return redirect('dashboard')->with('error', 'No se encontró la práctica.');
    }else{
    $nominas = Roster::where('id_practica', $practica->id)->get();

    $years = DB::table('years')->pluck('year', 'id');
    $year_practica = Year::find($practica->year_id);
    $anio = date('Y');
    $anioEntero = (int) $anio;

    foreach ($nominas as $nomina) {
    // Obtiene el ID de la antigüedad de la nómina
    $idAntiguedad = $nomina->antiguedad+1;

    // Realiza la consulta para obtener los días de vacaciones usando ese ID
    $antique = Antique::find($idAntiguedad);

    if ($antique) {
        $diasVacaciones = $antique->dias_vacaciones;
    } 
}

    // Eliminamos el uso de la sesión aquí.
    return view('costoimss', compact('practica', 'years', 'year_practica','nominas','anioEntero','antique'));
    }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
