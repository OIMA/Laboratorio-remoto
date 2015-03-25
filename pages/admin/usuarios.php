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
					$var->sql = 'select id_administrador, numero_control, nombre, ap_paterno, ap_materno, mail from administradores';
				    $usuarios = $var->Select('obj');
				   
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Numero de control</th>';
		 			echo '<th>Nombre</th>';
		 			echo '<th>Correo electronico</th>';

		 			foreach($usuarios as $u){
		 				echo '<tr>';
		 				$idA=$u->id_administrador;
		 				$num_cont = $u->numero_control;
		 				$nombre2 = $u->nombre .' '. $u->ap_paterno .' '. $u->ap_materno ;
                    	$corre= $u->mail;
		 					echo '<td>'.$num_cont.'</td>';
							echo '<td>'.$nombre2.'</td>';
							echo '<td>'.$corre.'</td>';
							echo '<td> <a href="*"><input type="submit" value="EDITAR" ></a></td>';
							echo '<td> <a href="../../php/sql/eliminar.php?id=' .$idA.'&tipo=adm"><img src="../../imagenes/eliminar.png" width="30px" height="30px"> </a></td>';

						echo '</tr>';

		 			}

		 			echo '</table>';


		 			#echo '<fieldset>';
		 			echo '<h1>Instructores</h1>';
		 			$var2 = new Query();
		 			$var2->sql = 'select id_instructor, numero_control, nombre, ap_paterno, ap_materno, mail from instructores';
				    $usuarios2 = $var2->Select('obj');
				   
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Numero de control</th>';
		 			echo '<th>Nombre</th>';
		 			echo '<th>Correo electronico</th>';

		 			foreach($usuarios2 as $u){
		 				echo '<tr>';
		 				$idI=$u->id_instructor;
		 				$num_cont = $u->numero_control;
		 				$nombre2 = $u->nombre .' '. $u->ap_paterno .' '. $u->ap_materno ;
                    	$corre= $u->mail;
		 					echo '<td>'.$num_cont.'</td>';
							echo '<td>'.$nombre2.'</td>';
							echo '<td>'.$corre.'</td>';
							echo '<td> <a href="*"><input type="submit" value="EDITAR" ></a></td>';
							echo '<td> <a href="../../php/sql/eliminar.php?id=' .$idI.'&tipo=ins"><img src="../../imagenes/eliminar.png" width="30px" height="30px"> </a></td>';

						echo '</tr>';

		 			}
		 			
		 			echo '</table>';

		 			#echo '<fieldset>';
		 			echo '<h1>Alumnos</h1>';
		 			$var3 = new Query();
		 			$var3->sql = 'select id_alumno, numero_control, nombre, ap_paterno, ap_materno, mail from alumnos';
				    $usuarios3 = $var3->Select('obj');
				   
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Numero de control</th>';
		 			echo '<th>Nombre</th>';
		 			echo '<th>Correo electronico</th>';

		 			foreach($usuarios3 as $u){
		 				echo '<tr>';
		 				$idE=$u->id_alumno;
		 				$num_cont = $u->numero_control;
		 				$nombre2 = $u->nombre .' '. $u->ap_paterno .' '. $u->ap_materno ;
                    	$corre= $u->mail;
		 					echo '<td>'.$num_cont.'</td>';
							echo '<td>'.$nombre2.'</td>';
							echo '<td>'.$corre.'</td>';
							echo '<td> <a href="*"><input type="submit" value="EDITAR" ></a></td>';
							echo '<td> <a href="../../php/sql/eliminar.php?id=' .$idE.'&tipo=alu"><img src="../../imagenes/eliminar.png" width="30px" height="30px"> </a></td>';

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