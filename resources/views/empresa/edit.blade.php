@extends("layouts.app")
@section("content")
<div class="container white">
    <h1>Editar Empresa</h1>
    <!-- Formulario -->
    @include('empresa.form',['empresa'=>$empresa,'url'=>'/empresa/'.$empresa->id,'method'=>'PATCH'])
</div>

@endsection
