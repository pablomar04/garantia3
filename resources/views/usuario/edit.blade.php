@extends ('layouts.admin')
@section('content')
<h1>Editar un usuario</h1>
	{!!Form::model($user,['route' => ['usuario.update', $user->id], 'method' => 'PUT'])!!}
		@include('usuario.forms.usr')	
	<br>
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}	
	<br>
	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	
	{!!Form::close()!!}	
@stop