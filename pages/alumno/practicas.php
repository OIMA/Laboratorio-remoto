<?php 
	include_once('../../php/Query.inc');
	session_start();
       $idgu=$_SESSION['id'];
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
		 			<a href="../../pages/redireccion.php" class="agrega" id="volver">Volver a incio</a>
		 		</li>
		 		</ul>

				    <div id="practice">

				    	<?php
		 			
					 			$var = new Query();
								$var->sql = 'select p.id_practica, p.titulo, p.descripcion,
											p.url, r.fecha_activada, r.fecha_desactivada, 
											r.porcentaje_realizado, r.status
											from practicas p join practica_alumno r
											on(p.id_practica=r.id_practica)
											join alumnos u on(r.id_alumno=u.id_alumno)
											where u.id_alumno='.$idgu.'';
							    $practicas = $var->Select('obj');
							   	if($practicas!=null){
									   		echo 'si hay datos';

										echo ' <table class="datos" border="2px" >';
							 			echo '<th>Numero de practica</th>';
							 			echo '<th>Titulo de practica</th>';
							 			echo '<th>Descripcion</th>';
							 			echo '<th>Fecha de activación/th>';
							 			echo '<th>Fecha limite</th>';
							 			echo '<th>Completado</th>';
							 			echo '<th>Estatus</th>';

					 			
							 			foreach($practicas as $u){
							 				echo '<tr>';
							 				$idPr = $u->id_practica;
							 				$titulo = $u->titulo;
							 				$descrip = $u->descripcion;
							 				$urr= $u->url;
							 				$horaA=$u->fecha_activada;
							 				$horaD=	$u->fecha_desactivada;
							 				$com= $u->porcentaje_realizado;
							 				$est=$u->status;
												echo '<td>'.$idPr.'</td>';
												echo '<td colspan="">'.$titulo.'</td>';
												echo '<td colspan="">'.$descrip.'</td>';
												echo '<td colspan="">'.$horaA.'</td>';
												echo '<td colspan="">'.$horaD.'</td>';
												echo '<td colspan="">'.$com.'</td>';
												echo '<td colspan="">'.$est.'</td>';
												echo '<td colspan=""><a href="'.$urr.'?idp='.$idPr.'"><input type="button" value="IR A PRACTICA"></a></td>';
												
											echo '</tr>';

							 			}
							 			echo '</table>';
				 				}else{

							   		echo '<h1>No tienes practicas activadas D..;</h1>';
							   	}
				 				
		 				?>

				    </div>	
		
		 	<div class="footer">
		 	

		 	</div>	
		

</body>
</html>