<?php 
	include_once('../../php/Query.inc');
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
				 					<li><a href="+">Usuario: <?php echo $_SESSION['usuario'];  ?>    </a></li>
				 					<li><a id="cierre" href="../../php/cerrarSesion.php">Cerrar Sesi&oacute;n</a></li>
				 			</ul>
				 	</div>
		 		</div>	
		 		
		 	</div>
		 		<ul>
		 			<li>
		 			<a href="../../forms/altaUsuarios.php?tipo=Instructor" class="agrega">Agregar nuevo Recurso</a>
		 		</li>
		 		
		 		<li>
		 			<a href="../../pages/redireccion.php" class="agrega" id="volver">Volver a incio</a>
		 		</li>

		 		</ul>
		 		<br><br><br>

				    

				    	<fieldset>
				    	<?php
		 			
					 			$var = new Query();
								$var->sql = 'select id_recurso, nombre , descripcion, tipo, direccion_url from recursos';
							    $practicas = $var->Select('obj');
							   	
								echo ' <table class="datos" border="2px" >';
					 			echo '<th>Titulo</th>';
					 			echo '<th>Descripcion</th>';
					 			echo '<th>Tipo de archivo</th>';
					 			
					 			foreach($practicas as $u){
					 				echo '<tr>';
					 				$idPr = $u->id_recurso;
					 				$titulo = $u->nombre;
					 				$descrip = $u->descripcion;
					 				$tipo= $u->tipo;
					 				$urr =$u->direccion_url;
					 					
										echo '<td>'.$idPr.'</td>';
										echo '<td colspan="">'.$titulo.'</td>';
										echo '<td colspan="">'.$descrip.'</td>';
										echo '<td colspan="">'.$tipo.'</td>';
										echo '<td colspan=""><a href="../../'.$urr.'?idp='.$idPr.'"><input type="button" value="IR A ARCHIVO"></a></td>';
										

									echo '</tr>';

					 			}
				 			
				 				echo '</table>';
		 				?>
		 				</fieldset>

				    
		 	
		 		
		
		 	<div class="footer">
		 	

		 	</div>	
		

</body>
</html>