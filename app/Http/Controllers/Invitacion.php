<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use App\Models\Imagenes;
use App\Models\Invitados;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth as Acceso;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Invitacion extends Controller
{
    public function viewwelcome()
    {
        
        if (Acceso::check()) {
            $novia_1 = Invitados::where('novios', 'Chanell')->whereNotNull('adultos')->where('estatus', null)->sum('adultos');
            $novia_2 = Invitados::where('novios', 'Chanell')->whereNull('adultos')->where('estatus', null)->count();
            $novia = $novia_1 + $novia_2;

            $novio_2 = Invitados::where('novios', 'Alonso')->whereNotNull('adultos')->where('estatus', null)->sum('adultos');
            $novio_1 = Invitados::where('novios', 'Alonso')->whereNull('adultos')->where('estatus', null)->count();
            $novio = $novio_1 + $novio_2;

            $niños[0] = Invitados::where('novios', 'Chanell')->where('estatus', null)->sum('ninos');
            $niños[1] = Invitados::where('novios', 'Alonso')->where('estatus', null)->sum('ninos');
            return view('admin.index')->with('Invitados_novio', $novio)->with('Invitados_novia', $novia)->with('niños', $niños);
        } else {
            return view('admin.login');
        }
    }
    public function invitaciones(Request $request)
    {
        if (Acceso::check()) {


            $eliminado = $request->query('eliminado')|| null;
         

            $invitados = Invitados::
              when($request->query('nombre'), function ($query) use ($request) {$query->where('nombre', 'LIKE', '%' . $request->query('nombre') . '%'); })
            ->when($request->query('telefono'), function ($query) use ($request) {$query->where('telefono', 'LIKE', '%' . $request->query('telefono') . '%');})
            ->when($request->query('novios'), function ($query) use ($request) {$query->where('novios', 'LIKE', '%' . $request->query('novios') . '%');})
            ->where('estatus', null)
            ->orderBy('novios', 'desc')
                ->get();
                $mensaje = Configuracion::where('id',1)->get();
                if(empty($mensaje[0]->mensaje_whatsapp)){
                    $mensaje ="Chanell y Alonso están felices de que acudas a la celebración de su boda, mas detalles da clic en el link --enlace--";
                }
            return view('admin.invitaciones')->with('invitados', $invitados)->with('enlace', $mensaje[0]->mensaje_whatsapp);
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
        $principal[0] = Imagenes::where('posision', '=', 0)->where('estatus', '0')->get();
        $principal[1] = Imagenes::where('posision', '=', 1)->where('estatus', '0')->get();
        $principal[2] = Imagenes::where('posision', '=', 2)->where('estatus', '0')->get();
        $galeria = Imagenes::where('posision', '=', value: 3)->where('estatus', '0')->get();
        $data = Configuracion::where('id', '1')->get();
        if ($invitado != null) {

            $usuarios = Invitados::where('telefono', $invitado)->get();
            if ($usuarios->isEmpty()) {
                return view('welcome')->with('imagen', $principal)->with('galeria', $galeria);
            } else {
                /* dd($data[0]->mesa); */
                return view('welcome')->with('invitado', $usuarios[0])->with('imagen', $principal)->with('galeria', $galeria)->with('data',$data[0]);

            }
        }
        return view('welcome')->with('imagen', $principal)->with('galeria', $galeria);
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
            $data = Invitados::where('id', $invitacion)->get();
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
            $registro = Invitados::find($invitacion);
            $registro->estatus = 1;
            $registro = $registro->save();
            if ($registro) {
                return back()->with('success', 'Se borro correctamente');
            } else {
                return back()->with('fail', 'Error al eliminar');
            }
        }
    }
}
