<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KOKETA jeans - carrito</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/cart.css">
  <link rel="stylesheet" href="css/layout.css">
</head>

<body>
  <!-- navbar -->
  <?php include('layout/navbar.php'); ?>
  <main>
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
            <tr>
              <td><img src="assets/imagen_muestra.jpg" alt=""></td>
              <td>Producto de prueba</td>
              <td>2xl</td>
              <td>
                <button class="boton-cant waves-effect restar">-</button>
                x1
                <button class="boton-cant waves-effect sumar">+</button>
              </td>
              <td>$1000.00 <i class="icon-trash-empty waves-effect"></i></td>
            </tr>
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
                <p>$1000</p>
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

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 m6 s6">
          <h5>footer Content</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime earum deserunt cum nesciunt saepe
            nobis ad consequuntur commodi amet. Impedit aspernatur nihil non nostrum.</p>
        </div>
        <div class="col l6 m6 s6">
          <h5>Contacto</h5>
          <ul>
            <li><a class="contacto" href="#"><i class="icon-facebook-squared"></i>Facebook</a></li>
            <li><a class="contacto" href="#"><i class="icon-instagram"></i>Instagram</a></li>
            <li><a class="contacto" href="#"><i class="icon-mail"></i>prueba@gmail.com</a></li>
            <li><a class="contacto" href="#"><i class="icon-phone"></i>1122334455</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container">
        © 2021 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#">More Links</a>
      </div>
    </div>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>