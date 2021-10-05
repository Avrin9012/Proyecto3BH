<?php
session_start();

    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {
        echo '<script>
	    alert("No");
	    window.history.go(-1);
	    </script>';
	}else{
    }

	$name= $_POST['nameM'];
	$email= $_POST['emailM'];
	$phone= $_POST['phoneM'];
	$message= $_POST['messageM'];

$insertar = "INSERT INTO soporte (name, email, phone, message) VALUES ('$name','$email','$phone','$message')";

$resultado = mysqli_query($mysqli, $insertar);
if (!$resultado){
	echo 'No se pudo enviar el mensaje';
}
else{
	echo '<script>
	alert("Se pudo enviar el mensaje");
	window.history.go(-1);
	</script>';
	header('location:../index.php');
}

mysqli_free_result($resultado);
mysql_close($conexion);
?>