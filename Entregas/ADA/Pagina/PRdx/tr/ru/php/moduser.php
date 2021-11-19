<?php
session_start();

    /* Connection */
	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	/* Vars */
 	$usuario = $_POST['moduser'];
	$nombre = $_POST['modname'];
	$email = $_POST['modmail'];
	$img = $_FILES['modIMG']['name'];

	$emailAuth = $_SESSION['email'];

	$dir = '../users_img/' . basename($img);

	/* Query for user */
 	$query="UPDATE usuario SET usuario = '$usuario', nombre = '$nombre', email = '$email' WHERE email = '$emailAuth'";

	/* Run query */
 	$resultado = mysqli_query($conexion, $query);

 	if (!$resultado){
		echo 'Error al modificar usuario';
	}
	else{
		/* If don't have a file */
			if ($dir == '../users_img/') {
				header('location:../user.php');
			}

			/* If have a file */
			else if ($dir != '../users_img/') {

				/* Query for img */
				$queryIMG="UPDATE usuario SET user_img = '$img' WHERE email = '$emailAuth'";

				/* Run img query */
				$resultadoIMG = mysqli_query($conexion, $queryIMG);

				if(move_uploaded_file($_FILES['modIMG']['tmp_name'], $dir)) {
					/* Delete old img */
					unlink('../users_img/' . $_SESSION['my_img']);
					$_SESSION['my_img'] = $img;
					header('location:../user.php');

				} else {
					echo "No se pudo mover el archivo ";
				}
			}
	}

/* Close connection */
	mysqli_close($conexion);
?>