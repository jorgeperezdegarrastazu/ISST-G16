<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nutriapp - Suscripciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

</head>

<body>
    
     <!-- Header -->
     <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index_usuario.php">
                NutriApp
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index_usuario.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="comidas.php">Tus comidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ejercicios.php">Tus Ejercicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="datos_usuario.php">Tus Datos</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <?php
                    // Verificar si el usuario ha iniciado sesión
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        echo '<div class="nav-item text-nowrap">
                                <span class="nav-link">Bienvenido, ' . $username . '</span>
                            </div>';
                    } else {
                        echo '<a class="nav-icon position-relative text-decoration-none" href="#"  data-bs-toggle="modal" data-bs-target="#templatemo_search" style="display: -webkit-box;"> 
                                <span class="nav-link"><strong>REGÍSTRATE</strong></span>
                            </a>';
                    }
                    ?>
                    <div>
                    </div>
                </div>
                    <div>

                    </div>
                </div>
            </div>

        </div>
    </nav>
    <!-- Header -->
    


    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="register-panel" style="display: block;">
                <!-- Formulario de registro (visible por defecto) -->
                <form id="register-form" action="php/registro_usuario.php" method="POST">
                    <!-- Campos del formulario -->
                    <input class="modal-content modal-body border-0 p-0" type="text" name="nombre" placeholder="Nombre" >
                    <input class="modal-content modal-body border-0 p-0" form-control type="text" name="apellido" placeholder="Apellido" >
                    <input class="modal-content modal-body border-0 p-0"   type="number" name="peso" placeholder="Peso" >
                    <input  class="modal-content modal-body border-0 p-0" type="number" name="altura" placeholder="Altura en cm" >
                    <input  class="modal-content modal-body border-0 p-0" type="number" name="edad" placeholder="Edad" >
                    <input  class="modal-content modal-body border-0 p-0" type="email" name="email" placeholder="Correo electrónico" >
                    <input  class="modal-content modal-body border-0 p-0" type="text" name="username" placeholder="Nombre de usuario" >
                    <input class="modal-content modal-body border-0 p-0" type="password" name="contrasena" placeholder="Contraseña" >
                    <button class="modal-content modal-body border-0 p-0" type="submit">Registrarse</button>
                </form>
            
                <!-- Enlace para ir al formulario de inicio de sesión -->
                <p>¿Ya tienes una cuenta? Inicia sesión</a></p>
            </div>
            <div id="login-panel" style="display: block;"></div>
                <!-- Formulario de inicio de sesión (inicialmente oculto) -->
                <form id="login-form" action="php/login_usuario.php" method="POST">
                    <input class="modal-content modal-body border-0 p-0" type="text" name="username" placeholder="Nombre de usuario" >
                    <input class="modal-content modal-body border-0 p-0" type="password" name="password" placeholder="Contraseña" >
                    <button class="modal-content modal-body border-0 p-0" type="submit-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Tipos de suscripción -->
    <section class="bg-light">
    <img src="assets/img/trabajo-en-progreso.png" alt="About NutriApp" style="max-width: 75%; margin-left: 20%;">
    </section>
    <!-- Tipos de suscripción -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



   
    <!-- Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">NutriApp</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@nutriapp.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light"><strong>Info</strong></h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index_usuario.php">Home</a></li>
                        <li><a class="text-decoration-none" href="comidas.php">Sobre Nosotros</a></li>
                        <li><a class="text-decoration-none" href="shop_usuario.php">Suscripciones</a></li>
                        <li><a class="text-decoration-none" href="datos_usuario.php">Contacto</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <img src="./assets/img/LOGO_ESCUELA.png" alt="Logo de la ETSIT" style="width: 110%; height: auto; opacity:0.8">
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2024 NutriApp
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer -->

    <!-- Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/formulario.js"></script>
    <!-- Script -->
</body>

</html>