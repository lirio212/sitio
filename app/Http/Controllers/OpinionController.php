<?php

namespace App\Htt\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controllers
{
    public function guardarOpinion(Request $request){
        $datos=$request->input();
        //dd($datos);
        $Opinion = new Opinion();
        $Opinion->nombre= $datos["nombre"];
        $Opinion->email= $datos["email"];
        $Opinion->opinion= $datos["opinion"];
        $Opinion->save();
        return redirect('/formulario');
    }
}
