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
        <li class="tab col s3"><a href="#test-swipe-3">Cerrar Sesion</a></li>
    </ul>
    <div id="test-swipe-1" class="col s12">
        <p>producto:</p>
        <p>cantidad:</p>
        <p>fecha:</p>
        <p>valor</p>
    </div>
    <div id="test-swipe-2" class="col s12">
        <p>Nombre:Juan</p>
        <p>Apellido:Nada</p>
        <p>Mail:Juanada@gmail.com</p>
        <p>Telefono:1123558877</p>
    </div>




    <script src="scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>