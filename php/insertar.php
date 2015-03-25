<?php 


		
			include_once('../validaciones.php');
			include_once('../Query.inc');
			session_start();

			if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		
				isset( $_POST ['apellidoP']) && !empty( $_POST ['apellidoP']) &&
				isset($_POST['apellidoM']) && !empty($_POST['apellidoM']) &&
				isset($_POST ['password']) && !empty($_POST ['password']) &&
				isset($_POST['correo']) && !empty($_POST['correo']) ){


			}else{

				echo 'Rellena los datos';
			}
			
			$nombre1   =  $_POST['nombre'];
			$apeP  =  $_POST ['apellidoP'];
			$apeM   =  $_POST['apellidoM'];
			$pass1   =  $_POST ['pass1'];
			$correo1   =  $_POST['correo'];
			$tipoU = 'Alumno';

			if($nombre1 !="" AND $pass1!=""){

				$var = new Query();
		        $usuario = $var->insert('usuarios', 'nombre, ap_paterno, ap_materno, password, tipo_usuario, correo', ($nombre1, $apeP, $apeM, $pass1,$tipoU, $correo1));
		        echo 'asdadadasdasdasdasdasdasdasaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
		        header('location:../pages/admin/usuarios.php');
		            
			}else{

				$_SESSION['llenar'] = 'Uno o mas campos estan vacios';
				header('location:../index.php');

			}
	
	
	
?>