@extends('layouts.app')
@section('content')
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('alerts.request')
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Actualizar orden</h2></div>

                <div class="panel-body">
 					
					{!!Form::model($orden,['route' => ['orden.update',$orden->id],'method'=>'PUT'])!!}
						@include('orden.forms.ordenform')
					<br>	

                    <br>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            {!!Form::submit('Actualizar orden',['class'=>'btn btn-primary'])!!}                     
                            {!!Form::close()!!} 
                        </div>

                        <div class="col-md-3 text-center">
                            {!!Form::open(['route'=>['orden.destroy',$orden->id],'method'=>'DELETE'])!!}
                            {!!Form::submit('Eliminar orden',['class'=>'btn btn-danger'])!!}  
                            {!!Form::close()!!}                             
                        </div>
                        <!--<div class="col-md-3 text-center">
                            {!!Form::open(['route'=>['reclamo.create',$orden->id],'method'=>'GET'])!!}
                            {!!Form::submit('Crear reclamo',['class'=>'btn btn-primary'])!!}  
                            {!!Form::close()!!}                                
                        </div>-->
                        <div class="col-md-3 text-center">
                            {{link_to_route('crearreclamo', $title = "Crear reclamo", $parameters = $orden->id, $attributes = ['class'=>'btn btn-primary'])}}
                        </div>                          
                        <div class="col-md-3 text-center">
                            {{link_to_route('reclamo.show', $title = "Ver reclamos", $parameters = $orden->id, $attributes = ['class'=>'btn btn-primary'])}}
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop