<?php
session_start();
    /* Connection */
	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	/* Vars */
	$emailogin = $_POST['emailogin'];
	$contraseñalogin = password_hash($_POST['clavelogin'], PASSWORD_DEFAULT);

	/* Query */
 	$consulta="UPDATE usuario SET Membresia = 1 WHERE email = '$emailogin'";
 	echo $_POST['clavelogin'];
 	echo $$contraseñalogin;
 	$resultado = mysqli_query($conexion, $consulta);
	/* Go to index */
	mysqli_close($conexion);
	header('location:../admin/addmem.php');

?>