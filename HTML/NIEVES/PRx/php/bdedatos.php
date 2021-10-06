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
	$img = $_FILES['img']['name'];

	$dir = 'users_img/' . basename($img);
	
//consulta para insertar
	$insertar = "INSERT INTO usuario (usuario, nombre, contraseña, email, user_img) VALUES ('$usuario','$nombre','$contraseña','$email', '$img')";

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
		if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
		    echo "done";
		} else {
		    echo "No se pudo mover el archivo ";
		}
		header('location:../index.php');
	}
//Cerrar conexion
	mysqli_close($conexion);
?>