@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('alerts.request')
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Orden {!!$orden->numero!!}</h2></div>

                <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4"><h4>{!!$orden->chasis!!}</h4></div>
                      <div class="col-md-4"><h4>{!!$orden->sucursal!!}</h4></div>
                        @if ($orden->estado == "ENVIADA")
                        <div class="col-md-4 bg-warning"><h4>{!!$orden->estado!!}</h4></div>  
                        @else
                        <div class="col-md-4 bg-success"><h4>{!!$orden->estado!!}</h4></div>
                        @endif                                               
                    </div>
                    <div class="row">
                      <div class="col-md-4"><h4>Apertura: {!!$orden->apertura!!}</h4></div>
                      <div class="col-md-4"><h4>Cierre: {!!$orden->cierre!!}</h4></div>
                      <div class="col-md-4"><h4>Retiro: {!!$orden->retiro!!}</h4></div>                                             
                    </div>
                    <div class="row">
                      <div class="col-md-12"><h4>Observaciones: {!!$orden->observaciones!!}</h4></div>                                            
                    </div>                    
                </div>
            </div>
            <button id="volver" class="btn btn-primary">Volver</button>   
        </div>
    </div>
@stop