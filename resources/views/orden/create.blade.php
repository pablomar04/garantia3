@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('alerts.request')
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Crear nueva orden</h2></div>

                <div class="panel-body">
                    
                    {!!Form::open(['route'=>'orden.store','method'=>'POST'])!!}
                        @include('orden.forms.ordenform')
                    <br>    
                    {!!Form::submit('Crear orden',['class'=>'btn btn-primary'])!!}                      
                    {!!Form::close()!!} 
                </div>
            </div>
        </div>
    </div>
@stop