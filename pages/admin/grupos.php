<?php 
	include_once('../../php/validaciones.php');
	include_once('../../php/Query.inc');

	session_start();
    
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../../css/estilo.css" type="text/css" rel="stylesheet"/>
	<link href="../../css/menuDesplegable.css" type="text/css" rel="stylesheet"/>
	

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
		 	
		 	<div class="dat">
		 		
		 		<ul>
		 			<li>
		 			<a href="../../forms/altaInstructor.php?tip=1" class="agrega">Agregar nuevo instructor</a>
		 		</li>
		 		<li>
		 			<a href="../../forms/altaAdmin.php?" class="agrega" >Agregar un nuevo administrador</a>
		 		</li>
		 		<li>
		 			<a href="../../forms/altaAlumno.php?tip=2" class="agrega" >Agregar un nuevo alumno</a>
		 		</li>
		 		
		 		<li>
		 			<a href="../../pages/redireccion.php?" class="agrega" id="volver">Volver a incio</a>
		 		</li>


		 		</ul>
		 		<br> <br> <br> 

		 		<fieldset>
		 		<h1>Administradores</h1>
		 		<?php
		 			
		 			$var = new Query();
					$var->sql = 'select id_grupo, nombre, id_curso, id_instructor from vista_grupo';
				    $usuarios = $var->Select('obj');
				   
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Numero de grupo</th>';
		 			echo '<th>Nombre</th>';
		 			echo '<th>Instructor</th>';

		 			foreach($usuarios as $u){
		 				echo '<tr>';
		 				$idA=$u->id_grupo;
		 				$nombre = $u->nombre;
                    	$ins= $u->id_Instructor;
		 					echo '<td>'.$idA.'</td>';
							echo '<td>'.$nombre.'</td>';
							echo '<td>'.$ins.'</td>';
							echo '<td> <a href="*"><input type="submit" value="EDITAR" ></a></td>';
							echo '<td> <a href="../../php/sql/eliminar.php?id=' .$idA.'&tipo=adm"><img src="../../imagenes/eliminar.png" width="30px" height="30px"> </a></td>';

						echo '</tr>';

		 			}

		 			echo '</table>';



		 		?>
		 		</fieldset>
		 		

		 	</div>


		 	
		 	<div class="footer">
		 

		 </div>	
		

</body>
</html>