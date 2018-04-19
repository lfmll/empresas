@extends('layouts.app')
@section('content')
<style>
.product {
  width: 600px;
  max-width: 100%;
  padding: 1em;
  position: relative;
}
.product-container .product {
  margin-top: 2em;
}
.product-avatar {
  max-width: 10%;
}

</style>
    
<div class="container text-center">
    <div class="card product text-left">
        <h1>{{$empresa->nombre}}</h1>
        <div class="row">
            <div class="col-sm-6 col-xs-12"></div>
            @if($empresa->extension)
            <img src="{{url("imagen/$empresa->id.$empresa->extension")}}" class="product-avatar">
            @endif
            <div class="col-sm-6 col-xs-12">
                <p><strong>Nit</strong></p>
                <p>{{$empresa->nit}}</p>
                <p><strong>Telefono</strong></p>
                <p>{{$empresa->telefono}}</p>
                <p><strong>Correo</strong></p>
                <p>{{$empresa->correo}}</p>
                <p>{{$empresa->id}}</p>
                {{$empresa->extension}}
            </div>
        </div>
    </div>
</div>
@endsection