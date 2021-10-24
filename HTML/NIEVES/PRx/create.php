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
    <title>Crear flashcards</title>
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
            <!-- Masthead Avatar Image-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            
<!-- Button to flashcards-->
<center><form action="watchcards.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Ir a flashcards"/>
</form><center>
<!-- Button to flashcards-->
<center>
<form action="delcards.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Eliminar flashcards"/>
</form><center>

<!-- Create card form-->
<div class="conatiner">
	 	<form enctype="multipart/form-data" action="" method="POST">
		  <span class="form-group" style="white-space:nowrap" >
		    <label for="exampleInputEmail1" >Title</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" name="title">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </span>

		  <div class="form-group">
		    <label for="exampleInputEmail1" >Term</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Term" name="term">
		    <small id="emailHelp" class="form-text text-muted"></small>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Defination</label>
		    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Defination" name="defination">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">IMG</label>
		    <input type="hidden" name = "hidden" class="form-control" id="exampleInputPassword1" size=100000>
		    <input type="file" class="form-control" id="exampleInputPassword1" name="img">
		  </div>
		  <input type="submit" class="btn btn-primary" name="submit">
		  <br>
		</form>
	</div>
</body>

<?php 
if (isset($_POST['submit'])) {
    /* Connection */
    $mysqli = new mysqli("localhost", "root", "", "proyecto");
       if ($mysqli->connect_errno) {
           echo 'FALLO LA CONEXION';
       }
       else{
       }
    $CardOwner = $_SESSION['user'];

    /* Query for fetch how many cards have the user */
    $card = $mysqli->query("SELECT COUNT(*) as num FROM sets WHERE user = '$CardOwner'");
    
    if (!$card) {
        echo "Fallo el fetch: : (" . $mysqli->errno . ") " . $mysqli->error;
    }else{

    /* Row fetch */
    $intCard = mysqli_fetch_array($card);

    /* Save the array to int */
    $idcard = $intCard['num'];

    /* Vars */
    $title = $_POST['title'];
    $term = $_POST['term'];
    $definationC = $_POST['defination'];
    $img = $_FILES['img']['name'];
    $owner = $_SESSION['user'];
    $IdUserCard = $idcard + 1;

    /* Sets dir */
    $dir = 'sets_img/' . basename($img);

    /* Query for insert to database */
    if (!$mysqli->query("INSERT INTO sets(title,term,defination,img,user,IdUserCard) VALUES ('$title','$term','$definationC','$img','$owner','$IdUserCard')")) {
      echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
    }else {
      /* Move file */
      if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
      } else {
          echo "No se pudo mover el archivo o simplemente no seleccionaste un archivo ";
      }}
    }
}
?>

<!-- If you have the memebership, you can go to flashcards-->
<?php if (isset($_SESSION['membresia'])) { ?>
<form action="course/fb.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Ir a flashcards basicas"/>
</form><center>

<center><form action="course/fm.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Ir a flashcards medias"/>
</form><center>

<form action="course/fa.php">
    <input class="btn btn-primary btn-xl" type="submit" value="Ir a flashcards avanzadas"/>
</form><center>

<?php } ?>

</body>
</html>