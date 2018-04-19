@extends("layouts.app")
@section("content")
     
    <div class="big-padding text-center blue-grey white-text">
        <h1>Etiquetas</h1>
    </div>
    
    <div class="container">
    {!! Form::open(['route'=>'etiqueta.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
    <div class="input-group">
       {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Etiqueta..','aria-describedby'=>'buscar']) !!}
       <span class="input-group-addon" id="buscar"><span class="glyphicon glyphicon-search" aria-hidden="false"></span></span>
    </div>
    {!! Form::close() !!}
    <hr>
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
                         <a href="{{route('etiqueta.destroy',$etiqueta->id)}}" onclick="return confirm('¿Estas seguro de querer eliminar esta etiqueta?')" class="btn btn-danger">
                             <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                             
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