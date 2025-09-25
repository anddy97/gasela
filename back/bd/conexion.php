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

    public function getProduct($name)
    {
        $ident = $name;
        $sentencia = $this->conexion->prepare("SELECT * FROM productos WHERE TRIM(LOWER(nombreProducto)) = TRIM(LOWER(?))");
        $sentencia->bind_param("s", $ident);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        $fila = $resultado->fetch_assoc();
        return $fila;
    }




}
