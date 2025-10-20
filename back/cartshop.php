<?php
header('Content-Type: application/json');
session_start();

class Cart
{
    private $productos = [];

    public function addCart($id, $nombre, $precio, $imagen, $cantidad, $talla)
    {
        $productoNuevo = [
            "ID" => $id,
            "NOMBRE" => $nombre,
            "PRECIO" => $precio,
            "IMAGEN" => $imagen,
            "CANTIDAD" => $cantidad,
            "TALLA" => $talla
        ];

        foreach ($this->productos as &$item) {
            if ($item['ID'] === $id && $item['TALLA'] === $talla) {
                $item['CANTIDAD'] += $cantidad;
                return;
            }
        }

        $this->productos[] = $productoNuevo;
    }

    public function deleteProduct($id, $talla)
    {
        foreach ($this->productos as $index => $producto) {
            if ($producto['ID'] === $id && $producto['TALLA'] === $talla) {
                unset($this->productos[$index]);
                $this->productos = array_values($this->productos);
                return true;
            }
        }
        return false;
    }

    public function showCart()
    {
        return $this->productos;
    }
}

// Inicializar carrito en sesión si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = new Cart();
}

// Obtener datos JSON del cuerpo de la solicitud (si hay)
$input = json_decode(file_get_contents("php://input"), true);

// Obtener instancia del carrito
$carrito = $_SESSION['carrito'];

// Si no hay datos o no hay acción, simplemente retornar el carrito
if (!is_array($input) || !isset($input['accion'])) {
    echo json_encode($carrito->showCart());
    exit;
}

// Procesar acción
$accion = $input['accion'];

switch ($accion) {
    case 'agregar':
        $carrito->addCart(
            $input['id'],
            $input['nombre'],
            (float) $input['precio'],
            $input['imagen'],
            (int) $input['cantidad'],
            $input['talla']
        );
        break;

    case 'eliminar':
        $carrito->deleteProduct(
            $input['id'],
            $input['talla']
        );
        break;

    default:
        http_response_code(400);
        echo json_encode(["error" => "Acción no válida"]);
        exit;
}

// Siempre devolver el carrito actualizado
echo json_encode($carrito->showCart());

$_SESSION['carrito'] = $carrito;
exit;