<?php

//Enrrutamiento al index y layout de la página
route::get('/','FrontEnd@index');

//Enrrutamiento al controlador de las vistas de registro
route::resource('registro','registro');
route::get('alumnoRegistro','registro@almn');
route::get('docenteRegistro','registro@doce');
route::get('asesorRegistro','registro@ext');
route::get('pruebas', function (){
	return view('administrador.bienvenido');
});

//Enrrutamiento al controlador del perfil de administrador
route::resource('administrador','ctrlAdminAlumno');
//Enrrutamiento al controlador de las vistas del usuario de tipo alumno
route::resource('alumno','usuController');