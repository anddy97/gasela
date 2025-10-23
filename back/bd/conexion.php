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
        return $fila;
    }

    public function addUser($nombre, $apellido, $mail, $telefono, $password, $estado)
    {
        $sentencia = $this->conexion->prepare("INSERT INTO usuarios (nombre, apellido, mail, telefono, password, estado) VALUES (?, ?, ?, ?, ?, ?)");
        $sentencia->bind_param("ssssss", $nombre, $apellido, $mail, $telefono, $password, $estado);
        $sentencia->execute();

        $id_ingresado = $this->conexion->insert_id;

        return $id_ingresado;
    }


}
