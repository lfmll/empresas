@extends("layouts.app")
@section("content")
     
    <div class="big-padding text-center blue-grey white-text">
        <h1>Etiquetas</h1>
    </div>
    
    <div class="container">
        
        <a href="{{url('/etiqueta/create')}}" class="btn btn-info">
            Registrar Nueva Etiqueta
        </a>
        {{ Form::open(['route' => 'etiqueta.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
		
        <div class="form-group">
            {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'buscar x nombre---'])}}     
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </div>    
        

    {{ Form::close() }}
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
                            Eliminar
                         </a>
                     </td>
                 </tr>
                 @endforeach
        </tbody>
        </table>
        <div class="text-center">		
            {{ $etiquetas->render() }}
        </div>        
    </div>
@endsection