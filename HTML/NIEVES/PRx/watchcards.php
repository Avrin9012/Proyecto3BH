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
    <title>Usuario flashcards</title>
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

<body id="index.php">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img id="header1" src="assets/img/logoingles.png" ></a>
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
            <!-- Masthead Avatar Image-->
</body>
<?php
if (isset($_SESSION['email'])) {
    /* Connection */
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo 'FALLO LA CONEXION';
    }
    else{

    }

    /* Owner for query */
    $CardOwner = $_SESSION['user'];
    /* Query id card */
    $idcard = $mysqli->query("SELECT MAX(IdUserCard) as num FROM sets WHERE user = '$CardOwner'");
    /* Save the query in a row */
    $RowCard = mysqli_fetch_array($idcard);
    /* Convert the row to int */
    $Intcard = (int)$RowCard['num'];

    /* Idcard error */
    if (!$idcard) {
        echo "Fallo el fetch de las cards: : (" . $mysqli->errno . ") " . $mysqli->error;

    }else if ($Intcard == 0){
    /* If don't have any card, display a message  */
    echo "<center>
    <h1>No hay ninguna carta<h2>
    <p>Crea una carta en la pagina anterior</p>
    </center>";
    }
    else{
        /* Random number  */
        $num = rand(1,$Intcard);

        /* Query for card */
        $resultado = $mysqli->query("SELECT title, term, defination, img FROM sets WHERE user = '$CardOwner' and IdUserCard = '$num' ");
        if (!$resultado) {
            echo "Fallo el fetch: : (" . $mysqli->errno . ") " . $mysqli->error;
        }else{
            /* Vars for the card */
            $row = mysqli_fetch_array($resultado);

            /* Dir for displey img or not */
            $dir = 'sets_img/' . basename($row["3"]);
            echo $dir;

            /* Display the card */
            echo"<center><div class='container'>
                    <a><h5>" . $row["0"] ."</h5></a>
                    <div class='flip-card'>
                        <div class='flip-card-inner'>

                        <div class='flip-card-front'>
                      
                        <p>". $row["1"] ."</p>

                    </div>
                <div class='flip-card-back'>
                <h1>". $row["2"] ." </h1> ";

                /* If card don't have img, close the div */
                if ($dir = 'sets_img/') {
                echo " 
                       </div>
                       </div>";
                }

                /* If card have img, show the img */
                else if (!$dir = 'sets_img/') {
                    echo "
                    <img class='img_sets' src='sets_img/". $row["3"] ."' /> 
                           </div>
                           </div>
                       </div></center>";
                    }

    }
  }
}
?>
<!-- Refresh button -->
<div>
<button onClick="window.location.reload()" class="btn btn-primary RefreshButton">Refresh</button>
</div>

<!-- End -->
</body>
</html>