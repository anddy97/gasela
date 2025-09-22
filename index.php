<?php include("back/bd/conexion.php");
$conexion = new conexion;
$allProducts = $conexion->getAll();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasela - Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estiloshome.css">
    <link rel="stylesheet" href="css/layout.css">

</head>

<body>
    <!-- navbar -->
    <?php include('layout/navbar.php'); ?>

    <main class="container">
        <!--------- portada ------>
        <div class="contslider">
            <ul>
                <li><img src="assets/portada1.jpg" alt=""></li>
                <li><img src="assets/portada4.jpg" alt=""></li>
                <li><img src="assets/portada3.jpg" alt=""></li>
            </ul>
        </div>
        <div class="destacados">
            <h2>Destacados</h2>
        </div>
        <!------- productos-destacados --------->
        <?php foreach ($allProducts as $key): ?>
        <div class="row">
            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <a href="detail.php">
                            <img src="assets/products/<?php echo $key['imagen'] ?> " alt="">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5>
                            <?php echo $key['nombreProducto'] ?>
                        </h5>
                        <p>Precio:
                            <?php echo $key['precioMenor'] ?>
                        </p>
                        <a href="detail.html" class="waves-effect waves-light btn purple lighten-1"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- boton de whatsapp -->
            <a href="#" class="whatsapp " target="_blank">
                <i class="icon-whatsapp"></i>
            </a>
    </main>
    <footer class="page-footer ">
        <div class="container">
            <div class="row">
                <div class="col l6 m6 s6">
                    <h5>footer Content</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta maxime earum deserunt cum nesciunt
                        saepe nobis ad consequuntur commodi amet. Impedit aspernatur nihil non nostrum.</p>
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