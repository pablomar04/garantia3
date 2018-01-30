		<div class="from-group">
			{!!Form::label('Número')!!}<br>
			{!!Form::number('numero')!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Sucursal')!!}<br>
			<!--{!!Form::text('sucursal',null,['class'=>'form-control','placeholder'=>'Ingrese sucursal'])!!}	-->
			{!!Form::select('sucursal', ['BALCARCE' => 'BALCARCE', 'TANDIL' => 'TANDIL', 'COLON' => 'COLON', 'SALTA'=>'SALTA'])!!}
		</div>	
		<div class="from-group">
			{!!Form::label('Chasis')!!}
			{!!Form::text('chasis',null,['class'=>'form-control','placeholder'=>'Ingrese chasis'])!!}			
		</div>				
		<div class="from-group">
			{!!Form::label('Fecha apertura')!!}<br>
			{!!Form::date('apertura', \Carbon\Carbon::now())!!}
		</div>		
		<div class="from-group">
			{!!Form::label('Fecha cierre')!!}<br>
			{!!Form::date('cierre', \Carbon\Carbon::now())!!}
		</div>
		<div class="from-group">
			{!!Form::label('Fecha retiro')!!}<br>
			{!!Form::date('retiro', \Carbon\Carbon::now())!!}
		</div>
		<div class="from-group">
			{!!Form::label('Estado')!!}<br>
			<!--{!!Form::text('sucursal',null,['class'=>'form-control','placeholder'=>'Ingrese sucursal'])!!}	-->
			{!!Form::select('estado', ['ENVIADA' => 'ENVIADA', 'RECIBIDA' => 'RECIBIDA'])!!}
		</div>	
		<div class="from-group">
			{!!Form::label('Observacion')!!}
			{!!Form::text('observaciones',null,['class'=>'form-control','placeholder'=>'Comentarios'])!!}			
		</div>		
