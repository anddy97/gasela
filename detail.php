<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOKETA jeans - Detalle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilosdetail.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <?php include('layout/navbar.php'); ?>
    <main class="container">
        <!--------Imagen-detalle --------->
        <div class="row detallecompleto">
            <div class="col l6 m6 s12">
                <div class="cont-img">
                    <img src="assets/imagen_muestra2.jpg" alt="">
                </div>
            </div>
            <!------- texto-detalle ------>
            <div class="col l6 m6 s12">
                <div class="cont-detail">
                    <h1>Nombre del producto</h1>
                    <p class="precio">$500.00</p>
                    <p class="cantidad">Cantidad:</p>
                    <div class="cant">
                        <button class="btn-detail waves-effect black">-</button>
                        <p>x1</p>
                        <button class="btn-detail
                        waves-effect black">+</button>
                    </div>
                    <select class="browser-default">
                        <option value="" disabled selected>Seleccione talla</option>
                        <option value="s">Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="l">Xtra large</option>
                        <option value="l">2Xlarge</option>
                    </select>
                    <a class="btn-comprar waves-effect  purple lighten-1" href="cart.html">Comprar</a>
                </div>
            </div>
        </div>
        <!----------- productos-relacionados --------->
        <div class="productos-relacionados">
            <h2>Productos relacionados</h2>
        </div>
        <div class="row">
            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <a href="detail.html">
                            <img src="assets/imagen_muestra2.jpg" alt="">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a href="detail.html" class="waves-effect waves-light btn purple lighten-1"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>

            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <a href="detail.html">
                            <img src="assets/imagen_muestra2.jpg" alt="">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a href="detail.html" class="waves-effect waves-light btn purple lighten-1"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>

            <div class="col l3 m3 s6">
                <div class="card">
                    <div class="card-image">
                        <a href="detail.html">
                            <img src="assets/imagen_muestra2.jpg" alt="">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5>Producto de muestra</h5>
                        <p>Precio: $300.00</p>
                        <a href="detail.html" class="waves-effect waves-light btn purple lighten-1"><i
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
    <script src="scripts/main.js"></script>

</body>

</html>