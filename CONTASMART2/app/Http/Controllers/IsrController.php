<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session; //PONER EN TODOS LOS CONTROLADORES DE NOMINA
use Illuminate\Http\Request;

class IsrController extends Controller
{
   //PARA LAS SESIONES 
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
  $practica = Session::get('practica');
         if ($practica) {
             return view('isr')->with('practica',$practica);
        } else {
            return redirect()->back()->with('error', 'No se encontró la práctica en la sesión.');
        }
         return view('isr');    }

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
