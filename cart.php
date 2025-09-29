<?php
include_once("back/bd/conexion.php");
include_once("back/carrito.php");


session_start();
if (isset($_POST['idproducto'], $_POST['tallaproducto'], $_POST['cantidadproducto'])) {
  $id = $_POST['idproducto'];
  $talla = $_POST['tallaproducto'];
  $cantidad = $_POST['cantidadproducto'];

  $conexion = new conexion();
  $productBD = $conexion->getProduct($id);

  $productNuevo = array(
    'ID' => $id,
    'NOMBRE' => $productBD['nombreProducto'],
    'PRECIO' => $productBD['precioMenor'],
    'CANTIDAD' => $cantidad,
    'TALLA' => $talla,
    'IMAGEN' => $productBD['imagen']
  );
}

$productoEncontrado = false;

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

// Buscar si el producto ya existe (mismo ID y talla)
foreach ($_SESSION['cart'] as &$product) {
  if ($product['ID'] === $id && $product['TALLA'] === $talla) {
    $product['CANTIDAD'] += $cantidad;
    $productoEncontrado = true;
    break;
  }
}

// Si no se encontró, agregar el nuevo producto al carrito
if (!$productoEncontrado) {
  $_SESSION['cart'][] = $productNuevo;
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GASELA - carrito</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/layout.css">
</head>

<body>
  <!-- navbar -->
  <?php include('layout/navbar.php'); ?>
  <main>
    <!-- productos del carrito -->
    <div class="row">
      <div class="col l9 m9 s12">
        <table class="centered ">
          <thead>
            <tr>
              <th>Img</th>
              <th>Producto:</th>
              <th>Talla:</th>
              <th>Cantidad:</th>
              <th>Subtotal:</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($_SESSION['cart'] as $key): ?>
              <tr>
                <td><img src="assets/products/<?= htmlspecialchars($key['IMAGEN']) ?>" alt=""></td>
                <td><?= htmlspecialchars($key['NOMBRE']) ?></td>
                <td><?= htmlspecialchars($key['TALLA']) ?></td>
                <td>
                  <?= htmlspecialchars($key['CANTIDAD']) ?>
                </td>
                <td><?= htmlspecialchars($key['PRECIO'] * $key['CANTIDAD']) ?><i class="fa-solid fa-trash"></i></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!----- total a pagar ----->
      <div class="col l3 m3 s12">
        <div class="total-compra">
          <div class="card">
            <div class="card-content pagar">
              <h5>Resumen de compra</h5>
              <div class="cont-resumen">
                <p>Sub total:</p>
                <p>$subtotal
                </p>
              </div>
              <div class="cont-resumen">
                <p>Envio:</p>
                <p>
                  <a class="calcular-envio" href="#">calcular envio</a>
                </p>
              </div>
              <div class="cont-resumen">
                <p>Total a pagar:</p>
                <p>$1000 + envio</p>
              </div>
              <a class="btn pagar" href="#">continuar compra</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <?php include("layout/footer.php"); ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>