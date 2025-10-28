<?php
// registrar usuario
include("./bd/conexion.php");
$conexion = new conexion;

switch ($_POST['accion']) {
    case 'agregarUsr':
        //verificar si existe ya ese usuario con el mail ********ok**********
        $user = $conexion->verifyMailUsr($_POST['registrar_email']);
        if ($user) {
            echo json_encode([
                'success' => false,
                'message' => 'El correo ya esta registrado.'
            ]);
        } else {
            $newUser = $conexion->addUser($_POST['registrar_nombre'], $_POST['registrar_apellido'], $_POST['registrar_email'], $_POST['registrar_telefono'], $_POST['registrar_password'], "USR");
            echo json_encode([
                'success' => true,
                'message' => 'El correo se registro con exito'
            ]);
        }
        break;

    //inicio de sesion
    case 'iniciarSesion':
        $user = $conexion->verifyUsr($_POST['in_usuario'], $_POST['in_pass']);
        if ($user) {
            session_start();
            $_SESSION['usuario'] = [
                'ID' => $user['id'],
                'NOMBRE' => $user['nombre'],
                'APELLIDO' => $user['apellido'],
                'TELEFONO' => $user['telefono'],
                'MAIL' => $user['mail'],
                'PASSWORD' => $user['password'],
            ];
            echo json_encode([
                'success' => true,
                'message' => 'inicio de sesion exitoso',
                'redirect' => 'dashboard.php'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'usuario o contrasenia incorrectos'
            ]);
        }
        break;

    default:
        http_response_code(400);
        echo json_encode(["error" => "accion invalida"]);
        break;
}



?>