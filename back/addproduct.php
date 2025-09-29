<?php
session_start();

// $idProducto = $_POST['idproducto'] ?? 'no llego el id';
// $tallaproducto = $_POST['tallaproducto'] ?? 'no llego la talla';
// $cantidadproducto = $_POST['cantidadproducto'] ?? 'no llego la cantidad';

// echo "el producto tiene id= " . $idProducto . " y cantidad " . $cantidadproducto . " y talla " . $tallaproducto;


if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}
$encontrado = false;

?>