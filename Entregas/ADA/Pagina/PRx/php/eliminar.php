<?php
    $id_mensaje = $_GET['id_mensaje'];
    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $del = "DELETE FROM soporte WHERE id_mensaje like $id_mensaje";
    $col= mysqli_query($conexion, $del);
    if(!$col){
        echo "No se eliminó";

    }else{
        header("location: ../soporte.php");
    }


    ?>