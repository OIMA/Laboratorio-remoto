<?php
	$nombre    =  $_POST['nombre'];
	$contraseña	   =  $_POST['contraseña'];
	$conect= mysql_connect('localhost', 'Cesar', '1234');
	$queryStr='select * from mydb.usuarios';
	$queryRes= mysql_query($queryStr);
	$resultado= mysql_fetch_array($queryRes);
	$resultado2= mysql_fetch_array($queryRes);
	$resultado3= mysql_fetch_array($queryRes);

	mysql_close($conect);

	print_r($resultado);

	echo '<br>' . $resultado[1];
	echo '<br>' . $resultado[2];

?>
<!DOCTYPE html>
<<html>
<head>
	<title> </title>
</head>
<body>

		<h1><?php echo 'Bienvenido ' . $resultado[1];?> </h1>

		<h3><?php echo 'usted se llama: ' . $nombre;?> </h3>
		<p><?php echo 'su novia es muy hermosa y se hace llamar '. $resultado2[2];?><p>
		<p><?php echo 'A tu novia tambien le dicen: '. $resultado3[1];?><p>


</body>
</html>