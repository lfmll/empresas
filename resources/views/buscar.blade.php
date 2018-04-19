@extends('layouts.app')

@section('content')
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    div#general{
        margin: auto;
        margin-top: 10px;        
    }
    div#paneles{
        float: right;
        width: 200px;
        height: 500px;
    }
    div#busqueda{
        width: 400px;
        height: 100px;
        
    }
</style>

<div class="container">
    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buscador
                    <div id="general" class="panel-body">
                        <div id="busqueda" class="col-md-6">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div> 
                        <div id="paneles">
                        
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Rubros</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <span class="badge">14</span>
                                        Hola
                                    </ul>
                                </div>
                            </div>                          
                        
                        
                        
                            <div class="panel panel-success right">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Etiquetas</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <span class="badge">4</span>
                                        fernando
                                    </ul>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>                
            
        </div>
    </div>
</div>
@endsection