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
    <a class="navbar-brand" href="#page-top"><img id="header1" src="assets/img/logoingles.png" ></a>
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
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>


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

</html>

<?php 
  if(isset($_SESSION['email'])) {
  	
  	if (isset($_POST['submit'])) {

  		
  		$mysqli = new mysqli("localhost", "root", "", "proyecto");
 	    if ($mysqli->connect_errno) {
 		    echo 'no';
 	    }
 	    else{
 		    echo 'si esta conectado';
 	    }

 	    $title = $_POST['title'];
	    $term = $_POST['term'];
	    $defination = $_POST['defination'];
	    $img = $_FILES['img']['name'];

	   	$dir = 'sets_img/' . basename($img);
	    
	   
    if (!$mysqli->query("INSERT INTO sets(title,term,defination,img) VALUES ('$title','$term','$defination','$img')")) {
        echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
    }else {
        if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
		    echo "done";
		} else {
		    echo "No se pudo mover el archivo ";
		}}
       
} else {
    echo "Prohibido tienes que estar logeado";
 }
}
?>






		

