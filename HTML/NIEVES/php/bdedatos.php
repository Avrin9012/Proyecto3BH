<?php
 	$conexion = mysqli_connect("localhost", "root", "", "proyecto");
 	if (!$conexion) {
 		echo 'no';
 	}
 	else{
 		echo 'si esta conectado';
 	}
//recibir los datos y almacenar variables
 	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$mail = $_POST['mail'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	
//consulta para insertar
	$insertar = "INSERT INTO usuario(nombre, apellido, mail, usuario, contrasena) VALUES ('$nombre', '$apellido', '$mail', $usuario', '$contrasena')";

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
		header('location:../login.html');
	}
//Cerrar conexion
	mysqli_close($conexion);
?>