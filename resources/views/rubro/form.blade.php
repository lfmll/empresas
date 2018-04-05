{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
    {{Form::text('nombre',$rubros->nombre,['class'=>'form-control','placeholder'=>'nombre'])}}
</div>

<div class="form-group">
    {{Form::textarea('descripcion',$rubros->descripcion,['class'=>'form-control','placeholder'=>'descripcion del rubro'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/rubro')}}"> Regresar al listado producto
    </a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}