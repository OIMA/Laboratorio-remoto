<?php 
	
	session_start();
    $ruta= $_SESSION['ruta'];
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../css/estilo.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="../css/menuDesplegable.css"/>
	

		<script src="../scripts/jquery-1.5.2.min.js" type="text/javascript"></script>

</head> 
<body>         
			<noscript>                 
				<p>Bienvenido a Mi Sitio</p>
				<p>La página que estás viendo requiere para su funcionamiento el uso de
				JavaScript. Si lo has deshabilitado intencionadamente, por
				favor vuelve a activarlo.</p>
				
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
				 					<li><a href="perfil.php">Usuario: <?php echo $_SESSION['usuario'];  ?>    </a></li>
				 					<li><a id="cierre" href="../php/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
				 			</ul>
				 	</div>
		 		</div>	
		 		
		 		</div>
		 		<div >
		 			<?php echo '<form method="post" action="../php/modificaPerfil.php?'.$_SESSION['permisos'].'" enctype="multipart/form-data">';?>

		 				<?php echo '<img src="../imagenes/'.$ruta.'" width="200px" height="200px">'.$_SESSION['num_control'].'</img>';?>
		 				<br>
		 				<input type="file" name= "imagen"></input>
		 				
		 				<br>
		 				<input type="submit" value= "Actualizar foto de perfil"></input>


		 			</form>


		 		</div>	
		 		<div>


		 		</div>
				   
		 		
		
		 	<div class="footer">
		 	

		 	</div>	
		

</body>
</html>