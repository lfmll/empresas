@extends("layouts.app")
@section("content")
    <div class="container white">
        <h1>Modificar Rubro</h1>
        @include('rubro.form',['rubro'=>$rubros,'url'=>'/rubro/'.$rubros->id,'method'=>'PATCH'])
    </div>
    @endsection