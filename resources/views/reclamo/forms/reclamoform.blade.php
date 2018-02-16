		<div class="from-group">
			{!!Form::label('Version')!!}<br>
			{!!Form::number('numero')!!}			
		</div>
		{!!Form::hidden('orden',$orden)!!}	
		<div class="from-group">
			{!!Form::label('Reclamista')!!}<br>
			<!--{!!Form::text('sucursal',null,['class'=>'form-control','placeholder'=>'Ingrese sucursal'])!!}	-->
			{!!Form::select('reclamista', ['JUAN PABLO' => 'JUAN PABLO', 'NAHUEL' => 'NAHUEL'])!!}
		</div>				
		<div class="from-group">
			{!!Form::label('Fecha entrada')!!}<br>
			{!!Form::date('entrada', \Carbon\Carbon::now())!!}
		</div>
		<div class="from-group">
			{!!Form::label('Tipo')!!}<br>
			{!!Form::select('tipo', ['1-10' => '1-10', '1-21' => '1-21', '1-2I' => '1-2I', '1-31' => '1-31','1-3I' => '1-3I','2-10' => '2-10', '2-SK' => '2-SK','7-10' => '7-10','7-90' => '7-90', '9-10' => '9-10'])!!}
		</div>	
		<div class="from-group">
			{!!Form::label('Mano de obra')!!}<br>
			{!!Form::number('numero',0)!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Material')!!}<br>
			{!!Form::number('numero',0)!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Mano de obra de tercero')!!}<br>
			{!!Form::number('numero',0)!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Material de tercero')!!}<br>
			{!!Form::number('numero',0)!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Total')!!}<br>
			{!!Form::number('numero',0)!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Lote')!!}<br>
			{!!Form::number('numero')!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Fecha de lote')!!}<br>
			{!!Form::date('fecha_lote')!!}
		</div>	
		<div class="from-group">
			{!!Form::label('Estado')!!}<br>
			{!!Form::select('estado', ['PENDIENTE' => 'PENDIENTE', 'ACREDITADO' => 'ACREDITADO', 'RECHAZADO' => 'RECHAZADO'])!!}
		</div>						

		<div class="from-group">
			{!!Form::label('Observacion')!!}
			{!!Form::text('observaciones',null,['class'=>'form-control','placeholder'=>'Comentarios'])!!}			
		</div>		