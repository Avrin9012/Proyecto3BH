<?php
 	$conexion = mysqli_connect("localhost", "root", "", "basededatos");
 	if (!$conexion) {
 		echo 'no';
 	}
 	else{
 		echo 'si esta conectado';
 	}
//recibir los datos y almacenar variables
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$contraseña = $_POST['clave'];

//consulta para insertar
	$insertar = "INSERT INTO usuario(nombre, apellido, usuario, email, contraseña) VALUES ('$nombre', '$apellido','$usuario','$email','$contraseña')";

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