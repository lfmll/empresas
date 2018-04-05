@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Etiquetas</h1>
    </div>
    <div class="container">
        <table class="table table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>            
            <td>Accion</td>
        </tr>
        </thead>
        <tbody>
             @foreach($etiquetas as $etiqueta)
                 <tr>
                     <td>{{$etiqueta->id}}</td>
                     <td>{{$etiqueta->nombre}}</td>                     
                     <td>
                         <a href="{{url('/etiqueta/'.$etiqueta->id.'/edit')}}"class="btn btn-primary">
                             Editar
                         </a>
                     </td>
                 </tr>
                 @endforeach
        </tbody>
        </table>
        <div class="floating">
        <a href="{{url('/etiqueta/create')}}" class="btn btn-primary btn-fab">
            <i class="material-icons">add</i>
        </a>
        </div>
    </div>
    @endsection