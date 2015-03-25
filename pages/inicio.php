	
<?php 
	
	session_start();
        
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../css/estilo.css" type="text/css" rel="stylesheet"/>
	

		<script src="../scripts/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="../scripts/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
		<script src="../scripts/carrusel.js" type="text/javascript"></script>

</head>
<body>
		<noscript>
  				<p>Bienvenido a Mi Sitio</p>
  				<p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
				Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p>
				
		</noscript>
		
		
		 <div class="fondo">
		 	

		 	
		 	<div class="nave">
		 		<div  class="sesion"id="fijo">
		 		<ul >
		 				<li id="login"><a 	id="usuarios" href="forms/logeo.php"> 
		 					<?php 

		 					echo 'Usuario: '.$_SESSION['usuario'] . ' <a id="cierre" href="../php/cerrarSesion.php">Cerrar Sesi&oacute;n</a>';


		 					?></a>
		 				</li>

		 		</ul>
		 		</div>	
		 		
		 	</div>


		 	<hr>
		 	<div class="footer">
		 		<div id="slidebox">
					<div class="next"></div>
					<div class="previous"></div>
					<div class="thumbs">
					<a href="#" onClick="" class="1 thumbActive">1</a>
					<a href="#" onClick="" class="2">2</a>
					<a href="#" onClick="" class="3 ">3</a>
					
					</div>
					<ul>
    				<li><a href="*"><img id="i1" class="imagen" alt="300X300" title="chass imagen" src="..\imagenes\imagen1.jpg" height="280" width="670px" /></a></li>
    				<li><img id="i1" class="imagen" alt="300X300" title="chass imagen" src="..\imagenes\imagen2.jpg" height="280" width="670px" /></li>
    				<li><img id="i1" class="imagen" alt="300X300" title="chass imagen" src="..\imagenes\brazo.jpg" height="280" width="670px" /></li>
    				
					</ul>
				</div>

		 	</div>

		 </div>	
		

</body>
</html>
	