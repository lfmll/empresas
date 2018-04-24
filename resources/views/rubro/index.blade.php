@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Rubro</h1>
    </div>
    <div class="container">
        <a href="{{url('/rubro/create')}}" class="btn btn-info">
            Nuevo Rubro
        </a>
        <hr>
        <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Accion</td>
        </tr>
        </thead>
        <tbody>
             @foreach($rubros as $rubro)
                 <tr>
                     <td>{{$rubro->id}}</td>
                     <td>{{$rubro->nombre}}</td>
                     <td>{{$rubro->descripcion}}</td>
                     <td>
                         <a href="{{url('/rubro/'.$rubro->id.'/edit')}}"class="btn btn-primary">
                             Editar
                         </a>
                     </td>
                 </tr>
                 @endforeach
        </tbody>
        </table>  
        {{ $rubros->render() }}
    </div>
    @endsection