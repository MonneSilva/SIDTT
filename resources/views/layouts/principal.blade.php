<!DOCTYPE html>
<html>
{!!Html::style('vendor/css/app.css')!!}
{!!Html::style('vendor/css/main.css')!!}
<body>		
<div id="contenedor-principal">
	<div id="topBar-inv">
		<div id="topBar-back">
			<div id="topBar-cont">
				<h1 class="sidtt-siglas">
					SIDTT
				</h1>
			</div>
		</div>
	</div>
	<div id="body">

@yield('content')  
	
	</div>
 <div id="topBar-inv"><div id="topBar-back"></div></div>

</div>
</body>
</html>
