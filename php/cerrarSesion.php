<?php 


	session_start();
	if(isset($_SESSION['usuario'])){

		unset($_SESSION['usuario']);
		unset($_SESSION['permisos']);
		session_unset();
		session_destroy();
		
	}
	header("location:../index.php");

?>