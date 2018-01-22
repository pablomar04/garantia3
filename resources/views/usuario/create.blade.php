@extends('layouts.admin')
@section('content')
	<h1>Crear Usuario</h1>
	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
		<div class="from-group">
			{!!Form::label('Nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese nombre del usuario'])!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Correo electrónico')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electrónico'])!!}
		</div>		
		<div class="from-group">
			{!!Form::label('Password')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Password'])!!}
		</div>	
		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	
	{!!Form::close()!!}	
@stop