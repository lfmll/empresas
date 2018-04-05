{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
    {{Form::text('nombre',$etiquetas->nombre,['class'=>'form-control','placeholder'=>'nombre'])}}
</div>

<div class="form-group text-right">
    <a href="{{url('/etiqueta')}}"> Regresar al listado producto
    </a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}