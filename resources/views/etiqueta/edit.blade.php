@extends("layouts.app")
@section("content")
    <div class="container white">
        <h1>Modificar Etiqueta</h1>
        @include('etiqueta.form',['etiquetas'=>$etiquetas,'url'=>'/etiqueta/'.$etiquetas->id,'method'=>'PATCH'])
    </div>
    @endsection