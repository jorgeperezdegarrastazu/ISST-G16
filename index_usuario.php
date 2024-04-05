<!DOCTYPE html>
<html lang="en">

<head>
    <title>NutriApp</title>
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
    

    <!-- Start Banner Hero -->
    <div id="templatemo-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner" >
            <div style=" min-height: 35rem;" class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/barra_pasos.png" alt="" style="max-width: 65%;margin-left: 13%;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>234 pasos</b> para llegar a tu reto diario</h1>
                                <h3 class="h2">Te quedan 3h y 45 minutos!!</h3>
                                <p>
                                    Aquí puede ver tu último recorrido:
                                </p>
                                <img src="./assets/img/recorrido.png" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/calculadora-de-calorias.png" alt="" style="max-width: 65%;margin-left: 13%;">
                        
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <p class="h1 text-success" id="total-calorias-consumidas"><strong>0</strong></p>
                            <p class="h1 text-success"><strong>Calorías Consumidas</strong></p>
                            <h3 class="h2">Si has comido algo, ¡apúntalo!</h3>
                            <div class="form-group">
                                <input type="number" id="nuevas-calorias-consumidas" class="form-control" placeholder="Introduce las calorías">
                                <button type="button" id="agregar-calorias-consumidas" class="btn btn-primary">Añadir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./assets/img/calorias-quemadas.png" alt="" style="max-width: 65%;margin-left: 13%;">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <p class="h1 text-success" id="total-calorias-quemadas"><strong>0</strong></p>
                            <p class="h1 text-success"><strong>Calorías Quemadas</strong></p>
                            <h3 class="h2">Si has realizado algún ejercicio, ¡apúntalo!</h3>
                            <div class="form-group">
                                <input type="number" id="nuevas-calorias-quemadas" class="form-control" placeholder="Introduce las calorías">
                                <button type="button" id="agregar-calorias-quemadas" class="btn btn-primary">Añadir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#templatemo-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#templatemo-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col">
            <h1 class="h2 text-success">Total de calorías:</h1>
            <p class="h2 text-success"  id="total-calorias"><strong>0</strong></p>
        </div>
    </div>
</div>

<!-- Script JavaScript -->
<!-- Script JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputConsumidas = document.getElementById('nuevas-calorias-consumidas');
        const inputQuemadas = document.getElementById('nuevas-calorias-quemadas');
        const botonConsumidas = document.getElementById('agregar-calorias-consumidas');
        const botonQuemadas = document.getElementById('agregar-calorias-quemadas');
        const totalCaloriasElement = document.getElementById('total-calorias');
        const totalCaloriasConsumidasElement = document.getElementById('total-calorias-consumidas');
        const totalCaloriasQuemadasElement = document.getElementById('total-calorias-quemadas');

        let totalCalorias = 0;
        let totalCaloriasConsumidas = 0;
        let totalCaloriasQuemadas = 0;

        // Función para actualizar los elementos HTML con los totales
        function actualizarTotales() {
            totalCaloriasElement.textContent = totalCalorias;
            totalCaloriasConsumidasElement.textContent = totalCaloriasConsumidas;
            totalCaloriasQuemadasElement.textContent = totalCaloriasQuemadas;
        }

        // Función para sumar las calorías consumidas al total
        function sumarCaloriasConsumidas() {
            const caloriasConsumidas = parseFloat(inputConsumidas.value) || 0;
            totalCaloriasConsumidas += caloriasConsumidas;
            totalCalorias += caloriasConsumidas;
            actualizarTotales();
        }

        // Función para restar las calorías quemadas al total
        function restarCaloriasQuemadas() {
            const caloriasQuemadas = parseFloat(inputQuemadas.value) || 0;
            totalCaloriasQuemadas += caloriasQuemadas;
            totalCalorias -= caloriasQuemadas;
            actualizarTotales();
        }

        // Agregar eventos de clic a los botones "Añadir"
        botonConsumidas.addEventListener('click', sumarCaloriasConsumidas);
        botonQuemadas.addEventListener('click', restarCaloriasQuemadas);
    });
</script>



    <!-- End Banner Hero -->




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
                    <img src="./assets/img/LOGO_ESCUELA.png" alt="Logo de la ETSIT" style="width: 110%; height: auto; opacity:0.8 opacity:0.8">
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

    <!-- Scripts de jQuery y Bootstrap -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Otros scripts relacionados con la plantilla y personalizados -->
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/formulario.js"></script>
    <script src="assets/sql/registro.js"></script>

</body>

</html>