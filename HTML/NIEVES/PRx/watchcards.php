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
    <title>Usuarios</title>
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
</body>
<?php
if (isset($_SESSION['email'])) {

    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo 'no';
    }
    else{

    }

    $CardOwner = $_SESSION['user'];
    $resultado = $mysqli->query("SELECT title, term, defination, img FROM sets WHERE user = '$CardOwner'");
    if (!$resultado) {
        echo "Fallo el fetch: : (" . $mysqli->errno . ") " . $mysqli->error;
    }}else{
        
        $row = mysqli_fetch_array($mysqli);

        echo"<div class='container'>
                    <a><h5>" . $row["0"] ."</h5></a>
                    <div class='flip-card'>
                        <div class='flip-card-inner'>

                        <div class='flip-card-front'>
                      
                        <p>". $row["1"] ."</p>

                    </div>
                <div class='flip-card-back'>
                <h1>". $row["2"] ." </h1> 
                <img class='img_sets' src='sets_img/". $row["3"] ."' /> 
                       </div>
                       </div>
                   </div>
";
}
?>

</div>
<button onClick='window.location.reload()' class="'btn btn-primary RefreshButton'">Refresh</button>
</div>


<?php

/*
        $row = mysqli_fetch_array($resultado);
        
        $Lenght = var_dump(count($row));
        for ($i = 0; $i < 10; $i++) {
            echo "
               <div class='container'>
                    <a><h5>" . $row[$i] ."</h5></a>
                    <div class='flip-card'>
                        <div class='flip-card-inner'>

                        <div class='flip-card-front'>
                      
                        <p>". $row["1"] ."</p>

                    </div>
                <div class='flip-card-back'>
                <h1>". $row["2"] ." </h1> 
                <img class='img_sets' src='sets_img/". $row["3"] ."' /> 
                       </div>
                       </div>
                   </div>
                </div>";
        
    }
  } 


        echo"<div class='container'>
                    <a><h5>" . $row[$i] ."</h5></a>
                    <div class='flip-card'>
                        <div class='flip-card-inner'>

                        <div class='flip-card-front'>
                      
                        <p>". $row["1"] ."</p>

                    </div>
                <div class='flip-card-back'>
                <h1>". $row["2"] ." </h1> 
                <img class='img_sets' src='sets_img/". $row["3"] ."' /> 
                       </div>
                       </div>
                   </div>
                </div>
<button onClick=". echo "window.location.reload()". echo " class="'btn btn-primary RefreshButton'">Refresh</button>
</div>";



*/
?>

</body>
</html>