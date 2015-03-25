<?php 
	$fecha=date("d-m-y");
	$hora= date("H:i:s");
	$destino='zapato_flip@hotmail.com';
	$asunto='Comentario';
	$desde='FROM: ' . $_POST['mail'];
	$comentario= "
	\n
	Nombre: $_POST[nombre]\n
	Email: $_POST[mail]\n
	Consulta: $_POST[texto]\n
	Enviado: $fecha a las $hora\n
	\n
	";
	mail($destino, $asunto, $comentario, $desde);
	
?>
