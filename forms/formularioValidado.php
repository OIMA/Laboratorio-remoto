<?php
include '../php/validaciones.php';
$nombre = validarScripts($_POST['nombre']);
$apPat = validarScripts($_POST['ap_pat']);
$apMat = validarScripts($_POST['ap_mat']);
$edad = validarScripts($_POST['edad']);
$genero = validarScripts($_POST['genero']);
$hobbies[] = validarScripts($_POST['hobbies']);
$pais = validarScripts($_POST['pais']);
$descripcion = validarScripts($_POST['descripcion']);

echo $genero;
$errorNombre = validar($nombre);
$errorApPat = validar($apPat);
$errorApMat = validar($apMat);
$errorEdad = validar($edad, 2, 'sn');
$errorPais = $errorArchivo = '';
$n = 1;
for ($i = 0; $i < count($hobbies) - 1; $i++) {
    echo $hobbies[$i];
}

/*
 * @method validar($cadena, $tamanio = 45, $tipo = 'generico')
 * @param $cadena -> es un campo obligatorio donde se pasa la cadena a validar  
 * @param $tamanio -> es un campo opcional donde, si no se especifica, el valor por defecto es 45
 * @param $tipo -> es un campo opcional donde por defecto es genérico y no se especifica una expresión regular 
 * para especificar una expresión regular, se debe agregar al método validarExpresión en el archivo ubicado en '/php/validaciones.php'
 *  @return -> el valor de retorno es un mensaje de error que varía dependiendo de dónde se haya roto la validación
 */
function validar($cadena, $tamanio = 45, $tipo = 'generico') {
    $error = '';
    if (validarVacios($cadena)) {
        if (validarTamanio($cadena, $tamanio)) {
            $error = 'Campo v&aacute;lido';
            if ($patron != 'generico') {
                if (validarExpresion($cadena, $tipo)) {
                    $error = 'Campo v&aacute;lido';
                }else{
                    $error = 'Campo no cumple con la expresi&oacute;n';
                }
            }
        } else {
            $error = 'El tama&ntilde;o no puede ser mayor a 45 caracteres';
        }
    } else {
        $error = 'El campo no puede ser vac&iacute;o';
    }
    return $error;
}
?>
<html>
    <head>
        <title>Validaci&oacute;n formulario</title>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table >
                <tr>
                    <td>
                        <label for="campoNombre">Nombre</label>
                    </td>
                    <td>
                        <input id="campoNombre" type="text" name="nombre" value="<?php echo $nombre; ?>"/>
                    </td>
                    <td>
                        <label class="error" style="color:
                                                    <?php echo (($errorNombre= 'campo v&aacute;lido')? green : red); ?>;"
                         >                           
                         <?php echo $errorNombre; ?>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="campoApPat">Apellido Paterno</label>
                    </td>
                    <td>
                        <input id="campoApMat" type="text" name="ap_pat" value="<?php echo $apPat; ?>"/>
                    </td>
                    <td>
                        <label class="error"><?php echo $errorApPat; ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="campoApMat">Apellido Materno</label>
                    </td>
                    <td>
                        <input id="campoApMat" type="text" name="ap_mat"  value="<?php echo $apMat; ?>"/>
                    </td>
                    <td>
                        <label class="error"><?php echo $errorApMat; ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="campoEdad">Edad</label>
                    </td>
                    <td>
                        <input id="campoEdad" type="text" name="edad"  value="<?php echo $edad; ?>"/>
                    </td>
                    <td>
                        <label class="error"><?php echo $errorEdad; ?></label>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">
                        <label for="campoGenero">G&eacute;nero</label>
                    </td>
                    <td>
                        <input id="campoGenero" type="radio" name="genero" value="H"/> Hombre
                    </td>
                    <td rowspan="2">
                        <label><?php echo $errorGenero; ?></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="campoGenero2" type="radio" name="genero" value="M"/> Mujer
                    </td>
                </tr>
                <tr>
                    <td rowspan="3"><label>Hobbies</label></td>
                    <td><input  type="checkbox" name="hobbies[]" value="Videojuegos"/>Videojuegos</td>
                    <td><input type="checkbox" name="hobbies[]" value="Libros"/>Libros</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="hobbies[]" value="Deportes"/>Deportes</td>
                    <td><input type="checkbox" name="hobbies[]" value="Peliculas"/>Pel&iacute;culas</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="hobbies[]" value="Musica"/>M&uacute;sica</td>
                    <td><input type="checkbox" name="hobbies[]" value="Fiestas"/>Fiestas</td>
                </tr>
                <tr>
                    <td><label for="campoPais">Pa&iacute;s</label></td>
                    <td>
                        <select id="campoPais" name="pais" >
                            <option value="-1">Elige un pa&iacute;s de la lista...</option>
                            <option value="MX">M&eacute;xico</option>
                            <option value="USA">Estados Unidos</option>
                            <option value="GER">Alemania</option>
                        </select>
                    </td>
                    <td>
                        <label><?php echo $errorPais; ?></label>
                    </td>
                </tr>
                <tr>
                    <td><label for="campoArchivo">Subir Archivo</label></td>
                    <td><input type="file" name="foto"/></td>
                    <td><?php $errorArchivo ?></td>
                </tr>
                <tr>
                    <td><label >Color</label></td>
                    <td><input type="color" name="foto"/></td>
                    <td><?php $errorArchivo ?></td>
                </tr>
                <tr>
                    <td><label >Number</label></td>
                    <td><input type="number" name="foto"/></td>
                    <td><?php $errorArchivo ?></td>
                </tr>
                <tr>
                    <td><label >Password</label></td>
                    <td><input type="password" name="foto"/></td>
                    <td><?php $errorArchivo ?></td>
                </tr>
                <tr>
                    <td><label >e-mail</label></td>
                    <td><input type="password" name="foto"/></td>
                    <td><?php $errorArchivo ?></td>
                </tr>
                
                <tr>
                    <td><label for="campoDescripcion">Descripci&oacute;n</label></td>
                    <td colspan="2"><textarea id="campoDescripcion" maxlength="250" name="descripcion" cols="30" rows="5"><?php echo $descripcion; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="Enviar" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>