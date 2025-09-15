<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; //PONER EN TODOS LOS CONTROLADORES DE NOMINA
use Illuminate\Http\Request;
//importar el modelo de la practica
use App\Models\Practice;
use App\Models\Roster;
use App\Models\Antique;

class RosterController extends Controller
{
     //PARA LAS SESIONES 
    public function __construct() {
        $this->middleware('auth');
    }
    

public function index()
{
    $practica = Session::get('practica');

    if ($practica) {
        $nominas = Roster::where('id_practica', $practica->id)->get();

        // Calculamos la prima vacacional para cada empleado
        foreach ($nominas as $n) {
            $antique = Antique::find($n->antiguedad-1); // buscamos la antiguedad en la tabla Antique
            $n->prima_vacacional = $antique 
                ? ($antique->dias_vacaciones * $n->salario * 0.25) / 365
                : 0;
            $n->factor_antiguedad = $antique 
        ? $antique->factor 
        : 'No definido';
         $n->dias_vacaciones = $antique 
        ? $antique->dias_vacaciones 
        : 'No definido';
// Suponiendo que $n es tu objeto de nómina o empleado
        }

        return view('nomina')
            ->with('practica', $practica)
            ->with('rosters', $nominas);
    } else {
        return redirect()->back()->with('error', 'No se encontró la práctica en la sesión.');
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
