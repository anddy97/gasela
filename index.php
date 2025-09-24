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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="detail.php?product= <?php echo $key['nombreProducto'] ?> ">
                            <img src="assets/products/<?php echo $key['imagen'] ?> " alt="">
                            <div class="overlay"></div>
                        </a>
                    </div>
                    <div class="card-content">
                        <h5>
                            <?php echo $key['nombreProducto'] ?>
                        </h5>
                        <p>Precio unidad:
                            <?php echo $key['precioMenor'] ?>
                        </p>
                        <a href="detail.php" class="waves-effect waves-light btn  indigo darken-4"><i
                                class="fa-solid fa-cart-shopping right"></i>agregar</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

    </main>
    <!-- footer-->
    <?php include("layout/footer.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/main.js"></script>
</body>

</html>