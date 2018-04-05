@extends("layouts.app")
@section("content")
    <div class="container white">
        <h1>Nuevo Rubro</h1>
        @include('rubro.form',['rubro'=>$rubros,'url'=>'/rubro','method'=>'POST'])
    </div>
    @endsection