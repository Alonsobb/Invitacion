<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('dashboard');
        }else{
            return view('admin.login');
        }
    }
    public function login_post(Request $request){
        $request->validate([
			'user' => 'required',
			'password' => 'required',
		]);
       $remenber = 0;
        if($request->remember){
            $remenber= 1;
        }
if(Auth::attempt(['user'=>$request->user, 'password'=>$request->password, 'active' => $remenber])){
    $path = route('dashboard');
    return redirect()->to($path );
}else{
    return redirect()->back()->withErrors(['login'=>'Usuario o contraseña incorrectos']);
}

    }
    public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
		}
		return redirect("/login");
	}
}
