<?php 
	
	session_start();
	include_once('conexion2.php');
	$con= conConexion();
	$archivo= $_FILES['imagen']['tmp_name'];
	$nombreArchivo=$_FILES['imagen']['name'];
	$rutaAnterior= $_SESSION['ruta'];
	$numero=$_SESSION['num_control'];
	move_uploaded_file($archivo,'../imagenes/'.$nombreArchivo);


	switch($_SESSION['permisos']){

		case 'Administrador':
			echo 'entraste a admon '. $nombreArchivo;
			$sql='UPDATE mydb.administradores SET imagen_p =$nombreArchivo  WHERE administradores.numero_control=$numero';
		break;

		case 'Instructor':
			$sql='UPDATE instructores set imagen_p ='.$nombreArchivo.'  where numero_control='.$_SESSION['num_control'].'';
		break;

		case 'Alumno':
			$sql='UPDATE alumnos set imagen_p ='.$nombreArchivo.'  where numero_control='.$_SESSION['num_control'].'';
		break;
	}
	
	$res=mysql_query($sql, $con);
	if($res){

		echo ' se actualizo perfectamnente';
	}else{

		echo 'no se pudo actualizar D....;';
	}
	$_SESSION['ruta']=$nombreArchivo;
	#header("location:../pages/perfil.php")

?>