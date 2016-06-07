<?php
    session_start();
    //session_destroy();
    include 'php/conexion2.php';
    if(isset($_SESSION['usuario'])){
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="css/panel.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/fonts/fonts.css">
</head>
<body>
    <header class = "header-main">
        <div class="head">
            <div id="logo"></div>
            <?php
            echo '<ul class="usuario">';
                echo '<li id="saludo"> Bienvenido '.$_SESSION['usuario']. '</li>';
                echo '<li id ="logout"><a href="php/logout.php">Cerrar Sesión</a></li>';
            echo '</ul>';
            ?>

        </div>


    </header>

    <section class="contenedor">

        <!-- menu izquierdo-->

        <section class="contenido">
            <section class="contenedor-menu">
                <h2>Administración</h2>

                    <h3>Registros</h3>

                <ul class="menu">
                    <li><a id="registrohog" href="#"><i class="fa fa-motorcycle fa-lg"></i>Registro HOG</a></li>

                    <li><a id="registrorodada" href="#"><i class="fa fa-map-marker fa-lg"></i>Regisrar Rodada</a></li>

                    <li><a id="asistencia" href="#"><i class="fa fa-users fa-lgh"></i>Registro de Asistencia</a></li>
                </ul>

                    <h3>Edición y Consulta</h3>

                <ul class="menu">
                    <li><a id="editarhog"href="#"><i class="fa fa-pencil-square-o fa-lg"></i>Editar HOG</a></li>

                    <li><a id ="editarrodada" href="#"><i class="fa fa-pencil-square-o fa-lg"></i>Editar Rodada</a></li>

                    <li><a id="consulta" href="#"><i class="fa fa-eye fa-lg"></i>Consultar Asistencia</a></li>
                </ul>

            </section>

            <section id="contenido-forms" class="contenido-forms">
                <div id="vista-resultado" class="vista-resultado">

                        <!-- vista del lado derecho -->

                </div>
            </section>
            <div class="clear"></div>
        </section>



    </section>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/call-forms.js"></script>
</body>
</html>



<?php
    }else{
        //echo '<script>location.href = "index.php";</script>';
        header("location: ../index.php");
    }


?>
