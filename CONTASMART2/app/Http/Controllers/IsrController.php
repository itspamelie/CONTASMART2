<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; 
use Illuminate\Support\Facades\DB;
//PONER EN TODOS LOS CONTROLADORES DE NOMINA
use Illuminate\Http\Request;
use App\Models\Practice;
use App\Models\Year;
use Auth;
use App\Models\Roster;

class IsrController extends Controller
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
    }

    $years = DB::table('years')->pluck('year', 'id');
    $year_practica = Year::find($practica->year_id);
    
    // Eliminamos el uso de la sesión aquí.
    return view('isr', compact('practica', 'years', 'year_practica'));
        }
        
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
