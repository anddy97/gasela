<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasela jeans - Contactos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Overlock+SC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/stylecontacto.css">
</head>

<body>
    <!-- navbar -->
    <?php include('layout/navbar.php'); ?>


    <main class="container">
        <div class="row">
            <div class="col m12 l12 s12">
                <div class="portada">
                    <!-- poner imagen de portada -->
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="  col l6 m6 s12">
                <div class="row">
                    <div class="col l12 m12 s12">
                        <div class="maps">
                            <h4 class="text-ubicacion">Nos ubicamos en:</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1951.4153975385027!2d-58.480100097112306!3d-34.65782364598691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc96e8a857cf5%3A0x1e5382d53f9af1cf!2sAv.%20Escalada%20%26%20Av.%20Eva%20Per%C3%B3n%2C%20C1407%20CABA!5e0!3m2!1ses-419!2sar!4v1618495140719!5m2!1ses-419!2sar"
                                width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <form id="formu" class="formulario col l6 m6 s12" action="#">
                <h4 class="center">Enviar mail</h4>
                <div class="row ">
                    <div class=" input-field col l6 m6 s6">
                        <i class="fa-solid fa-user prefix"></i>
                        <input id="icon_name" type="text" class="validate" required>
                        <label for="icon_name"> Nombre:</label>
                    </div>
                    <div class="input-field col l6 m6 s6">
                        <input id="surname" type="text" class="validate" required>
                        <label for="surname">Apellido:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l6 m6 s6">
                        <i class="fa-solid fa-phone prefix"></i>
                        <input id="icon-telephone" type="number" class="validate" required>
                        <label for="icon-telephone">Telefono:</label>
                    </div>
                    <div class="input-field col l6 m6 s6">
                        <i class="fa-solid fa-envelope prefix"></i>
                        <input id="icon-mail" type="email" class="validate" required>
                        <label for="icon-mail">Email:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <input id="icon-asunt" type="text" class="validate" required>
                        <label for="icon-asunt">Asunto:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <i class="fa-solid fa-pen-to-square prefix"></i>
                        <textarea name="msjetexto" class="materialize-textarea" placeholder="Escribe tu msje:"
                            required></textarea>
                    </div>
                </div>
                <button class="btn waves-effect" type="submit" name="action">Enviar
                    <i class="icon-paper-plane right"></i>
                </button>
            </form>
        </div>
    </main>
    <!-- footer-->
    <?php include("layout/footer.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/formain.js"></script>
</body>

</html>