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
    <title>Cursos de ingles</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.php">Aprende Ingles</a>
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
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
<?php if (isset($_SESSION['email'])): ?>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo 'no';
    }
    else{
        echo 'si esta conectado';
    }

    $num = rand(1,100);
$resultado = $mysqli->query("SELECT palabra, traduccion FROM palabra where idpalabra = '$num' " );
    if (!$resultado) {
        echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}

$row = mysqli_fetch_array($resultado);
?>
    <div class="maincontainer">
    <div class="thecard">
    <div class="thefront"><h1> <?php echo $row["0"]?></h1><p>Definition</p></div>
    <div class="theback"><h1> <?php echo $row["1"]?></h1><p>Definition</p>
    <div class="button">
    <button class="again">Again</button>
    <button class="good">Good</button>
    <button class="easy">Easy</button>
    </div>
    <script src="../js/app.js"></script>
    </div>
	  	       <a href='singel.php?x=$sel_fetch[id]'><h5>$sel_fetch[title]</h5></a>
                 
          <div class='conatiner'>
		  	   <div class='flip-card'>
				  <div class='flip-card-inner'>
				    <div class='flip-card-front'>
				      <p><?php echo $row["0"]?></p>
				    </div>
				    <div class='flip-card-back'>
				      <h1><?php echo $row["1"]?></h1> 
				      <img class='img_sets' src='sets_img/".$sel_fetch['img']."' /> 
				    </div>
				  </div>
				</div>
		</div>

<?php else: ?>
    <h1>Prohibido<h2>
    <p>Deberias estar logeado</p>
<?php endif; ?>

</html>
            