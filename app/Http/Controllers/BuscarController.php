<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
use App\Rubro;
use App\Etiqueta;

class BuscarController extends Controller{
    public function index(){
        $empresa= Empresa::orderBy('id','ASC')->paginate(5);
        $empresa->each(function($empresa){
            $empresa->rubro;            
        });
        return view("front.index")->with('empresas',$empresa);
    }
    
    public function searchRubro($nombre){
        $rubro= Rubro::searchRubro($nombre)->first();
        $empresas=$rubro->empresa()->paginate(5);
        $empresas->each(function($empresas){
            $empresas->rubro;
        });                  
        return view('front.index')->with('empresas',$empresas);
    }
    public function searchEtiqueta($nombre){
        $etiqueta= Etiqueta::searchEtiqueta($nombre)->get();
        $empresas=$etiqueta->empresas()->paginate(5);
        $empresas->each(function($empresas){
            $empresas->rubro;
        });
        return view('front.index')->with('empresas',$empresas);
    }
}

