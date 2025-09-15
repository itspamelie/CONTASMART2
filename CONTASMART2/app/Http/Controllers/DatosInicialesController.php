<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
//modelos a usar de la base de datos
use App\Models\Practice;
use App\Models\Year;
use Auth;
use App\Models\Roster;

class DatosinicialesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
     $practica = Session::get('practica');
    // Verifica si existe
    if ($practica) {
        // Puedes usar sus datos
        $years = DB::table('years')->pluck('year', 'id');
        $year_practica = Year::find($practica->id);
        //dd($sm)
        
        // [id => year]
        return view('datosiniciales', compact('practica', 'years', 'year_practica'));
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
        $empleados = $request->input('empleados'); // esto será un array de arrays
       
        //$yearfk = Practica::where('id_practica', $request->id_practica)->value('year_id');
        //$salariominimo = Year::where('year_id', $yearfk)->value('sm');
        //$practica =  Practica::find( $request->id_practica);
        
        foreach ($empleados as $empleado) {
            $nomina = new Roster();
            $nomina->name= $empleado['nombre'];
            $nomina->fondoahorro=0;
            $nomina->tipo_sueldo = $empleado['tipo_sueldo']; // ✅ AQUÍ estaba el problema
            $nomina->salario=$empleado['salario'];
            $nomina->diastrabajadosaguinaldo=0;
            $nomina->horasextrasdoubles=0;
            $nomina->horasextrastriples=0;
            $nomina->cantidadfestivos=0;
            $nomina->antiguedad=$empleado['antiguedad'];
            $nomina->id_practica=$request->id_practica;
            $nomina->save();
        }

        return redirect()->back()->with('message', 'Nómina guardada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $practica = Practice::find($id);
        if (!$practica) {
            return redirect('dashboard')->with('error', 'No se encontró la práctica.');
        }
        if($practica->user_id!=Auth::user()->id){
            return redirect('dashboard')->with('error', 'No se encontró la práctica.');
        } 
        $years = DB::table('years')->pluck('year', 'id'); // [id => year]
        $year_practica = Year::find($practica->year_id);
        
        Session::put('practica', $practica);
        return view('datosiniciales', compact('practica', 'years','year_practica'));
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
public function update(Request $request)
{
     $request->validate([
        'id' => 'required|exists:practices,id',
        'year' => 'required|integer',
    ]);

    $practica = Practice::find($request->id);
    $id_year = Year::where('year', $request->year)->value('id');

    if ($id_year) {
        // Aquí cambia id_year por year_id, que es la columna correcta en la tabla practicas
        $practica->year_id = $id_year;
        $practica->save();
        Session::put('practica', $practica);
return redirect("/datosiniciales")->with('message', 'Año actualizado correctamente.');
    } 
    else {
        return redirect('/datosiniciales')->with('error', 'Algo salio fatal.');
    }
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
