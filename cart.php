<?php
session_start();
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
      <div class="col l9 m9 s12" id="tab">
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

          <tbody id="filaCart">

          </tbody>
        </table>
        <!-- <p style="text-align:center;">No hay productos que mostrar</p> -->
      </div>
      <!----- total a pagar ----->
      <div class="col l3 m3 s12">
        <div class="total-compra">
          <div class="card">
            <div class="card-content pagar">
              <h5>Resumen de compra</h5>
              <div class="cont-resumen">
                <p>Total compra:</p>
                <p>$ 0
                </p>
              </div>
              <div class="cont-resumen">
                <p>Envio:</p>
                <p>
                  <a class="calcular-envio modal-trigger" href="#modal1">consultar envio</a>
                </p>
              </div>
              <div class="cont-resumen">
                <p>Total a pagar:</p>
                <p>$ 0 + envio</p>
              </div>
              <a class="btn pagar" href="#">continuar compra</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Envios</h4>
        <label for="">Provincia</label>
        <select name="" id="">
          <option value="">Capital Federal</option>
          <option value="">Buenos Aires</option>
          <option value="">CHubut</option>
          <option value="">Jujuy</option>
          <option value="">Mendoza</option>
        </select>
        <p>$ 2000</p>
        <p>Los retiros por sucursal no tienen costos</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">ok</a>
      </div>
    </div>


  </main>

  <?php include("layout/footer.php"); ?>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/main.js"></script>
  <script src="scripts/carrito.js"></script>
</body>

</html>