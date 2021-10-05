<?php
session_start();

	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	$emailogin= $_POST['emailogin'];
	$contraseñalogin= $_POST['clavelogin'];

 	$consulta="UPDATE usuario SET membresia = 1 WHERE email = '$emailogin' AND contraseña = '$contraseñalogin'";
 	$resultado = mysqli_query($conexion, $consulta);
 	header('location:../index.php');
 	mysqli_free_result($resultado);
 	mysql_close($conexion);
?>