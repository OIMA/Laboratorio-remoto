<?php 
	
	


		function conConexion(){
			$servidor="localhost";
			$usuario="root";
			$clave="";

			$conexionServidor = mysql_connect($servidor, $usuario, $clave);
			mysql_select_db("mydb", $conexionServidor);
			return $conexionServidor;
		}
		function realizarConsulta($consultasql){
			$conexion=$this->conObtenerConexion();
        	$resultado=mysql_query($consultasql, $conexion);
        	return $resultado;

    	}
	


 ?>