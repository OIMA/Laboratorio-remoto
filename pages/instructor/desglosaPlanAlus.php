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
		 			<a href="../../pages/redireccion.php" class="agrega" id="volver">Volver a incio</a>
		 		</li>

		 		</ul>
		 		<br> <br> <br> 

		 		<hr>
		 		<?php
		 			
		 			$var = new Query();
					$var->sql = 'select id_plan_curso, nombre,fecha_inicio, fecha_fin from plan_curso';
				    $usuarios = $var->Select('obj');
				   
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Nombre</th>';
		 			echo '<th>Fecha de inicio</th>';
		 			echo '<th>Fecha de finalizacion</th>';
		 			

		 			foreach($usuarios as $u){
		 				echo '<tr>';
		 				$idP = $u->id_plan_curso;
		 				$nome = $u->nombre;
		 				$fechaI =$u->fecha_inicio;
		 				$fechaF = $u->fecha_fin;
                    	
		 					echo '<td>'.$nome.'</td>';
							echo '<td>'.$fechaI.'</td>';
							echo '<td>'.$fechaF.'</td>';
							echo '<td> <a href="desglosaPlan.php?idPl='. $idP.'"><input type="submit" value="IR AL PLAN" ></a></td>';
							

						echo '</tr>';

		 			}
		 			
		 			echo '</table>';
		 		?>
		 			 <fieldset>
		 		<?php
		 			$idGe=$_SESSION['idSesion'];
		 			$var = new Query();
					$var->sql = 'select g.id_grupo, g.id_plan_curso, g.num_alumnos, ag.id_grupo
								from grupos g join alumno_grupo ag
								on(g.id_grupo=ag.id_grupo)
								where ag.id_instructor='.$idGe.'
								group by ag.id_grupo';
				    $usuarios = $var->Select('obj');
				   	
					echo ' <table class="datos" border="2px" >';
		 			echo '<th>Numero de grupo</th>';
		 			echo '<th>Cantidad de alumnos</th>';
		 			

		 			foreach($usuarios as $u){
		 				echo '<tr>';
		 				$grup = $u->id_grupo;
		 				$plan = $u->id_plan_curso;
		 				$cantidad= $u->num_alumnos;
		 				
		 					echo '<td>'.$grup.'</td>';
							
							echo '<td>'.$cantidad.'</td>';
							echo '<td> <a href="alumnosE.php?grp='.$grup.'"><input type="button" value="DETALLES" ></a></td>';
							

						echo '</tr>';

		 			}
		 			
		 			echo '</table>';
		 		?>
		 		</fieldset>	
		 		

		 	</div>


		 	<hr>
		 	<div class="footer">
		 

		 </div>	
		

</body>
</html>