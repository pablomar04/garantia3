@extends('layouts.admin')
@section('content')
	<h1>Crear Usuario</h1>
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		@include('usuario.forms.usr')
	<br>	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
	{!!Form::close()!!}	
@stop