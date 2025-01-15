<?php

namespace App\Http\Controllers;

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
    public function agregarinvitacionpost(){
        return view('admin.agregarinvitacion');
    }

    public function invitadoEspecial($invitado){
        return view('welcome')->with('invitado', $invitado);
    }
}
