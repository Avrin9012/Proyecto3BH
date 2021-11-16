<?php
session_start();

    /* Connection */
	$conexion = mysqli_connect("localhost", "root", "", "proyecto");

	/* Vars */
	$passold = password_hash($_POST['Passold'], PASSWORD_DEFAULT);
	$passnew = password_hash($_POST['Passnew'], PASSWORD_DEFAULT);
	$emailAuth = $_SESSION['email'];

	/* Query for user */
 	$query="SELECT * FROM usuario WHERE email = '$emailAuth'";

	/* Run query */
 	$resultado = mysqli_query($conexion, $query);
 	$FetchPass = mysqli_fetch_array($resultado);

 	/* Password from database */
 	$UserPass = $FetchPass['3'];

	/* passold auth */
 	if($passold = $UserPass) {
 		$Insert="UPDATE usuario SET contraseña = '$passnew' WHERE email = '$emailAuth'";
 	    $result = mysqli_query($conexion, $Insert);
 	    header('location:../user.php');
 	}
 	else{
		/* Error message */
 		echo' 	<script>
					alert("Error al cambiar la contraseña");
					window.history.go(-1);
			  	</script>';
 	}
 	mysql_close($conexion);
?>