<?php
    session_start();
    //session_destroy();
    include('php/conexion2.php');
    if(isset($_SESSION['usuario'])){
        header('location: panel.php');
        //echo '<script> window.location = "panel.php";</script>';
    }
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/home-main.css">
        <link rel="stylesheet" href="/css/fonts/fonts.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <header class ="header-main">
            <div class="head">
                <div class="header-logo"></div>


                    <span ><a href="#openmodal" class="open">Login</a></span>

            </div>

        </header>

        <div id="openmodal" class="formulario">
            <a href="#close" class="close"> X </a>


            <div class="form-logo"></div>
            <form action="php/login.php" method="post">

                <input type="text" name="usuario" id="" placeholder="Usuario" class="usuario">
                <input type="password" name="password" id="" placeholder="Contraseña" class="pass">

                <button type="submit" name="ingreso">Ingresar</button>
            </form>


        </div>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>
