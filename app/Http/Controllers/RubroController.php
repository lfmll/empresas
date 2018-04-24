<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rubro;

class RubroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubros= Rubro::orderBy('id','ASC')->paginate(4);
        return view("rubro.index",["rubros"=>$rubros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rubros=new Rubro();
        return view("rubro.create",["rubros"=>$rubros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rubros=new Rubro;
        $rubros->nombre=$request->nombre;
        $rubros->descripcion=$request->descripcion;
        if ($rubros->save()){
            return redirect("/rubro");
        } else {
            return view("rubro.create",["rubros"=>$rubros]);
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
        $rubro= Rubro::find($id);
        return view("rubro.edit",["rubros"=>$rubro]);
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
        $rubro= Rubro::find($id);
        $rubro->nombre=$request->nombre;
        $rubro->descripcion=$request->descripcion;
        if ($rubro->save()){
            return redirect("/rubro");
        }else{
            return view("rubro.edit",["rubro"=>$rubro]);
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
