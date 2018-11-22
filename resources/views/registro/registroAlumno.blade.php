@extends('layouts.principal')
@section('content')
<head>
	<title>SIDTT - Registro</title>
</head>

	{!!Form::open(['route'=>'registro.store', 'method'=>'POST'])!!}
					
			{!!Form::label('Boleta:')!!}
			{!!Form::text('boleta',null,['class'=>'form-control','placeholder'=>'Ingresa tu boleta'])!!}
			
			{!!Form::label('Nombre(s)')!!}
			{!!Form::text('nom',null,['class'=>'form-control','placeholder'=>'Ingresa tu nombre'])!!}
				
			{!!Form::label('Apellido Paterno')!!}
			{!!Form::text('aP',null,['class'=>'form-control','placeholder'=>'Apellido Paterno'])!!}
			
			{!!Form::label('Apellido Materno')!!}
			{!!Form::text('aM',null,['class'=>'form-control','placeholder'=>'Apellido Materno'])!!}
				
			{!!Form::label('Correo Electrónico')!!}
			{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa tu correo electrónico'])!!}
				
			{!!Form::label('Contraseña')!!}
			{!!Form::password('pass',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
		    {!!Form::hidden('type','alumno')!!}
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}							
		
		{!!Form::close()!!}

@stop