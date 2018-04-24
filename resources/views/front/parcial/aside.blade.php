<div class="panel panel-primary">
			
    <div class="panel-heading">
	<h3 class="panel-title">Categorias</h3>
    </div>
    <div class="panel-body">
	<ul class="list-group">
	@foreach($empresas as $emp)
	<li class="list-group-item">
            <span class="badge">{{ $emp->count() }}</span>
		<a href="{{ route('front.search.rubro', $emp->rubro->nombre) }}">
		{{ $emp->rubro->nombre}}
		</a>						
	</li>					
	@endforeach
	</ul>
    </div>
</div>

<div class="panel panel-info">
    <div class="panel-heading">
	<h3 class="panel-title">Etiquetas</h3>
	</div>

    <div class="panel-body">
		
    @foreach($empresas as $et)			
        <span class="label label-default">			
            <a href="{{ route('front.search.etiqueta', $et->etiquetas->nombre) }}">
		{{ $et->etiquetas->nombre}}
            </a>

	</span>
    @endforeach

    </div>
</div>
