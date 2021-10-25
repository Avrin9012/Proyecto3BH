<?php
session_start();
    /* Connection */
	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	/* Vars */
	$emailogin = $_POST['emailogin'];
	$contraseñalogin = password_hash($_POST['clavelogin'], PASSWORD_DEFAULT);
	echo $contraseñalogin;

	/* Query */
 	$consulta="SELECT * FROM usuario WHERE email = '$emailogin'";

	/* Run query */
 	$resultado = mysqli_query($conexion, $consulta);
 	$busqueda = mysqli_num_rows($resultado);

	/* Save fetch to row */
 	$row = mysqli_fetch_array($resultado);
 	echo $_POST['clavelogin'];
 	if (password_verify($_POST['clavelogin'], $row['3'])) {
 		$_SESSION['email'] = $emailogin;
 		$_SESSION['my_img'] = $row[5];
 		$_SESSION['nombre'] = $row[2];
		$_SESSION['user'] = $row[1];
		$_SESSION['id'] = $row[0];
		/* Check if user have membership */
		if($row[6] == 1) {
		$_SESSION['membresia'] = $row[6];
		}
	    else {
	    }
		/* Check if user is admin */
		if($row[7] == 1) {
		$_SESSION['admin'] = $row[7];
		}
	    else {
	    }
		/* Go to index */
 		header('location:../index.php');
        echo 'Bienvenido, ' . htmlspecialchars($emailogin) . '!';
    } else {
        echo'<script> alert("Error de autenticación");
			 window.history.go(-1); </script>';
    }

 	mysqli_free_result($resultado);
 	mysql_close($conexion);
?>