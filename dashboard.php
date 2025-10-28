<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: usuario.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/layout.css">


<body>

    <?php include('layout/navbar.php'); ?>

    <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3"><a href="#test-swipe-1" class="active">Mis compras</a></li>
        <li class="tab col s3"><a href="#test-swipe-2">Mis datos</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12">
        <p>producto:</p>
        <p>cantidad:</p>
        <p>fecha:</p>
        <p>valor</p>
    </div>
    <div id="test-swipe-2" class="col s12">
        <p>Nombre: <?php echo htmlspecialchars($_SESSION['usuario']['NOMBRE']); ?></p>
        <p>Apellido: <?php echo htmlspecialchars($_SESSION['usuario']['APELLIDO']); ?></p>
        <p>Mail: <?php echo htmlspecialchars($_SESSION['usuario']['MAIL']); ?></p>
        <p>Telefono: <?php echo htmlspecialchars($_SESSION['usuario']['TELEFONO']); ?></p>
    </div>
    <a class="waves-effect waves-light btn-small" href="logout.php">Cerrar Session</a>
    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>