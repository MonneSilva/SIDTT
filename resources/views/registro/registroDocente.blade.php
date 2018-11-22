@extends('layouts.principal')
@section('content')
<head>
	<title>SIDTT - Registro</title>
</head>

	{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}
		
		{!!Form::label('Cédula Profesional:')!!}
		{!!Form::text('cedula',null,['class'=>'','placeholder'=>'ej. 1670589'])!!}
				
		{!!Form::label('Número de trabajador:')!!}
		{!!Form::text('nt',null,['class'=>'','placeholder'=>'ej: 2014670589'])!!}
				
		{!!Form::label('Academia')!!}
		{!!Form::select('academia', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Seleccione una opción...'])!!}
				
		{!!Form::label('Nombre(s)')!!}
		{!!Form::text('nom',null,['class'=>'','placeholder'=>'Ingresa tu nombre'])!!}
				
	 	{!!Form::label('Apellido Paterno')!!}
		{!!Form::text('aP',null,['class'=>'','placeholder'=>'Apellido Paterno'])!!}
			
		{!!Form::label('Apellido Materno')!!}
		{!!Form::text('aM',null,['class'=>'','placeholder'=>'Apellido Materno'])!!}
			
		{!!Form::label('Correo Electrónico')!!}
		{!!Form::email('email',null,['class'=>'','placeholder'=>'Ingresa tu correo electrónico'])!!}
				
		{!!Form::label('Confirma tu correo Electrónico')!!}
		{!!Form::email('cemail',null,['class'=>'','placeholder'=>'Ingresa tu correo electrónico'])!!}
				
		{!!Form::label('Contraseña')!!}
		{!!Form::password('pass',['class'=>'','placeholder'=>'Ingresa tu contraseña'])!!}
				
		{!!Form::label('Confirma tu contraseña')!!}
		{!!Form::password('cpass',['class'=>'','placeholder'=>'Ingresa tu contraseña'])!!}
		{!!Form::hidden('type','docente')!!}
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}				
	{!!Form::close()!!}
@stop