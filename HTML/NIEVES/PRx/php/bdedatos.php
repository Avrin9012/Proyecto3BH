<?php
    /* Connection */
 	$conexion = mysqli_connect("localhost", "root", "", "proyecto");
 	if (!$conexion) {
 		echo 'no';
 	}
 	else{
 		echo 'si esta conectado';
 	}

/* Vars */
 	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombre'];

	$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
	$email = $_POST['email'];
	$img = $_FILES['img']['name'];

	$dir = '../users_img/' . basename($img);
	
/* Insert query */
	$insertar = "INSERT INTO usuario (usuario, nombre, contraseña, email, user_img) VALUES ('$usuario','$nombre','$contraseña','$email', '$img')";

	/* Check if user exist or not */
	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$usuario'");
		if (mysqli_num_rows($verificar_usuario) > 0){
			echo '<script>
					alert("El usuario ya está registrado");
					window.history.go(-1);
					</script>';
				exit;
		}

/* Query */
	$resultado = mysqli_query($conexion, $insertar);
	if (!$resultado){
		echo 'Error al registrarse';
	}
	else{
		/* Move file */
		if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
		    echo "done";
		} else {
		    echo "No se pudo mover el archivo ";
		}
		header('location:../index.php');
	}
/* Close connection */
	mysqli_close($conexion);
?>