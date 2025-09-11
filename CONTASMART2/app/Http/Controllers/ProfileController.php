<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //PARA LAS SESIONES 
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
          return view('perfil');
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
    public function update(Request $request) {

        if (!empty($request->newpassword) && !empty($request->confirmpassword)) {

          if($request->confirmpassword==$request->newpassword){
             $user =User::find($request->id);
             $user->group=$request->group;
             $user->semester=$request->semester;
             $user->email=$request->email;
             $user->password=$request->confirmpassword;
        $user->save();
        return redirect('perfil')->with('message','Tus datos se han actualizado correctamente.');


        } else {
         return redirect('perfil')->with('error','Algo salio mal. Verifica que tus contraseñas coincidan');
        }


        } else {
        $user =User::find($request->id);
        $user->group=$request->group;
        $user->semester=$request->semester;
        $user->email=$request->email;
        $user->save();
        return redirect('perfil')->with('message','Tus datos se han actualizado correctamente.');
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
