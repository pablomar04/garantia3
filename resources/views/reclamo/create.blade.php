@extends('layouts.app')
@section('content')

	<div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@include('alerts.success')
        	@include('alerts.request')
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Crear nuevo reclamo para orden {!!$orden!!}</h2></div>

                <div class="panel-body">
                    {!!Form::open(['route'=>'reclamo.store','method'=>'POST'])!!}
                        @include('reclamo.forms.reclamoform')
                    <br>    
                    {!!Form::submit('Crear reclamo',['class'=>'btn btn-primary'])!!}                      
                    {!!Form::close()!!} 

                </div>
            </div>
        </div>
    </div>




@stop