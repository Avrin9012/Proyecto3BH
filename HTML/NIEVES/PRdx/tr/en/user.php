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
    <title>Edit profile</title>
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
        <div class="container">
            <a class="navbar-brand" href="index.php"><img id="header1" src="assets/img/logoingles.png" ></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            </div>
        </div>
<?php
if (isset($_SESSION['email'])) {
    /* Connection */
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
    echo 'no';
    }else{
    }
    /* Dir for user img */
    $dir = 'users_img/'.$_SESSION['my_img'];
    echo '<ul class="navbar-nav mr-auto"> <li class="nav-item active">
    </li>
    </ul>';
    /* NAV HTML if user is logged */     
    echo "<ul class='navbar-nav ms-auto'>
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='create.php'>Flashcards</a></li>
    <li class='RegisterButton nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='close.php'>Cerrar sesion</a></li>
    <li class='nav-item mx-0 mx-lg-1'><a class='nav-link py-3 px-0 px-lg-3 rounded' href='index.php'>Inicio</a></li>
    </ul>
    <div id='userlogin'><li class='nav-item dropdown'><div>
    <a class='nav-link txtlogin' href='user.php' aria-haspopup='true' aria-expanded='false'>".             
    '<img id="imgfreelogin" src="'.$dir.'">' . $_SESSION['email']."</a>
    <div class='dropdown-menu' aria-labelledby='dropdown01'>
    <a class='dropdown-item' href='user.php?user_ref=$_SESSION[id]'>Mis flashcards</a>
    <a class='dropdown-item' href='opciones.php?my_settings=$_SESSION[id]        
    '>opciones</a>
    <a class='dropdown-item' href='close.php'>Cerrar sesion</a>
    </div> </li> </div>";
}else if (!isset($_SESSION['email'])) {
    /* NAV HTML if user is not logged */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Login</a></li>
    <li class="RegisterButton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="register.php">Registrarse</a></li>
    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
    </ul>
    ';
        }
    ?>
<?php if (isset($_SESSION['admin'])) {
    /* NAV HTML if user is admin */
    echo '
    <ul class="navbar-nav ms-auto">
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="soporte.php">Mensajes Soporte</a></li>
    <li class="Loginbutton nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="admin/addmem.php">Añadir membresia</a></li>
    </ul>
    ';
}
    ?>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">

        <!-- moduser form-->
        <div class="contenedor">
        <h1 class="login">Editar perfil</h1>
        <form enctype="multipart/form-data" class="registrarse" action="php/moduser.php" method="post">
        <center> <div>
                <i class="fal fa-dove" style="color: #28c997;"></i>
                <!-- User-->
                <p><input class="form-control" name="moduser" type="text" required value=<?php echo $_SESSION['user'] ?> > </p>
                <!-- Nombre-->
                <p><input class="form-control" name="modname" type="text" required value=<?php echo $_SESSION['nombre'] ?> >  </p>
                <!-- Email-->
                <p><input class="form-control" name="modmail" type="email" required value=<?php echo $_SESSION['email'] ?> >  </p>
                <!-- Form control password-->
                <div class="form-group">
                <input type="hidden" name = "hidden" class="form-control" id="exampleInputPassword1" size=100000>
                <!-- Image-->
                <?php $dir = 'users_img/'.$_SESSION['my_img']; ?>
                <a class='nav-link txtlogin' href='user.php' aria-haspopup='true' aria-expanded='false'>             
                <?php echo '<img id="imgmod" src="'.$dir.'"></a>'?>
                <!-- Form control file-->
                <input type="hidden" name = "hidden" class="form-control" id="exampleInputPassword1" size=100000>
                <input type="file" class="form-control" id="exampleInputPassword1" name="modIMG">
                <br>
                </div>
                <!-- Submit and reset-->
                <a href="php/moduser.php"> <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" /></a>
                <input class="btn btn-primary" type="reset" name="restablecer" value="restablecer" /></p>
            </div> </center>
        </form>

        <!-- Form password -->
        <br>
        </div>
        <h1 class="login">Cambiar contraseña</h1>
        <form class="registrarse" action="php/ModPassUser.php" method="post">
        <center> <div>
                <i class="fal fa-dove" style="color: #28c997;"></i>
                <p>Ingrese su contraseña vieja</p>
                <!-- Password old -->
                <p><input class="form-control" name="Passold" type="password" required placeholder=""></p>
                <p>Ingrese su contraseña nueva</p>
                <!-- Passworld new -->
                <p><input class="form-control" name="Passnew" type="password" required placeholder=""></p>    
                <!-- Submit -->            
                <a href="php/ModPassUser.php"> <input class="btn btn-primary" type="submit" name="enviar" value="Enviar" /></a>
            </div> </center>
        </div>
    </form>

<br>

<!-- Button to PREdeluser -->
<form action="php/PREdeluser.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Eliminar usuario"/>
</form><center>

</body>
</html>