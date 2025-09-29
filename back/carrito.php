<?php
class carrito
{
    private $productos = [];

    //agreagar productos al carrito
    public function addProduct($id, $nombre, $talla, $cantidad, $precio, $imagen)
    {
        $encontrado = false;
        foreach ($this->productos as &$producto) {
            if ($producto['id'] === $id && $producto['nombre'] === $nombre && $producto['talla'] === $talla) {
                $producto['cantidad'] += $cantidad;
                $encontrado = true;
                break;
            }
        }

        if (!$encontrado) {
            $this->productos[] = [
                'id' => $id,
                'nombre' => $nombre,
                'cantidad' => $cantidad,
                'talla' => $talla,
                'precio' => $precio,
                'imagen' => $imagen
            ];
        }

    }

    //eliminar productos del carrito
    public function deleteProduct($id, $nombre, $talla)
    {
        foreach ($this->productos as $index => $producto) {
            if ($id === $producto['id'] && $nombre === $producto['nombre'] && $talla === $producto['talla']) {
                unset($this->productos[$index]);
                break;
            }
        }
        $this->productos = array_values($this->productos);
    }

    public function totalCart()
    {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        return $total;
    }



}





?>