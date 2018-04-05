<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etiqueta;

class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etiquetas=Etiqueta::all();
        return view("etiqueta.index",["etiquetas"=>$etiquetas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etiquetas=new Etiqueta();
        return view("etiqueta.create",["etiquetas"=>$etiquetas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etiquetas=new Etiqueta;
        $etiquetas->nombre=$request->nombre;
        if ($etiquetas->save()){
            return redirect("/etiqueta");
        } else {
            return view("etiqueta.create",["etiquetas"=>$etiquetas]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etiquetas= Etiqueta::find($id);
        return view("etiqueta.edit",["etiquetas"=>$etiquetas]);
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
        $etiquetas= Etiqueta::find($id);
        $etiquetas->nombre=$request->nombre;
        if ($etiquetas->save()){
            return redirect("/etiqueta");
        } else {
            return view("etiqueta.edit",["etiqueta"=>$etiquetas]);
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
