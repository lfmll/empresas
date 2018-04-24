@extends("layouts.app")
@section('content')

<h3> Pagina Principal </h3>
    <div class="row">
	<div class="col-md-8">
            <div class="row">               
		@foreach($empresas as $em)				
                <div class="col-md-6">
                    <div class="panel panel-default">
			<div class="panel-body">                                                        

                                <hr>
                            <i class="fa fa-folder-open-o"></i> <a href="{{ route('front.search.rubro', $em->rubro->nombre) }}">{{ $em->rubro->nombre }}</a>
                                <div class="pull-right"></div>
			</div>					
                    </div>
		</div>				
		@endforeach
            </div>
            
        </div>
	<div class="col-md-4">
            @include('front.parcial.aside')
	</div>
    </div>


@endsection
