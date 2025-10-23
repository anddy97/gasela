<?php
// registrar usuario
include("./bd/conexion.php");
$conexion = new conexion;

switch ($_POST['accion']) {
    case 'agregarUsr':
        //verificar si existe ya ese usuario con el mail
        //verificar si las contraseñas son validas
        //


        $newUser = $conexion->addUser($_POST['registrar_nombre'], $_POST['registrar_apellido'], $_POST['registrar_email'], $_POST['registrar_telefono'], $_POST['registrar_password'], "USR");
        echo "Se registro con exito!!";
        break;

    case 'iniciarSesion':
        echo "inicio de sesion exitoso";
        break;

    default:
        http_response_code(400);
        echo json_encode(["error" => "accion invalida"]);
        break;
}



?>