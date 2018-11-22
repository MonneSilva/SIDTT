@extends('layouts.principal')
@section('content')
<div class="pefilContenedor">

<div class="perfil-layout-leftbar">
	@yield('enlaces')
</div>

<div class="perfil-layout-content">
	@yield('contenido-perfil')
</div>
</div>
@stop