<?php

namespace App\Http\Controllers;

use App\Models\Configuracion as ModelsConfiguracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Configuracion extends Controller
{

    public function configuracion()
    {
        if (Auth::check()) {
            $data = ModelsConfiguracion::where('id', 1)->get();
            return view('admin.configuracion')->with('data', $data[0]);
        } else {
            return redirect('login');
        }
    }
    public function configuracionpost(Request $request)
    {
        if (Auth::check()) {
            

            $configuracion = ModelsConfiguracion::find(1, 'id');
                $configuracion->nombre_invitacion=ucwords(strtolower($request->nombre_invitacion));
                $configuracion->papa_novio=ucwords(strtolower($request->papa_novio));
                $configuracion->mama_novio=ucwords(strtolower($request->mama_novio));
                $configuracion->papa_novia=ucwords(strtolower($request->papa_novia));
                $configuracion->mama_novia=ucwords(strtolower($request->mama_novia));
                $configuracion->padrino=ucwords(strtolower($request->padrino));
                $configuracion->madrina=ucwords(strtolower($request->madrina));
                $configuracion->titulo_mesa=$request->titulo_mesa;
                $configuracion->mensaje=$request->mensaje;
                $configuracion->mesa=$request->mesa;
                $configuracion->mensaje_whatsapp= $request->mensaje_whatsapp;

            $registro = $configuracion->save();

            if ($registro) {
                return back()->with('success', 'insert success');
            } else {
                return back()->with('fail', 'insert failed');
            }

        } else {
            return redirect('login');
        }
    }
}
