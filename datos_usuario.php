<?php
session_start();
include './php/conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    // Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
    header("Location: index.php");
    exit();
}

// Recuperar el nombre de usuario de la sesión
$username = $_SESSION['username'];

// Consultar la base de datos para obtener los datos del usuario
$sql = "SELECT * FROM usuarios_db WHERE username = '$username'";
$result = mysqli_query($conexion, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    // Si no se encuentra ningún usuario con el nombre de usuario, mostrar un mensaje de error
    echo "No se encontraron datos para este usuario.";
} else {
    // Mostrar los datos del usuario
    $row = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>NutriApp - Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />

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
    




    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <h1 class="text-success">Perfil de Usuario</h1>
                    
            <p><strong>Nombre de usuario:</strong> <?php echo $row['username']; ?></p>
            <p><strong>Nombre:</strong> <?php echo $row['nombre']; ?></p>
            <p><strong>Apellido:</strong> <?php echo $row['apellido']; ?></p>
            <p><strong>Peso:</strong> <?php echo $row['peso']; ?></p>
            <p><strong>Altura:</strong> <?php echo $row['altura']; ?></p>
            <p><strong>Edad:</strong> <?php echo $row['edad']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
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

<?php
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>