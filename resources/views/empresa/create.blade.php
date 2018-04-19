@extends("layouts.app")
@section("content")
<div class="container white">
    <h1>Nueva Empresa</h1>
    @include('empresa.form',['empresa'=>$empresa,'url'=>'/empresa','method'=>'POST'])
</div>
@endsection

