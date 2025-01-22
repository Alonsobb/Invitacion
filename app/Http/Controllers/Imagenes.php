<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Imagenes as modelimg;
use Illuminate\Support\Facades\Auth ;

class Imagenes extends Controller
{


    public function pageImages()
    {if (Auth::check()) {
        $principal[0] = modelimg::where('posision', '=', 0)->where('estatus','0')->get();
        $principal[1] = modelimg::where('posision', '=', 1)->where('estatus','0')->get();
        $principal[2] = modelimg::where('posision', '=', 2)->where('estatus','0')->get();
        
        $galeria =  modelimg::where('posision', '=', value: 3)->where('estatus','0')->get();


        return view('admin.imagenes')->with('imagen', $principal)->with('galeria', $galeria);
    }
    else{

    }
    }
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

            if($request->principal != 3){
                modelimg::where('posision', $request->principal)->update(['estatus'=> '1']);
            }
      
            $imagen = new modelimg();
            $imagen ->path= $path;
            $imagen -> posision=$request->principal;
            $imagen -> name=$file->getClientOriginalName();
            $imagen ->user= Auth::user()->name;
            $imagen -> estatus=0;
          $addimg= $imagen->save();
        
           return back()->withErrors('addimg');
        
    }


    public function show($filename)
    {
        return $url = Storage::url("uploads/{$filename}");

       /*  return view('file.show', ['url' => $url]); */
    }
    public function eliminarimagen(Request $request)
    {
        $request->validate([
            'idImg' => 'numeric',
        ]);
        modelimg::where('id', $request->idImg)->update(['estatus'=> '1']);
        return back();
    }


}
