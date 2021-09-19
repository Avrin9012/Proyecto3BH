<?php
session_start();

	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	$emailogin= $_POST['emailogin'];
	$contraseñalogin= $_POST['clavelogin'];

 	$consulta="SELECT * FROM usuario WHERE email = '$emailogin' AND contraseña = '$contraseñalogin'";
 	$resultado = mysqli_query($conexion, $consulta);
 	$busqueda = mysqli_num_rows($resultado);
 	$row = mysqli_fetch_array($resultado);
 	if($busqueda > 0) {
 		$_SESSION['email'] = $emailogin;
 		$_SESSION['my_img'] = $row[5];
		$_SESSION['id'] = $row[0];
		$_SESSION['user'] = $row[1];
		$_SESSION['id'] = $row[0];
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