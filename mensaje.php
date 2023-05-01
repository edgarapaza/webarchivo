<!DOCTYPE html>
<html lang="es">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/x-icon" href="favicon.ico">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="css/style.css">
   <title>REGISTRO</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class='bx bxs-envelope'></i> archivoregionalpuno@hotmail.com</p>
                    <p> <i class='bx bxs-phone-call'></i> 951-867365</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100009717904227" target="_blank"><i class='bx bxl-facebook'></i></a>

                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Archivo Regional de Puno<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Inscripciones Jornada de Capacitacion en Archivo</a>
                    </li>

                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    class="btn btn-brand ms-lg-3">Contactos</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row gy-4">
            <!--imagen del archivo- cambiar si es necesario-->
            <div class="col-lg-8">
                <h2>Gracias por participar</h2>
                <p>El archivo Regional de Puno, agradece su participacion</p>
                <br>
                <h3>Mensaje</h3>
                <?php
                $i = $_REQUEST['r'];
                switch ($i) {
                    case 1:
                        echo " <p>Hemos enviado el link de la pagina de acceso a los materiales del curso al correo electrino que escribió en su registro.  En el correo electrino encontrará el usuario y contraseña para ingresar a la plataforma. </p>";
                        break;
                    case 2:
                        echo "<p>Lo sentimos, las contraseñas NO son iguales, por favor, vuelva a efectuar su inscripcion por favor.  Gracias</p>";
                        break;
                    case 3:
                        echo " <p>Lo sentimos, <strong>Usted ya esta registrado</strong>.  Si tiene problemas para el ingreso, por favor comunicarse con el administrador del Sistema Ing. Edgar Apaza Choque al Celular 935 - 017 466</p>
";
                        break;
                }
                ?>





            </div>
        </div>
</div>

<!--footer-borrar si no es muy atractivo-->
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Archivo Regional de Puno<span class="dot">.</span></h4>
                        <p>Agradecemos a la Empresa <strong>KATARI A&C</strong>, por su colaboración en alojarnos en su pagina web</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright Katari Software 2023. All rights Reserved</p>
        </div>
    </footer>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    
</body>
</html>