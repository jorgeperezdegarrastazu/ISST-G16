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

<di>
    <!-- Barra Navegación -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@nutriapp.com</a>
                    <i class="fa fa-phone mx-2"></i>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Barra Navegación -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                NutriApp
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="suscription.html">Suscripciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contacto</a>
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
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#"  data-bs-toggle="modal" data-bs-target="#templatemo_search"> <!--onclick="toggleLoginPanel()""-->
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <!-- <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>   -->
                    </a>
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
                <form id="register-form" action="php/registro.php" method="POST">
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
                <form id="login-form" action="php/login.php" method="POST">
                    <input class="modal-content modal-body border-0 p-0" type="text" name="username" placeholder="Nombre de usuario" >
                    <input class="modal-content modal-body border-0 p-0" type="password" name="password" placeholder="Contraseña" >
                    <button class="modal-content modal-body border-0 p-0" type="submit-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="templatemo-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#templatemo-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#templatemo-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#templatemo-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/frutas.png" alt="" style="max-width: 75%;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>NutriApp</b> Tu app de salud</h1>
                                <h3 class="h2">Expertos a la palma de tu mano</h3>
                                <p>
                                    Registrate, añade tus calorías consumidas y alucina con la cantidad de opciones que te damos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/suscripcion.png" alt="" style="max-width: 75%;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Suscripción <strong>Premium</strong></h1>
                                <h3 class="h2">Lleva tu salud a otro nivel</h3>
                                <p>
                                    Podrás añadir todo los ejercicios que has realizado a lo largo del día. 
                                    Un grupo de expertos te recomendará ejercicios especificos para tus capacidades y objetivos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/ia.png" alt="" style="max-width: 75%;">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Tu primer entrenador <strong>IA-inteligente</strong></h1>
                                <h3 class="h2">El futuro de tu alimentación y tus entrenos</h3>
                                <p>
                                    Podrás hablar directamente con una IA, la cuál todos los datos que puedes imaginarte, y preguntarle cualquier duda que tengas.
                                </p>
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
    <!-- End Banner Hero -->


    <!-- Start Competición -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Competiciones del Mes</h1>
                <p>
                    A parte de fijar tus objetivos diarios, mensuales o anuales, tambien podrás competir contra otro usuarios Premium. Cada mes se pondrán retos basados en pasos.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/mini-maraton.png" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Mini Maratón</h5>
                <p class="text-center"><a class="btn btn-success">Me apunto</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/media-maraton.png" class="rounded-circle img-fluid border" ></a>
                <h2 class="h5 text-center mt-3 mb-3">Media Maratón</h2>
                <p class="text-center"><a class="btn btn-success">Me apunto</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/maraton.png" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Maratón</h2>
                <p class="text-center"><a class="btn btn-success">Me apunto</a></p>
            </div>
        </div>
    </section>
    <!-- End Competición -->





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
                        <li><a class="text-decoration-none" href="index.html">Home</a></li>
                        <li><a class="text-decoration-none" href="about.html">Sobre Nosotros</a></li>
                        <li><a class="text-decoration-none" href="shop.html">Suscripciones</a></li>
                        <li><a class="text-decoration-none" href="index.contact">Contacto</a></li>
                    </ul>
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

    <!-- Script de SQL.js -->
    <!-- <script type="module">
        import { openDB, deleteDB, wrap, unwrap } from 'https://cdn.jsdelivr.net/npm/idb@8/+esm';
      
        async function doDatabaseStuff() {
          const db = await openDB('usuarios.db');
        }
    </script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.10.2/sql-asm.js" integrity="sha512-iM0uXI4U8SuJdfzy3KTUp4umkH+XweQr7LcShsvKILNh38n22rPzQrmigVBO1Kywp00iVsLQ1MAI+nPy2dSoJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        async function openDatabase() {
          try {
            const db = new SQL.Database();
            await db.open('usuarios.db');
            console.log('Database opened successfully!');

          } catch (error) {
            console.error('Error opening database:', error);
          }
        }
        openDatabase();
        </script> -->

        <!-- <script>
            const sqlite3 = require('sqlite3').verbose();
            const db = new sqlite3.Database('database.db');
        </script> -->

    <!-- Script de tu registro.js -->
    <script src="assets/sql/registro.js"></script>

</body>

</html>