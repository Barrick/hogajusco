<?php
    session_start();
    //session_destroy();
     include("conexion2.php");
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <title>Validando...</title>
 </head>
 <body>

    <?php

        if(isset($_POST['ingreso'])){
            $usuario = $_POST['usuario'];
            $pw = $_POST['password'];
            $consulta = $conexion->query("SELECT usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$pw'");


            if($resultado =  mysqli_fetch_array($consulta)){

                $_SESSION["usuario"] = $usuario;
                //echo 'Iniciando sesion para ', $_SESSION['usuario'];
                //echo '<script> window.location = "../panel.php"; </script>';
                //echo '<script>location.href="../panel.php";</script>';
                header("Location: ../panel.php");

            }else{
                echo '<script type="text/javascript"> alert("Usuario o contraseña incorrecta.");</script>';
                //echo '<script> window.location = "../index.php";</script>';
                header("Location: ../index.php");
            }
        }

     ?>

 </body>
 </html>
