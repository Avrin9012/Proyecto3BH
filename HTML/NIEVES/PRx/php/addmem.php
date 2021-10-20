<?php
session_start();
    /* Connection */
	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	/* Vars */
	$emailogin= $_POST['emailogin'];
	$contraseñalogin= $_POST['clavelogin'];

	/* Query */
 	$consulta="UPDATE usuario SET membresia = 1 WHERE email = '$emailogin' AND contraseña = '$contraseñalogin'";
 	$resultado = mysqli_query($conexion, $consulta);
	/* Go to index */
 	header('location:../index.php');
 	mysqli_free_result($resultado);
 	mysql_close($conexion);
?>