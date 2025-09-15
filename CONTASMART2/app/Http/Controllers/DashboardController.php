<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Modelo de la base de datos a usar
use App\Models\Practice;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;

//SESION
class DashboardController extends Controller
{
    //PARA LAS SESIONES 
    public function __construct() {
        $this->middleware('auth');
    }


public function index()
{
    $idUsuario = Auth::id();
    $practicas = Practice::where('user_id', $idUsuario)
                         ->orderBy('id', 'desc')
                         ->get();
    if ($practicas->isEmpty()) {
        return view('dashboard')->with('mensaje', 'Aún no tienes prácticas registradas.');
    }
    return view('dashboard')->with('practices', $practicas);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Para hacer pruebas se usa dd($request->title);
        //
        $practica = new Practice();
        $practica->titulo=$request->title;
        $practica->created_at=date('Y-m-d h:i:s');
        $practica->user_id=Auth::user()->id;
       
        $year = Year::orderBy('id','DESC')->get()->first();
        $practica->year_id=$year->id;
        $practica->save();
        return redirect('dashboard')->with('message','Práctica generada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $practica =Practice::find($request->id);
        $practica->titulo=$request->title;
        $practica->save();
        return redirect('dashboard')->with('message','Nombre actualizado correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $practica = Practice::find($request->id);
    if ($practica) {
        $practica->delete();
        return redirect('dashboard')->with('message', 'Proyecto eliminado correctamente.');
    } else {
        return redirect('dashboard')->with('error', 'No se ha encontrado el proyecto');
    }

    }
}