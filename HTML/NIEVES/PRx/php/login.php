<?php
session_start();

	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	$emailogin= $_POST['emailogin'];
	$contraseñalogin= password_hash($_POST['clavelogin'], PASSWORD_DEFAULT);

 	$consulta="SELECT * FROM usuario WHERE email = '$emailogin'";

  /*  
 */
 	$resultado = mysqli_query($conexion, $consulta);
 	$busqueda = mysqli_num_rows($resultado);
 	$row = mysqli_fetch_array($resultado);
 	if ($row && password_verify($contraseñalogin, $row['usuario'])) {
        echo 'Bienvenido, ' . htmlspecialchars($nombre) . '!';
    } else {
        echo 'La autenticación ha fallado para ' . htmlspecialchars($nombre) . '.';
    }
 	if($busqueda > 0) {
 		$_SESSION['email'] = $emailogin;
 		$_SESSION['my_img'] = $row[5];
 		$_SESSION['nombre'] = $row[2];
		$_SESSION['user'] = $row[1];
		$_SESSION['id'] = $row[0];
		$_SESSION['bio'] = $row[8];
		if($row[6] == 1) {
		$_SESSION['membresia'] = $row[6];
		}
	    else {
	    }
		if($row[7] == 1) {
		$_SESSION['admin'] = $row[7];
		}
	    else {
	    }
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