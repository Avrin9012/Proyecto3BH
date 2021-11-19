<?php
session_start();

$Answer = $_POST['Answer'];

$Trasliteracion = ["a", "i", "u", "e", "o", "ka", "ki", "ku", "ke", "ko", "sa", "shi", "su", "se", "so", "ta", "chi", "tsu", "te", "to", "na", "ni", "nu", "ne", "no", "ha", "hi", "fu", "he", "ho", "ma", "mi", "mu", "me", "mo", "ya", "yu", "yo", "ra", "ri", "ru", "re", "ro", "wa", "wo", "n"];

if ($Trasliteracion[$_SESSION['HiraIMG']]!=$Answer){
	header("location:../wrong.php");

}if ($Trasliteracion[$_SESSION['HiraIMG']]==$Answer){
	header("location:../correct.php");

}