<?php 
	
	session_start();
        
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../../css/estilo.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="../../css/menuDesplegable.css"/>

		<script src="../../scripts/jquery-1.5.2.min.js" type="text/javascript"></script>
		<script src="../../scripts/jcarousellite_1.0.1c5.js" type="text/javascript"></script>
		<script src="../../scripts/carrusel.js" type="text/javascript"></script>

</head>
<body>
		<noscript>
  				<p>Bienvenido a Mi Sitio</p>
  				<p>La página que estás viendo requiere para su funcionamiento el uso de JavaScript. 
				Si lo has deshabilitado intencionadamente, por favor vuelve a activarlo.</p>
				
		</noscript>
		
		
		 <div class="fondo">
		 	

		 	
		 	<div class="nave">
		 		<div class="navLeft">
		 				<a href=""><h2>Laboratorios virtuales y remotos<h2></a>
		 		</div>
		 		<div  class="sesion">
		 			<div class="arriba">

		 			</div>
		 			<div class="derecho">
		 					<ul>
				 					<li><a href="+">Usuario: <?php echo $_SESSION['usuario'];  ?>    </a></li>
				 					<li><a id="cierre" href="../../php/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
				 			</ul>
				 	</div>
		 		</div>	
		 		
		 	</div>
		


						    <ul id="nav">
						        
						        <li><a href="*">Tareas</a>
						            <ul class="subs">
								 		
						 
						            </ul>
						        </li>
						        <li><a href="*">Plan de trabajo</a>
						            <ul class="subs">
						                

						            </ul>
						        </li>
						        <li><a href="*">Modulos</a>
						            <ul class="subs">
						               
						      
						            </ul>
						        </li>
						         <li><a href="practicas.php">Practicas</a>
						            <ul class="subs">
						                

						            </ul>
						        </li>
						        <li><a href="../labVIEW/comunicacion de labview con excel.php">Materiales</a></li>	
						        <li><a href="*">Foros</a></li>
						    </ul>

				
			 					

		 	<hr>
		 

		 </div>	
		

</body>
</html>