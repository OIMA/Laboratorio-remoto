<?php
	session_start();
	$tipo= $_SESSION['permisos'];

	switch($tipo){
                		case 'Administrador':

                			header('location:../pages/admin/admin.php');

                		break;
                		case 'Instructor':

                			header('location:../pages/instructor/instructor.php');

                		break;
                		case 'Alumno':

                			header('location:../pages/alumno/alumno.php');

                		break;
                	
     }


?>