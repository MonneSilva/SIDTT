<!DOCTYPE html>
<html>
{!!Html::style('vendor/css/app.css')!!}
{!!Html::style('vendor/css/main.css')!!}
{!!Html::style('vendor/css/styles1.min.css')!!}
<body>      
<div id="contenedor-principal">
	<div id="topBar-inv">
		<div id="topBar-back">
			<div id="topBar-cont">
                 <div class="container">
                    <a class="navbar-brand">SIDTT</a>
                    <div class="navbar-brand-full">
                    <a> Sistema Interino de Desarrollo</a><br>
                    <a>de Trabajos Terminales</a>
                     </div>       
                        </div>
                    </div>
                
   </div>
</div>

<div id="body">

@yield('content')  
    </div>
        
            <div class="footer-basic">
                <footer>
                    <p class="copyright">Instituto Politécnico Nacional</p>
                </footer>
            </div>

 
</div>
</body>

</html>
