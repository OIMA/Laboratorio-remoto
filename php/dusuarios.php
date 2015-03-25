<?php
	
	require_once 'conexion2.php';
	require_once 'elusuario.php';
	class dusuarios{	
	
		function obtenerListaUsuarios(){

			$consultasql= "select * from usuarios";
			$instanciaConexion =new conexion2();
			$resultadoConsulta =$instanciaConexion->realizarConsulta($consultasql);

			$listaUsuarios = Array();

			while($fila =mysql_fetch_assoc($resultadoConsulta)){
				$idusuario= $fila["id_usuario"];
				$nombreUsuario = $fila["nombre"];

				$objetoUsuario = new elusuario();
				$objetoUsuario->setIdusuario($idusuario);
				$objetoUsuario->setNombre($nombreUsuario);

				 array_push($listaUsuarios, $objetoUsuario);
				}
				return $listaUsuarios;
		}


	}

?>