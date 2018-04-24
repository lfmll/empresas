<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Rubro;
use App\Etiqueta;
use DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     
        $nombre=trim($request->get('nombre'));
        
        $aux=strtolower($nombre);
//        $tabla=str_word_count($aux,1);
//        dd($tabla);
        $empresa= Empresa::nombre($nombre)->orderBy('nombre','ASC')->paginate(4);
        
//        $etiqueta= Etiqueta::searchEtiqueta('venta')->first();
//        $empresa=$etiqueta->empresas()->paginate(4);
        
        return view("empresa.index",["empresa"=>$empresa]);
    }
    
    public function findEmpresaxEtiqueta(Request $request){
        $aux=$request->get('nombre');
        $aux= trim($request);
        $nombre= strtolower($aux);
        $empresa=DB::select("call empresas_x_etiqueta(".$request.")");
        return view('empresa.index',["empresa"=>$empresa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros= Rubro::orderBy('nombre','ASC')->pluck('nombre','id');
        $etiquetas= Etiqueta::orderBy('nombre','ASC')->pluck('nombre','id');
        $empresa=new Empresa();
        return view("empresa.create",["empresa"=>$empresa])
                ->with('rubros',$rubros)
                ->with('etiquetas',$etiquetas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile=$request->hasFile('cover') && $request->cover->isValid();
        
        $empresa=new Empresa($request->all());
        $empresa->nombre=$request->nombre;
        $empresa->nit=$request->nit;
        $empresa->telefono=$request->telefono;    
        $empresa->correo=$request->correo;
        
        if ($hasFile){
            $extension=$request->cover->extension();
            $empresa->extension=$extension;
        }
        $empresa->estado="habilitado";
        if ($empresa->save()){
            $request->cover->move('imagen',"$empresa->id.$extension");
            $empresa->etiquetas()->sync($request->etiquetas);
            return redirect("/empresa");
        } else {
            return view("empresa.create",["empresa"=>$empresa]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa= Empresa::find($id);
        return view('empresa.show',['empresa'=>$empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa= Empresa::find($id);
        $rubros= Rubro::orderBy('nombre','ASC')->pluck('nombre','id');
        $etiquetas= Etiqueta::orderBy('nombre','ASC')->pluck('nombre','id');
        return view("empresa.edit",["empresa"=>$empresa])
                ->with('rubros',$rubros)
                ->with('etiquetas',$etiquetas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empresa= Empresa::find($id);
        $hasFile=$request->hasFile('cover')&& $request->cover->isValid();
        $empresa->nombre=$request->nombre;
        $empresa->nit=$request->nit;
        $empresa->telefono=$request->telefono;
        $empresa->correo=$request->correo;
        if ($hasFile){
            $extension=$request->cover->extension();
            $empresa->extension=$extension;
        }
        $empresa->fill($request->all());
        if ($empresa->save()){
            if ($hasFile){
                $request->cover->move('imagen',"$empresa->id.$extension");
            }
            return redirect("/empresa");
        } else {
            return view("empresa.edit",["empresa"=>$empresa]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
