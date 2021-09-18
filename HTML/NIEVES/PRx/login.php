<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
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
    <?php
if (isset($_SESSION['email'])) {
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
    echo 'no';
    }else{
    echo 'si esta conectado';
    }
    $form = "<form class='form-inline my-2 my-lg-0' method='POST' action='query.php'>
    <input class='form-control mr-sm-2' type='text' placeholder='Search' aria-label='Search' name='fucks'>
    <button class='btn btn-secondary my-2 my-sm-0' type='submit' name='submit'>Search</button>
    </form>";
	echo '<ul class="navbar-nav mr-auto"> <li class="nav-item active">
	<a class="nav-link bold" href="create.php"><span>Create</span></a>
	</li>
	</ul>';
	echo $form;      
	echo "<li class='nav-item dropdown'><div>
	<a class='nav-link dropdown-toggle' href='#' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".	          
	$_SESSION['my_img'] . $_SESSION['email']."</a>
	<div class='dropdown-menu' aria-labelledby='dropdown01'>
	<a class='dropdown-item' href='user.php?user_ref=$_SESSION[id]'>My Sets</a>
	<a class='dropdown-item' href='settings.php?my_settings=$_SESSION[id]		 
	'>Settings</a>
	<a class='dropdown-item' href='logout.php'>Logout</a>
	</div>
	</li>
    ";       
}else if (!isset($_SESSION['user'])) {
	echo ' <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
	<li class="nav-item active">
	<a class="nav-link bold" href="login.php">Signin <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item active">
	<a class="nav-link bold" href="register.php"><span class="text-">Register</span></a>
	</li>
	<li class="nav-item active">
	<a class="nav-link bold" href="create.php"><span>Create</span></a>
	</li>
	</div>
	';
    echo $form;
		        }
        ?>
    </nav>
</div>
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
            <form action="/PRx/php/login.php" method="post" class="carga">
                <h1 class="login">Login</h1>
                <div class="contenedor">
                    <div class="input-contenedor">
                        <i class="fas fa-envelope icon"></i>
                        <input name="emailogin" type="email" placeholder="Email" required="" class="form-control">
                    </div>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input name="clavelogin" type="password" placeholder="Password" required="" class="form-control">
                </div>
                <div>
                    <input type="submit" value="Login" class="btn btn-primary">
                    <p class="IS">When you register, you agree with our terms and conditions.</p>
                </div>
            </form>
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>