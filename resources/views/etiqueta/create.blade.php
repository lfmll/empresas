@extends("layouts.app")
@section("content")
    <div class="container white">
        <h1>Nueva Etiqueta</h1>
        @include('etiqueta.form',['etiquetas'=>$etiquetas,'url'=>'/etiqueta','method'=>'POST'])
    </div>
    @endsection