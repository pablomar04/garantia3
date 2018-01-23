@extends('layouts.admin')
<?php $message=Session::get('message');?>

@section('content')
@if (Session::has('message'))
<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{Session::get('message')}}</strong> 
</div>
@endif
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