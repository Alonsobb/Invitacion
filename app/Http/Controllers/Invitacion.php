<?php

namespace App\Http\Controllers;

use App\Models\Invitados;
use DragonCode\Contracts\Cashier\Auth\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as Acceso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Invitacion extends Controller
{
    public function viewwelcome()
    {
        if (Acceso::check()) {
            return view('admin.index');
        } else {
            return view('admin.login');
        }
    }
    public function invitaciones(Request $request)
    {
        if (Acceso::check()) {

            $invitados = Invitados::when($request->query('nombre'), function ($query) use ($request) {
                $query->where('nombre', 'LIKE', '%' . $request->query('nombre') . '%');
            })->when($request->query('telefono'), function ($query) use ($request) {
                $query->where('telefono', 'LIKE', '%' . $request->query('telefono') . '%');
            })
            ->get();

            return view('admin.invitaciones')->with('invitados', $invitados);
        } else {
            return view('admin.login');
        }
    }
    public function agregarinvitacion()
    {
        if (Acceso::check()) {
            return view('admin.agregarinvitacion');
        } else {
            return view('admin.login');
        }
    }
    public function agregarinvitacionpost(Request $request)
    {
        $request->validate([
            'nombre' => 'required|bail',
            'telefono' => 'required|bail',
            'adultos' => 'nullable|numeric',
            'ninos' => 'nullable|numeric',
        ]);

        $invitados = new Invitados();

        $invitados->nombre = ucwords(strtolower($request->nombre));
        $invitados->telefono = str_replace(' ', '', $request->telefono);
        $invitados->adultos = $request->adultos;
        $invitados->novios = Acceso::user()->name;
        $invitados->ninos = $request->ninos;
        $invitados->comentario = $request->comentario;
        /*  $invitados->token =  str_pad(bin2hex(strrev($request->telefono)), 16, "0"); */

        $registro = $invitados->save();

        if ($registro) {
            return back()->with('success', 'insert success');
        } else {
            return back()->with('fail', 'insert failed');
        }



    }

    public function invitadoEspecial($invitado = null)
    {
        if ($invitado != null) {

            $usuarios = Invitados::where('telefono', $invitado)->get();
            if ($usuarios->isEmpty()) {
                return view('welcome');
            } else {
                return view('welcome')->with('invitado', $usuarios[0]);

            }
        }
        return view('welcome');
    }
    public function telefono(Request $request)
    {
        $path = route('invitado', [$request->telefono]);
        return redirect()->to($path);
    }
    public function asistencia(Request $request)
    {
        $usuarios = Invitados::where('telefono', $request->telefono)->get();
        if ($usuarios->isEmpty()) {
            return back();
        } else {
            if ($request->asistencia == 1) {
                $asistencia = 'Si Asistire';
            } else {
                $asistencia = 'No Asistire';
            }
            DB::table('invitados')->where('telefono', $request->telefono)->update(['telefono_personal' => $request->telefono_personal, 'asistiran' => $asistencia, 'comentario_personal' => $request->comentario_personal]);
            return back();
        }
    }


    public function editinvitacion($invitacion)
    {
        if (Acceso::check()) {
           $data = Invitados::where('telefono',$invitacion)->get();
            return view('admin.agregarinvitacion')->with('data', $data[0]);
        } else {
            return view('admin.login');
        }
    }
    public function editinvitacionpost(Request $request)
    {
        $invitados = Invitados::find($request->id);
        $invitados->nombre = ucwords(strtolower($request->nombre));
        $invitados->telefono = str_replace(' ', '', $request->telefono);
        $invitados->adultos = $request->adultos;
        $invitados->novios = Acceso::user()->name;
        $invitados->ninos = $request->ninos;
        $invitados->comentario = $request->comentario;
        $registro = $invitados->save();
        if ($registro) {
            $path = route('invitaciones');
        return redirect()->to($path);
        } else {
            return back()->with('fail', 'insert failed');
        }
    
    }

    public function eliminarinvitacion($invitacion)
    {
        if (Acceso::check()) {
           $registro = Invitados::where('id',$invitacion)->delete();
           if ($registro) {
            return back()->with('success', 'Se borro correctamente');
        } else {
            return back()->with('fail', 'Error al eliminar');
        }
        } 
    }
}
