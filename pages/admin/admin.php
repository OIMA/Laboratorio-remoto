<?php 
	
	session_start();
        
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../../css/estilo.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="../../css/menuDesplegable.css"/>
	

		<script src="../scripts/jquery-1.5.2.min.js" type="text/javascript"></script>

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
				 					<li><a href="../perfil.php?tipo=admin">Usuario: <?php echo $_SESSION['usuario'];  ?>    </a></li>
				 					<li><a id="cierre" href="../../php/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
				 			</ul>
				 	</div>
		 		</div>	
		 		
		 	</div>

				    <ul id="nav">
				        
				        <li><a href="../forms/usuarios.php">Administrador</a>
				            <ul class="subs">
				                <li><a href="usuarios.php"> Usuarios </a></li>
						 		<li><a href="grupos.php"> Grupos </a></li>
						 		<li><a href="recursos.php"> Recursos </a></li>
						 		<li><a href="*"> Practicas </a></li>
				 
				            </ul>
				        </li>
				        <li><a href="*"> Permisos </a>
				            <ul class="subs">

				            </ul>
				        </li>
				        <li><a href="*">Estadisticas</a>
				            <ul class="subs">
				            

				            </ul>
				        </li>
				        
				        <li><a href="*">Practicas</a></li>
				    </ul>
				    <div id="class">





				    </div>
		 	
		 		
		
		 	<div class="footer">
		 	

		 	</div>	
		

</body>
</html>