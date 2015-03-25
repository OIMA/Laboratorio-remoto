<?php 
	
	class elusuario{
		private $id_usuario;
		private $nombre;
		private $contraseña;

		public function getIdusuario(){

			return this->id_usuario;

		}
		public function setIdusuario($valor){

			$idusuario=$valor;

		}
		public function getNombre(){

			return $nombre;

		}
		public function setNombre($valor){

			$nombre=$valor;
		}
		public function getContrasena(){
			return $contraseña;
		}
		public function setContrasena($valor){

			$contraseña=$valor;
		}
	}

 ?>