<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cursos de ingles</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img id="header1" src="assets/img/logoingles.png" ></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#courses">Cursos</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Sobre Nosotros</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Soporte</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Registrarse</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="close.php">Cerrar sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <!-- Masthead Heading-->
            <img src="assets/img/header.png">
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <a href='https://www.freepik.es/vectores/fondo'><img id="imgfree" src="assets\img\english.jpg" width="15%"></a><br>
            <style type="text/css">
                p {
                    font-size: 2em;
                }
                
                #imgfree {
                    border-radius: 50%;
                }
            </style>
            <p>Todo el inglés en un solo lugar</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="courses">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cursos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/img2.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/img1.jpg" alt="..." />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/img3.jpg" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Nosotros</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <center><div>
                    <p class="lead">Somos una iniciativa que pretende apoyar a maestos y alumnos la </p>
                </div></center>
                
            <center><a href="mas.php"><button id="boton" class="btn btn-primary"  data-bs-dismiss="modal">
                <i class="fas fa-info"></i>
                Ver más (Membresias)
                </button></a></center>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Soporte</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Nombre completo</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es requerido.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Correo electronico</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Un Email es requerido.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">El Email no es valido.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Numero de telefono</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Un numero de telefono es requerido.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Mensaje</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Un mensaje es requerido.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error al enviar el mensaje!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Donde estamos</h4>
                    <p class="lead mb-0">
                        Av. Liber Arce, 15800
                        <br /> Ciudad de la costa, Canelones
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Nuestras redes</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Politicas de privacidad</h4>
                    <a href="politicas.php">Click aquí para informarte sobre nuestras politicas de privacidad</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Bit by Bit 2021</small></div>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/img2.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Este curso tiene las palabras más esenciales para del conocimiento del Inglés. Aprenderás los verbos básicos, preposiciones, sustantivos. Serás capaz de entender textos simples.Este curso tiene consistirá en el aprendizaje
                                    de las 100 palabras más comunes del idioma Inglés.</p>
                                <button class="btn btn-primary" href="login.php" data-bs-dismiss="modal">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/img1.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Este curso medio tiene un montón de palabras nuevas, aprenderás más sobre verbos, sustantivos y gramatica. Serás capaz de entender textos B1 y B2, e incluso podrás escribir textos simples.</p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/img3.jpg" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Tendrás un conocimiento incluso más amplio sobre el idioma Inglés, serás capaz de escribir y entender textos más complejos, podrás seguir piezas de contenido nativo como películas, series, etc. </p>
                                <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                        Login
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>