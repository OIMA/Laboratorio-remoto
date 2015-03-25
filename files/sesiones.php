<?php
// Inciamos la sesión
session_start();
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"xhtml1-transitional.dtd">
<html>
<head>
<title>Sentido Web - Sessiones</title>
</head>
<body>
<p>
<?php
// Primero miramos si la sesión es válida
// Cuando el tiempo que lleva activa sea menor que 1 minuto
if (isset($_SESSION["ID_SESSION"])) {
$antes = $_SESSION["SESION_TIME"];
// Si lleva más de 1 minuto (60 segundos)
if (time()-$antes > 60) {
// Libramos la sesion
session_unset();
session_destroy();
echo 'Finalizó la sesión. <br/>';
}
}
// Si ya hay sesión lo indicamos
if (isset($_SESSION["ID_SESSION"])) {
?>
Hay SESIÓN (<?php echo $_SESSION["ID_SESSION"]; ?>)
<?php
// Si no hay sesión
} else {
// Si se ha pedido la creación de una sesion
if (isset($_GET["accion"])) {
// se quiere crear una sesion
// Se crea la variable de sesion id de sesion
// y tiempo en el que empieza la sesion
if ($_GET["accion"] == "1") {
$_SESSION["ID_SESSION"] = "ID".rand();
$_SESSION["SESION_TIME"] = time();
?>
Has creado la sesión <?php echo $_SESSION["ID_SESSION"]. " " .$_SESSION["SESION_TIME"]; ?>
<?php
// No se quiere crear la sesión
} else {
?>
No has querido crear sesión.
<?php
}
// No hay sesión, se avisa y
// se pregunta si se quiere crear una
} else {
?>
No hay SESIÓN. ¿Quiere crear una?
<input type="button" value="SI" onclick="document.location='sesiones.php?accion=1'" />
&nbsp;
<input type="button" value="NO" onclick="document.location='sesiones.php?accion=0'" />
<?php
}
}
?>
</p>
</body>
</html>