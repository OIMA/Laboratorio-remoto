<?php

	include_once('Query.inc');
	/*$nombre   =  $_POST['nombre'];
	$contraseña	   =  $_POST['contraseña'];
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><?php echo 'Bienvenido ' ;?></h1>
	<?php   
		
		$var = new Query();

		$var->sql = 'select nombre, pass from usuarios1';
		$usuarios = $var->Select('obj');
		
		
		echo '<table border=3>';

			foreach($usuarios as $u){
				$nombre = $u->nombre;
				$pass = $u->pass;
			echo '<tr>';
				echo '<td>' .  $nombre . '</td>';
				echo '<td>' . $pass . '</td>';
			echo '</tr>';
			}

		 echo '</table>';
	?>

</body>
</html>