		<div class="from-group">
			{!!Form::label('Orden')!!}<br>
			{!!Form::number('name', '000000')!!}			
		</div>
		<div class="from-group">
			{!!Form::label('Sucursal')!!}<br>
			{!!Form::text('sucursal',null,['class'=>'form-control','placeholder'=>'Ingrese sucursal'])!!}			
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
			{!!Form::label('Fecha cierre')!!}<br>
			{!!Form::date('cierre', \Carbon\Carbon::now())!!}
		</div>
		<div class="from-group">
			{!!Form::label('Observacion')!!}
			{!!Form::text('observaciones',null,['class'=>'form-control','placeholder'=>'Comentarios'])!!}			
		</div>		
