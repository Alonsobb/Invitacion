<?php

namespace App\Http\Controllers;

use App\Models\Invitados;
use Illuminate\Http\Request;

class Invitacion extends Controller
{
    public function viewwelcome(){
        return view('admin.index');
    }
    public function invitaciones(){
        return view('admin.invitaciones');
    }
    public function agregarinvitacion(){
        return view('admin.agregarinvitacion');
    }
    public function agregarinvitacionpost(Request $request){
        $request->validate([
            'nombre' => 'required|bail',
            'telefono' => 'required|numeric',
            'adultos' => 'nullable|numeric',
            'ninos' => 'nullable|numeric',
        ]);
      
        $invitados = new Invitados();

        $invitados->nombre = $request->nombre ;
        $invitados->telefono = $request->telefono ;
        $invitados->adultos = $request->adultos ;
        $invitados->ninos = $request->ninos ;
        $invitados->comentario = $request->comentario ;

        $registro = $invitados->save();

        if($registro){
            return back()->with('success', 'insert success');
        }else{
            return back()->with('fail', 'insert failed');
        }


      //  return view('admin.agregarinvitacion')->with('ok', 'Se agrego la invitacion');
    }

    public function invitadoEspecial($invitado){
        return view('welcome')->with('invitado', $invitado);
    }
}
