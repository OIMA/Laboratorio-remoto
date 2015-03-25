<?php 
	
	session_start();
        
 ?>
<!DOCTYPE HTML>
<html>
<head>

	<title> Laboratorio Remoto</title>
	<link href="../css/estilo.css" type="text/css" rel="stylesheet"/>
	

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
		 		
		 	
		 	<hr>
		 	<div class="formulario">

		 	<form method="POST" action="../php/sql/insertar.php?tipo=Instructor">

			<table width="200px" height="380px">
			
				<tr>
					<td>
						Nombre:
					</td>	
					<td>
						<input type="text" name="nombre" maxlenght="25">
					</td>	
				</tr>
				
				<tr>
					<td>
						Apellido paterno:
					</td>	
					<td>
						<input type="text" name="apellidoP" maxlenght="25">
					</td>	
				</tr>	
				
				<tr>
					<td>
						Apellido materno:
					</td>	
					<td>
						<input type="text" name="apellidoM" maxlenght="25">
					</td>	
				</tr>	
				<tr>
					<td>
						Contrase&ntilde;a:
					</td>	
					<td>
						<input type="password" name="pass1" maxlenght="25">
					</td>	
				</tr>	
				 
				 
				<tr>
					<td>
						Confirmar contrase&ntilde;a:
					</td>	
					<td>
						<input type="password" name="pass2" maxlenght="25">
					</td>	
				</tr>	
				
				<tr>
					<td>
						Correo electr&oacute;nico:
					</td>	
					<td>
						<input type="text" name="correo" maxlenght="25">
					</td>	
				</tr>
			
				<tr >
					<td colspan="2">
						<input type="submit" name="guardar" value="Enviar datos">
						
					</td>	
					<td>
						<a href="../pages/admin/usuarios.php"><input type="button" name="cancelar" value="Cancelar"></a>
					</td>
				</tr>	
				

			</table>

			</form>
			</div>
		

		 	<hr>
		 	<div class="footer">
		 		

		 </div>	
		

</body>
</html>
	


		 	
