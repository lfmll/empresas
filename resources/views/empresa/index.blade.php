@extends("layouts.app")
@section("content")
    <div class="big-padding text-center blue-grey white-text">
        <h1>Empresa</h1>
    </div>	          
    <div class="container">
        <a href="{{url('/empresa/create')}}" class="btn btn-info">            
            Nueva Empresa
        </a>
    
        {{ Form::open(['route' => 'empresa.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
    <div class="form-group">
        {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'buscar---'])}}     
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
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>NIT</td>
                    <td>Telefono</td>
                    <td>Correo</td>
                    <td>Rubro</td>                    
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($empresa as $emp)
                    <tr>
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->nombre}} </td>
                        <td>{{$emp->nit}} </td>
                        <td>{{$emp->telefono}}</td>                        
                        <td>{{$emp->correo}}</td>
                        <td>{{$emp->rubro->nombre}}</td>
                                                                                                    
                        <td>
                            <a href="{{url("/empresa/$emp->id")}}"class="btn btn-primary">Ver</a>
                            <a href="{{url('/empresa/'.$emp->id.'/edit')}}" class="btn btn-info">
                            Editar
                            </a>                            
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="text-center">		
            {{ $empresa->render() }}
        </div>       
    </div>

@endsection