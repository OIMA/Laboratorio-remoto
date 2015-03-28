<?php 
	include_once('../php/validaciones.php');
	include_once('../php/Query.inc');
	session_start();
	
	$numer   =  $_POST['numero'];
	$pass1   =  $_POST ['password'];

	if($numer !="" AND $pass1!=""){

		$var = new Query();
        $prefijo = substr($numer, 0, 3); // devuelve las primeras 3 letras
        switch($prefijo){
            case 'alu':
                $var->sql = 'select id_alumno, numero_control, imagen_p, passwd, nombre, ap_paterno, ap_materno from alumnos';
                $usuarios = $var->Select('obj');
                foreach($usuarios as $u){

                    $num=$u->numero_control;
                    $nombre = $u->nombre;
                    $pass2 = $u->passwd;
                    
                    if($numer==$num and $pass2==$pass1 ){
                        $_SESSION['id']=$u->id_alumno;
                        $_SESSION['usuario'] = $nombre .' '.$u->ap_paterno .' '.$u->ap_materno;
                        $_SESSION['num_control'] = $u->numero_control;
                        $_SESSION['permisos'] = 'Alumno';
                        $_SESSION['ruta']= $u->imagen_p;
                        
                                header('location:../pages/alumno/alumno.php');
                                break;

                    }else{
                        $_SESSION['error']= 'Nombre de usuario o contraseña incorrectos';
                        header('location:../index.php');
                    }
                }
            break;
            /////////////////////////////////////////////////////////
            case 'ins':
                $var->sql = 'select id_instructor, numero_control,imagen_p ,passwd, nombre, ap_paterno, ap_materno from instructores';
                $usuarios = $var->Select('obj');
                foreach($usuarios as $u){

                    $num=$u->numero_control;
                    $nombre = $u->nombre;
                    $pass2 = $u->passwd;
                    
                    if($numer==$num and $pass2==$pass1 ){
                        $_SESSION['id']=$u->id_instructor;
                        $_SESSION['usuario'] = $nombre .' '.$u->ap_paterno .' '.$u->ap_materno;
                        $_SESSION['num_control'] = $u->numero_control;
                        $_SESSION['permisos'] = 'Instructor';
                        $_SESSION['ruta']= $u->imagen_p;

                                header('location:../pages/instructor/instructor.php');
                                break;
                    }else{
                        $_SESSION['error']= 'Nombre de usuario o contraseña incorrectos';
                        header('location:../index.php');
                    }
                }
            break;
            //////////////////////////////////////////////////
            case 'adm':

                $var->sql = 'select id_administrador, numero_control, imagen_p ,passwd, nombre, ap_paterno, ap_materno from administradores';
                $usuarios = $var->Select('obj');
                foreach($usuarios as $u){

                    $num=$u->numero_control;
                    $nombre2 = $u->nombre;
                    $pass2 = $u->passwd;
                  
                    if($numer==$num and $pass2==$pass1 ){
                        $_SESSION['id']=$u->id_administrador;
                        $_SESSION['usuario'] = $nombre2 .' '.$u->ap_paterno .' '.$u->ap_materno;
                        $_SESSION['num_control'] = $u->numero_control;
                        $_SESSION['permisos'] = 'Administrador';
                        $_SESSION['ruta']= $u->imagen_p;
                        
                                header('location:../pages/admin/admin.php');
                                break;
                    }else{
                        $_SESSION['error']= 'Nombre de usuario o contraseña incorrectos';
                        header('location:../index.php');
                    }
                }
            break;
            default:
                $_SESSION['existe'] = 'Nombre o contraseña incorrectos';
        header('location:../index.php');
            break;

        }
		
         //header('location:../index.php');
        
            
	}else{
		$_SESSION['error'] = 'Uno o mas campos estan vacios';
		header('location:../index.php');
	}
	
	
	
?>