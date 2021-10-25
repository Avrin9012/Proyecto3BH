<?php   
session_start();

/* Connection */
$conexion = mysqli_connect("localhost", "root", "", "proyecto");

/* Vars */
$emailAuth = $_SESSION['email'];
$userAuth = $_SESSION['user'];
$nameAuth = $_SESSION['nombre'];

/* Query */
$del = "DELETE FROM usuario WHERE email = '$emailAuth' AND usuario = '$userAuth' AND nombre = '$nameAuth'";
$col= mysqli_query($conexion, $del);

/* If it's correct */
if(!$col){
    echo "No se eliminó";
}else{
    /* If it's not */
    unlink('../users_img/' . $_SESSION['my_img']);
    session_unset();
    session_destroy();
    header("location: ../index.php");
}