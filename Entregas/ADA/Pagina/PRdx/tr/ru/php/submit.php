<?php

    $mysqli = new mysqli("localhost", "root", "", "proyecto");
    if ($mysqli->connect_errno) {

	}else{
    }

	$nameMe= $_POST['nameM'];
	$emailMe= $_POST['emailM'];
	$phoneMe= $_POST['phoneM'];
	$messageMe= $_POST['messageM'];

$insertar = "INSERT INTO soporte(name, email, phone, message) VALUES ('$nameMe','$emailMe','$phoneMe','$messageMe')";

$resultado = mysqli_query($mysqli, $insertar);
if (!$resultado){
	echo 'No se pudo enviar el mensaje';
}
else{
	echo '<script>
	alert("Se pudo enviar el mensaje");
	window.history.go(-1);
	</script>';
}

mysqli_free_result($resultado);
mysql_close($mysqli);
?>