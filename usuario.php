<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasela - Ingresar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styleusers.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <!-- navbar -->
    <?php include('layout/navbar.php'); ?>

    <main class="container">
        <div class="row login">
            <div class="col offset-l4 l4 offset-m4 m4 s12">
                <ul class="tabs ">
                    <li class="tab col l6 m6 s6"><a href="#registrarse">Registrarse</a></li>
                    <li class="tab col l6 m6 s6"><a href="#entrar">Ingresar</a></li>
                </ul>
            </div>
            <!------------ REGISTRARSE ---------------->
            <div class="col offset-l4 l4 offset-m4 m4 s12" id="registrarse">
                <form method="POST" id="registrar">
                    <div class="input-field">
                        <input type="text" name="registrar_nombre" placeholder="Nombre:">
                    </div>
                    <div class="input-field">
                        <input type="text" name="registrar_apellido" placeholder="Apellido:">
                    </div>
                    <div class="input-field">
                        <input type="email" name="registrar_email" placeholder="Email:">
                    </div>
                    <div class="input-field">
                        <input type="tel" name="registrar_telefono" placeholder="Telefono:">
                    </div>
                    <div class="input-field">
                        <input type="password" name="registrar_password" placeholder="Contraseña:">
                    </div>
                    <div class="input-field">
                        <input type="password" name="pass_repeat" placeholder="Repetir contraseña:">
                    </div>
                    <p>
                        <label>
                            <input type="checkbox" />
                            <span>Aceptar terminos y condiciones</span>
                        </label>
                    </p>
                    <button type="submit" class="btn black lighten-1">Registrarme</button>
                </form><br>
                <a href="#">Leer terminos y conidiciones</a>
            </div>
            <!----------- INGRESSAR ------------>
            <div class="col offset-l4 l4 offset-m4 m4 s12" id="entrar">
                <form action="">
                    <div class="input-field">
                        <i class="icon-user prefix"></i>
                        <input type="text" name="in_usuario" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="icon-key prefix"></i>
                        <input type="password" name="in_pass" placeholder="Contraseña">
                    </div>
                    <button class="btn black lighten-1">Ingresar</button><br><br>
                    <a href="#">¿olvidaste tu contraseña?</a>
                </form>
            </div>
        </div>
    </main>
    <!-- footer-->
    <?php include("layout/footer.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/usuario.js"></script>
</body>

</html>