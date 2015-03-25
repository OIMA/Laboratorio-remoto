<?php 
	include_once('../Query.inc');
	include_once('../config.php');
	include_once('../conexion2.php');
	session_start();
	
	$con= conConexion();
	
	
	$nombre1   =  $_POST['nombre'];
	$apeP  =  $_POST ['apellidoP'];
	$apeM   =  $_POST['apellidoM'];
	$pass1   =  $_POST ['pass1'];
	$pass2 = $_POST['pass2'];
	$permiso =  $_GET['tipo'];
	$correo1   =  $_POST['correo'];


	if($nombre1 !="" AND $pass1!="" && ($pass1==$pass2)){

			switch($permiso){

				case 'Instructor':
					echo ' inserto un instructor';
					$sql="INSERT INTO instructores( passwd, imagen_p,nombre, ap_paterno, ap_materno, mail, conectado)
					values('$pass1','vacia.jpg','$nombre1', '$apeP', '$apeM', '$correo1', 0)";
				break;
				case 'Alumno':
					$sql="INSERT INTO alumnos( passwd, imagen_p, nombre, ap_paterno, ap_materno, mail, conectado)
					values('$pass1','vacia.jpg','$nombre1', '$apeP', '$apeM', '$correo1', 0)";
				break;

				case 'Admin':
					$sql="INSERT INTO administradores( passwd, imagen_p,nombre, ap_paterno, ap_materno, mail, conectado)
					values('$pass1','vacia.jpg', '$nombre1', '$apeP', '$apeM', '$correo1', 0)";
				break;
			}
		
			$res=mysql_query($sql, $con);

			header("location:../../pages/admin/usuarios.php");

	}else{
				$_SESSION['llenar'] = 'Uno o mas campos estan vacios';
				echo 'campos vacios llenelo o nel';
	}

    
	
?>