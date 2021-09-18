<?php
session_start();

	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	$emailogin= $_POST['emailogin'];
	$contraseñalogin= $_POST['clavelogin'];

 	$consulta="SELECT * FROM usuario WHERE email = '$emailogin' AND contraseña = '$contraseñalogin'";
 	$resultado = mysqli_query($conexion, $consulta);
 	$busqueda = mysqli_num_rows($resultado);
 	if($busqueda > 0) {
 		$_SESSION['email'] = '$emailogin';
 		header('location:../index.php');

 	}
 	else{
 		echo' 	<script>
					alert("Error de autenticación");
					window.history.go(-1);
			  	</script>';
 	}
 	mysqli_free_result($resultado);
 	mysql_close($conexion);
?>