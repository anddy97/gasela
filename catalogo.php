<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOKETA jeans - Catalogo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estiloscata.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <!-- navbar -->
    <?php include('layout/navbar.php'); ?>

    <main class="container">
        <!----------------- PORTADA ----------->
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="portada">
                    <img src="assets/portadaCatalogo.jpg" alt="">
                </div>
            </div>
        </div>
        <!--------------- PRODUCTOS ------------>

        <div class="row">
            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/imagen_muestra2.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a class="waves-effect waves-light btn purple lighten-1" href="detail.html"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>

            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/imagen_muestra2.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a class="waves-effect waves-light btn purple lighten-1" href="detail.html"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>

            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/imagen_muestra2.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a class="waves-effect waves-light btn purple lighten-1" href="detail.html"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>

            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/imagen_muestra2.jpg" alt="">
                        <div class="overlay"></div>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a class="waves-effect waves-light btn purple lighten-1" href="detail.html"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="scripts/cata.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>