@extends('layouts.principal')
@section('content')
<head>
	<title>SIDTT - Registro</title>
</head>
	{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}
		{!!Form::label('Nombre(s)')!!}
		{!!Form::text('nom',null,['class'=>'','placeholder'=>'Ingresa tu nombre'])!!}
			
		{!!Form::label('Apellido Paterno')!!}
		{!!Form::text('aP',null,['class'=>'','placeholder'=>'Apellido Paterno'])!!}
			
		{!!Form::label('Apellido Materno')!!}
		{!!Form::text('aM',null,['class'=>'','placeholder'=>'Apellido Materno'])!!}
		
		{!!Form::label('Correo Electrónico')!!}
		{!!Form::email('email',null,['class'=>'','placeholder'=>'Ingresa tu correo electrónico'])!!}
		
		{!!Form::label('Confirmar correo Electrónico')!!}
		{!!Form::email('cemail',null,['class'=>'','placeholder'=>'Ingresa tu correo electrónico'])!!}		
		{!!Form::label('Contraseña')!!}
		{!!Form::password('pass',['class'=>'','placeholder'=>'Ingresa tu contraseña'])!!}

		{!!Form::label('Confirmar contraseña')!!}
		{!!Form::password('cpass',['class'=>'','placeholder'=>'Ingresa tu contraseña'])!!}

		{!!Form::label('Teléfono')!!}
		{!!Form::text('phone',null,['class'=>'','placeholder'=>'Ingresa tu teléfono'])!!}

		{!!Form::label('Celular')!!}
		{!!Form::text('cellphone',null,['class'=>'','placeholder'=>'Ingresa tu celular'])!!}

		{!!Form::label('Código de Proyecto')!!}
		{!!Form::text('project',null,['class'=>'','placeholder'=>'ej: 24CDX5'])!!}
		
		{!!Form::hidden('type','asesor')!!}
				
			{!!Form::submit('Registrar',['class'=>''])!!}
							
	{!!Form::close()!!}
@stop