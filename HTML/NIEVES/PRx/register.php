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
    <title>Registrarse</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesfitbg.css" rel="stylesheet" />
</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.php"><img id="header1" src="assets/img/logoingles.png" ></a>
            <div class="container">
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Registrarse</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/header.png" alt="..." />
                <form class="registrarse" , action="/PRx/php/bdedatos.php" method="post">
                    <!-- Form-->
                    <div class="contenedor">
                        <h1 class="login">Registro</h1>
                            <div>
                                <i class="fal fa-dove" style="color: #28c997;"></i>
                                <p><input class="form-control" name="usuario" type="text" required placeholder="usuario"> </p>
                                <p><input class="form-control" name="nombre" type="text" required placeholder="nombre"> </p>
                                <p><input class="form-control" name='contraseña' type="password" required placeholder="contraseña" /> </p>
                                <p><input class="form-control" name="email" type="email" required placeholder="mail"> </p>
                                <div class="form-group">
                                <input type="hidden" name = "hidden" class="form-control" id="exampleInputPassword1" size=100000>
                                <input type="file" class="form-control" id="exampleInputPassword1" name="img">
                                </div>
                                <a href="login.html"> <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" /></a>
                                <input class="btn btn-primary" type="reset" name="restablecer" value="restablecer" /></p>
                            </div>
            <p class="IS">Al registrarte, aceptas nuestras <a href="politicas.php"> Condiciones de uso y Política de privacidad.</a></p>
        </div>
    </form>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>