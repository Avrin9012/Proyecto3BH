<?php

	$conexion = mysqli_connect("localhost", "root", "", "proyecto");


	$usuariologin= $_POST['usuariologin'];
	$contraseñalogin= $_POST['clavelogin'];

 	$consulta="SELECT * FROM usuario WHERE usuario = '$usuariologin' AND contraseña = '$contraseñalogin'";
 	$resultado = mysqli_query($conexion, $consulta);
 	$busqueda = mysqli_num_rows($resultado);
 	if($busqueda > 0) {
 		header('location:../index1.html');
 	}
 	else{
 		echo' 	<script>
					alert("Error de autenticación");
					window.history.go(-1);
			  	</script>';
 	}
 	mysqli_free_result($resultado);
 	mysql_close($conexion);
