@extends('layouts.app')
@section('content')
@if (Session::has('message'))
<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{Session::get('message')}}</strong> 
</div>
@endif
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Lista de Ordenes</h2></div>

                <div class="panel-body">
 				<table class="table">
					<thead>
						<tr>
							<th>Número</th>
							<th>Sucursal</th>
							<th>Chasis</th>
							<th>Apertura</th>
							
							<th>Retiro</th>
							<th>Estado</th>
							<th>Operación</th>				
						</tr>
					</thead>
					<tbody>
						@foreach ($ordens as $orden)
						@if ($orden->estado == "ENVIADA")
						<tr class="bg-warning">
						@else
						<tr class="bg-success">
						@endif							
							<td>{{$orden->numero}}</td>
							<td>{{$orden->sucursal}}</td>
							<td>{{$orden->chasis}}</td>
							<td>{{$orden->apertura}}</td>				
							<td>{{$orden->retiro}}</td>
							<td>{{$orden->estado}}</td>
							<td>{{link_to_route('orden.show', $title = "Ver", $parameters = $orden->id, $attributes = ['class'=>'btn btn-primary'])}}
								{{link_to_route('orden.edit', $title = "Editar", $parameters = $orden->id, $attributes = ['class'=>'btn btn-primary'])}}
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
				{!!$ordens->render()!!}

                </div>
            </div>
        </div>
    </div>




@stop