<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOKETA jeans - Catalogo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a class="waves-effect waves-light btn light-blue darken-4" href="detail.html"><i
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
                        <a class="waves-effect waves-light btn light-blue darken-4" href="detail.html"><i
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
                        <a class="waves-effect waves-light btn light-blue darken-4" href="detail.html"><i
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
                        <a class="waves-effect waves-light btn light-blue darken-4" href="detail.html"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- footer-->
    <?php include("layout/footer.php"); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/cata.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>