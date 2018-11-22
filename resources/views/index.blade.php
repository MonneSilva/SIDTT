@extends('layouts.principal')
@section('content')
<head>
	<title>SIDTT - Iniciar Sesión</title>
</head>

	<h1>Inicio de Sesión</h1>
{!!Form::open(['route'=>'registro.store','method'=>'POST'])!!}
{!!Form::label('Dirección de Correo electrónico:')!!}
{!!Form::email('email',null,['placeholder'=>'Ingresa tu correo electrónico'])!!}
{!!Form::label('Ingresa tu contraseña:')!!}
{!!Form::password('pass',null,['placeholder'=>'Ingresa tu contraseña'])!!}
{!!Form::submit('Iniciar Sesión')!!}
<a href="registro">Registrarme</a>
<a href="pruebas">Olvidé mi contraseña</a>
{!!Form::close()!!}

@stop