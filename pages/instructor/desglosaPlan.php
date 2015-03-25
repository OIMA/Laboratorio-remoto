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
		 			<h1>Material del curso</h1>
		 		<?php
		 			$planID = $_GET['idPl'];
		 			$var = new Query();
					$var->sql = 'select p.nombre nopla,
								r.nombre norecu,r.descripcion, r.tipo,
								r.direccion_url
								from plan_curso p join recurso_plan rp
								using(id_plan_curso)
								join recursos r using(id_recurso)
								where p.id_plan_curso='.$planID.';';
				    $usuarios = $var->Select('obj');
				   	
					echo ' <table class="datos" border="2px" >';
					
		 			echo '<th>Titulo</th>';
		 			echo '<th>Descripcion del archivo</th>';
		 			echo '<th>Tipo de archivo</th>';
		 			

		 			foreach($usuarios as $u){
		 				echo '<tr>';
		 				$nome = $u->nopla;
		 				$nomer = $u->norecu;
		 				$desc= $u->descripcion;
		 				$tip= $u->tipo;
		 				$dir= $u->direccion_url;
		 				
                    	
		 					echo '<td>'.$nomer.'</td>';
							echo '<td>'.$desc.'</td>';
							echo '<td>'.$tip.'</td>';
							echo '<td> <a href="../../'.$dir.'"><input type="button" value="ABRIR ARCHIVO" ></a></td>';
							

						echo '</tr>';

		 			}
		 			
		 			echo '</table>';
		 		?>
		 		</fieldset>
		 		<fieldset>
		 			<h1>Practicas del curso</h1>
				    	<?php
				    		$planID = $_GET['idPl'];
				    		$asignar=0;
		 			
					 			$var = new Query();
								$var->sql = 'select c.nombre nom, p.id_practica ide, p.nombre nom2, p.descripcion des, p.direccion_url dir 
								from practicas p join practica_plan l on(p.id_practica=l.id_practica)
								join plan_curso c on(l.id_plan_curso=c.id_plan_curso)
								where c.id_plan_curso='.$planID.'';

							    $planP = $var->Select('obj');
							   	if(!empty($planP)){
								echo ' <table class="datos" border="2px" >';
					 			echo '<th>Numero de practica</th>';
					 			echo '<th>Titulo de practica</th>';
					 			
					 			
					 			foreach($planP as $u){
					 				echo '<tr>';
					 				$planes=$u->nom;
					 				$idPr = $u->ide;
					 				$titulo = $u->nom2;
					 				$descrip = $u->des;
					 				$urr= $u->dir;
					 					
					 					
										echo '<td>'.$idPr.'</td>';
										echo '<td colspan="">'.$titulo.'</td>';
										echo '<td colspan="">'.$descrip.'</td>';
										echo '<td colspan=""><a href="'.$urr.'?idp='.$idPr.'"><input type="button" value="IR A PRACTICA"></a></td>';
										echo '<td colspan=""><a href="desglosaPlanAlus.php?idps=1"><input type="button" value="ASIGNAR PRACTICA"></a></td>';


									echo '</tr>';
										
										
					 			}
					 				
				 				echo '</table>';
				 				}else{
				 					echo '<h2 >No hay practicas asignadas a este plan!</h2>';
				 				}	
		 				?>
		 				</fieldset>
		 		
		 	</div>

		 	<hr>
		 	<div class="footer">
		 

		 </div>	

</body>
</html>