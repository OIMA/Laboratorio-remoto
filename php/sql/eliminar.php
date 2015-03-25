<?php
	include_once('../conexion2.php');
	include_once('../config.php');
	$con= conConexion();

		$borrar= $_GET['id'];
		$tipo= $_GET['tipo'];

		#$con = mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASS) or die('no se pudo autentificar con la base de adtos');
		#mysql_select_db(MYSQL_NAME, $con) or die('no se pudo conectar con la base de datos');

		switch($tipo){

			case 'adm':
				$sql='DELETE FROM administradores  WHERE id_administrador='.$borrar.'';
			break;
			case 'alu':
				$sql='DELETE FROM alumnos  WHERE id_alumno='.$borrar.'';
			break;

			case 'ins':
				$sql='DELETE FROM instructores  WHERE id_instructor='.$borrar.'';
			break;


		}

		$res=mysql_query($sql, $con);
		header("location:../../pages/admin/usuarios.php");
		

	

?>