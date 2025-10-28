<?php
class conexion
{
    private $server;
    private $user;
    private $password;
    private $database;
    private $port;
    private $conexion;

    function __construct()
    {
        $listadatos = $this->datosConexion();
        foreach ($listadatos as $key => $value) {
            $this->server = $value['server'];
            $this->user = $value['user'];
            $this->password = $value['password'];
            $this->database = $value['database'];
            $this->port = $value['port'];
        }
        $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
        if ($this->conexion->connect_errno) {
            echo "algo salio mal en la conexion";
            die();
        }

    }

    private function datosConexion()
    {
        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion . "/" . "config");
        return json_decode($jsondata, true);
    }

    public function getAll()
    {
        $sentencia = $this->conexion->prepare("SELECT * FROM productos");
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $productos = $resultado->fetch_all(MYSQLI_ASSOC);
        $sentencia->close();
        return $productos;
    }

    public function getProduct($id)
    {
        $ident = $id;
        $sentencia = $this->conexion->prepare("SELECT * FROM productos WHERE TRIM(LOWER(id)) = TRIM(LOWER(?))");
        $sentencia->bind_param("s", $ident);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $fila = $resultado->fetch_assoc();
        $sentencia->close();
        return $fila;
    }

    public function addUser($nombre, $apellido, $mail, $telefono, $password, $estado)
    {
        $passHash = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $this->conexion->prepare("INSERT INTO usuarios (nombre, apellido, mail, telefono, password, estado) VALUES (?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("ssssss", $nombre, $apellido, $mail, $telefono, $passHash, $estado);
        $sentencia->execute();

        $id_ingresado = $this->conexion->insert_id;
        $sentencia->close();
        return $id_ingresado;
    }

    public function verifyMailUsr($mail)
    {
        $sentencia = $this->conexion->prepare("SELECT * FROM usuarios WHERE TRIM(LOWER(mail)) = TRIM(LOWER(?)) ");
        $sentencia->bind_param("s", $mail);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $exists = ($resultado->num_rows > 0);

        $sentencia->close();

        return $exists;
    }
    public function verifyUsr($mail, $pass)
    {
        $sentencia = $this->conexion->prepare("SELECT * FROM usuarios WHERE TRIM(LOWER(mail)) = TRIM(LOWER(?)) LIMIT 1");
        $sentencia->bind_param("s", $mail);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $sentencia->close();
        $user = $resultado->fetch_assoc();
        if ($user) {
            if (password_verify($pass, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }


}