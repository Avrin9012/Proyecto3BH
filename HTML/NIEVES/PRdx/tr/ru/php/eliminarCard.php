<?php
    $UserCardId = $_GET['IdUserCard'];
    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $del = "DELETE FROM sets WHERE IdUserCard = '$UserCardId'";
    $col= mysqli_query($conexion, $del);
    if(!$col){
        echo "No se eliminó";

    }else{
        header("location: ../create.php");
    }


    ?>