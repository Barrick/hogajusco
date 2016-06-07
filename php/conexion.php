<?php


    $con = mysqli_connect('localhost', 'root', '');   die ("Error en la conexion").mysqli_error();
    $db = mysqli_select_db($con,"hog2016db");  die ("No se pudo conectar a la base de datos").mysqli_error();


?>
