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