<?php
 	$conexion = mysqli_connect("localhost", "root", "", "proyecto");
 	if (!$conexion) {
 		echo 'no';
 	}
 	else{
 		echo 'si esta conectado';
 	}
//recibir los datos y almacenar variables
 	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];
	$contraseña = $_POST['contraseña'];
	$email = $_POST['email'];
	
//consulta para insertar
	$insertar = "INSERT INTO usuario (usuario, nombre, contraseña, email) VALUES ('$usuario','$nombre','$contraseña','$email')";

	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");
		if (mysqli_num_rows($verificar_usuario) > 0){
			echo '<script>
					alert("El usuario ya está registrado");
					window.history.go(-1);
					</script>';
				exit;
		}
//ejecuta consulta
	$resultado = mysqli_query($conexion, $insertar);
	if (!$resultado){
		echo 'Error al registrarse';
	}
	else{
		echo '<script>
					alert("El usuario ya está registrado");
					window.history.go(-1);
					</script>';
		header('location:../iniciarsesion.html');
	}
//Cerrar conexion
	mysqli_close($conexion);
?>