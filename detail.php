<?php
if (!isset($_GET['product']) || empty($_GET['product'])) {
    header("Location: index.php");
    exit();
}
$producto = $_GET['product'];

include_once("back/bd/conexion.php");
$conexion = new conexion;
$detailProduct = $conexion->getProduct($producto);
session_start();


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASELA - Detalle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <img src="assets/products/<?php echo htmlspecialchars($detailProduct['imagen']); ?>" alt="">
                </div>
            </div>
            <!------- texto-detalle ------>
            <form id="formdatos" action="cart.php" method="post">
                <div class="col l6 m6 s12">
                    <div class="cont-detail">
                        <h1><?php echo htmlspecialchars($detailProduct['nombreProducto']); ?></h1>
                        <p class="precio">$<?php echo htmlspecialchars($detailProduct['precioMenor']); ?></p>
                        <p class="cantidad">Cantidad:</p>
                        <div class="cant">
                            <button type="button" class="btn-detail " id="btn-restar-cont">-</button>
                            <input type="text" id="contador-product" value="1" readonly name="cantidadproducto">
                            <button type="button" class="btn-detail
                        " id="btn-sumar-cont">+</button>
                        </div>
                        <select class="browser-default" name="tallaproducto">
                            <option value="" disabled selected>Seleccione talla</option>
                            <option value="s">Small</option>
                            <option value="m">Medium</option>
                            <option value="l">Large</option>
                            <option value="l">Xtra large</option>
                            <option value="l">2Xlarge</option>
                        </select>
                        <input type="hidden" name="idproducto"
                            value="<?php echo htmlspecialchars($detailProduct['id']); ?>">
                        <button type="submit" name="btn-submit"
                            class="btn-comprar waves-effect waves-light indigo darken-4">Agregar</button>
                    </div>
                </div>
            </form>
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
                        <a href="detail.html" class="waves-effect waves-light btn light-blue darken-4"><i
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
                        <a href="detail.html" class="waves-effect waves-light btn light-blue darken-4"><i
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
                        <a href="detail.html" class="waves-effect waves-light btn light-blue darken-4"><i
                                class="icon-basket right"></i>agregar</a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- footer-->
    <?php include("layout/footer.php"); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/detail.js"></script>

</body>

</html>