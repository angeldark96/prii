<?php

namespace App\Http\Controllers\prii;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prii;

class PriiController extends Controller
{
    public  function  index()
    {
        return view('prii.crearprii');
    }

    public function  guardardata(Request $request)
    {

        $find = Prii::where('medicion', '=', $request->get('medicion'))->first();
        if (!$find) {
            $find = new Prii();
        }
        $find->lugar                = $request->get('lugar');
        $find->cliente              = $request->get('cliente') ;
        $find->um                   = $request->get('um')  ;
        $find->tipo_explotacion     = $request->get('tipo_explotacion')  ;
        $find->minerales            = $request->get('minerales') ;
        $find->latitud              = $request->get('latitud') ;
        $find->longitud             = $request->get('longitud');
        $find->medicion             = $request->get('medicion');
        $find->profundidad          = $request->get('profundidad');
        $find->nivel_agua           = $request->get('nivel_agua');
        $find->nivel_organico       = $request->get('nivel_organico') ;
        $find->nivel_roca           = $request->get('nivel_roca');
        $find->save();

        return $find;

    }

    public function listarprii()
    {
        $lista = Prii::all();

        return view('prii.listarprii',compact('lista'));
    }

    public function showprii($prii)
    {
        $show = Prii::where('medicion',$prii)->first();


        return view('prii.showprii',compact('show'));
    }


}
