@extends('layouts.admin')
@include('alerts.success')
@section('content')

	<h2>Lista de usuarios</h2>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operacion</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{link_to_route('usuario.edit', $title = "Editar", $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop