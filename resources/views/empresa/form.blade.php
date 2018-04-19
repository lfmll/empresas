{!! Form::open(['url' => $url, 'method' => $method, 'files'=>true ])!!}
<div class="form-group">
    {{Form::text('nombre',$empresa->nombre,['class'=>'form-control','placeholder'=>'nombre de la empresa','required'])}}    
</div>
<div class="form-group">
    {{Form::number('nit',$empresa->nit,['class'=>'form-control','placeholder'=>'numero de nit','required'])}}
</div>
<div class="form-group">
    {{Form::number('telefono',$empresa->telefono,['class'=>'form-control','placeholder'=>'telefono de la empresa','required'])}}    
</div>
<div class="form-group">
    {{Form::text('correo',$empresa->correo,['class'=>'form-control','placeholder'=>'correo de la empresa'])}}
</div>
<div class="form-group">
    {{Form::label('title','Logo')}}
    {{Form::file('cover')}}
</div>
<div class="form-group">
    {{Form::label('title','Rubros')}}
    {{Form::select('rubro_id',$rubros,null,['class'=>'form-control','placeholder'=>'seleccione una opcion','required'])}}
</div>
<div class="form-group">
    {{Form::label('title','Etiquetas')}}
    {{Form::select('etiquetas[]',$etiquetas,null,['class'=>'form-control','multiple','required'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/empresa')}}">Cancelar</a>
    <input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}