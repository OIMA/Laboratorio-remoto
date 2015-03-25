<?php
	#include_once('config.php');
	#require_once("Utilidades.inc");
        require_once("Query.inc");
        require_once("Error.inc");


 function insertarUsuario($nombre,$ap_pat,$ap_mat,$direccion,$telefono,$email,$curp,$nombre_usuario,$contrasenia,$tipo){
        $query = new Query();
        $query->insert("USUARIO",//nombre tabla 
                       "NOMBRE,AP_PAT,AP_MAT,DIRECCION,TELEFONO,EMAIL,CURP,NOMBRE_USUARIO,CONTRASENIA,TIPO_USUARIO",
					   //campos
                       '"'.$nombre.'","'.$ap_pat.'","'.$ap_mat.'","'.$direccion.'","'.$telefono.'","'.$email.'","'.$curp.'","'.$nombre_usuario.'","'.sha1($contrasenia).'","'.$tipo.'"');//valores
        }
		
function insertarCliente($nombre,$ap_pat,$ap_mat,$direccion,$telefono,$email,$curp,$nombre_empresa,$direccion_empresa,$tel_empresa,$rfc){
        $query = new Query();
		echo $nombre;
        $query->insert("CLIENTE",//nombre tabla 
                       "NOMBRE,AP_PAT,AP_MAT,DIRECCION,TELEFONO,EMAIL,CURP,NOMBRE_EMPRESA,DIRECCION_EMPRESA,TEL_EMPRESA,RFC",
					   //campos
                       '"'.$nombre.'","'.$ap_pat.'","'.$ap_mat.'","'.$direccion.'","'.$telefono.'","'.$email.'","'.$curp.'","'.$nombre_empresa.'","'.$direccion_empresa.'","'.$tel_empresa.'","'.$rfc.'"');//valores
        }
		
function insertarServicio($fecha,$tipo_pago,$factura,$pagado,$id_tecnico,$id_cliente){
	
        $query = new Query();
        $query->insert("SERVICIO",//nombre tabla 
                       "FECHA,TIPO_PAGO,FACTURA,PAGADO,ID_TECNICO,ID_CLIENTE",
					   //campos
                       '"'.$fecha.'","'.$tipo_pago.'","'.$factura.'","'.$pagado.'","'.$id_tecnico.'","'.$id_cliente.'"');//valores
        }
		
function insertarCatalogoAparatos($nombre,$marca,$modelo,$no_serie,$color,$id_categoria){
		$query = new Query();
        $query->insert("CATALOGO_APARATOS",//nombre tabla 
                       "NOMBRE,MARCA,MODELO,NO_SERIE,COLOR,ID_CATEGORIA_APARATO",
					   //campos
                       '"'.$nombre.'","'.$marca.'","'.$modelo.'","'.$no_serie.'","'.$color.'","'.$id_categoria.'"');//valores
        }

function insertarRefaccionUtilizada($costo,$id_refaccion,$id_servicio){
        $query = new Query();
        $query->insert("REFACCION_UTILIZADA",//nombre tabla 
                       "COSTO,ID_REFACCION,ID_SERVICIO",
					   //campos
                       '"'.$costo.'","'.$id_refaccion.'","'.$id_servicio.'"');//valores
        }
		
function insertarRefaccion($nombre,$costo){
        $query = new Query();
        $query->insert("REFACCION",//nombre tabla 
                       "NOMBRE,COSTO",
					   //campos
                       '"'.$nombre.'","'.$costo.'"');//valores
        }
		
function insertarReparacion($descripcion,$costo){
        $query = new Query();
        $query->insert("REPARACION",//nombre tabla 
                       "DESCRIPCION,COSTO",
					   //campos
                       '"'.$descripcion.'","'.$costo.'"');//valores
        }
		
function insertarServicioReparacion($id_servicio,$id_reparacion){
        $query = new Query();
        $query->insert("SERVICIO_REPARACION",//nombre tabla 
                       "ID_SERVICIO,ID_REPARACION",
					   //campos
                       '"'.$id_servicio.'","'.$id_reparacion.'"');//valores
        }
		
function insertarAparato($id_catalogo_aparato,$id_servicio){
        $query = new Query();
        $query->insert("APARATO",//nombre tabla 
                       "ID_CATALOGO_APARATO,ID_SERVICIO",
					   //campos
                       '"'.$id_catalogo_aparato.'","'.$id_servicio.'"');//valores
        }
		
function insertarCategoria($nombre){
        $query = new Query();
        $query->insert("CATEGORIA_APARATO",//nombre tabla 
                       "NOMBRE",
					   //campos
                       '"'.$nombre.'"');//valores
        }
?>