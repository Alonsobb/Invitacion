<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usuarios extends Controller
{
    public function usuarios(){
        if(Auth::check()){
            $data = User::all();
            return view('admin.usuarios')->with('usuarios' , $data);
        }else{
            return view('admin.login');
        }
    }
}
