@extends('layouts.admin')
@section('content')
@include('alerts.request')
	<h2>Crear nuevo usuario</h2>
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		@include('usuario.forms.usr')
	<br>	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
	{!!Form::close()!!}	
@stop