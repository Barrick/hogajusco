<?php
    session_start();
    //include ("../php/conexion2.php");
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Hog</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/fonts/fonts.css">
</head>
<body>


            <section id="registro-inner">
                <div class="titulo">
                    <span>Registro Hog Ajusco 2016</span>
                </div>
                <h2 class="subtitulo">Datos Personales</h2>
                <form action="./php/registroprueba.php" method="post">
                  <section class="centrar">
                    <div class="box">
                        <input type="text" class="input-inner" name="alias" placeholder="Alias" required autofocus>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="ncompleto" placeholder="Nombre Completo" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="hoginternacional" placeholder="HOG Internacional">
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto1" placeholder="Moto 1" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto2" placeholder="Moto 2" >
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto3" placeholder="Moto 3">
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto4" placeholder="Moto 4" >
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto5" placeholder="Moto 5" >
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="moto6" placeholder="Moto 6" >
                    </div>
                  </section>
                    <h2 class="subtitulo">Redes Sociales</h2>
                  <section class="centrar">
                    <div class="box">
                        <input type="text" class="input-inner" name="celular" placeholder="Celular" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="facebook" placeholder="Facebook" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="whatsapp" placeholder="Whastsapp" required>
                    </div>
                  </section>
                    <h2 class="subtitulo">Contacto</h2>
                  <section class="centrar">
                    <div class="box centrar2">
                        <input type="text" class="input-inner" name="telemergencia" placeholder="Telefono de Emergencia" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="contactoemergencia" placeholder="Contacto de Emergencia" required>
                    </div>
                    </section>
                    <h2 class="subtitulo">Seguro</h2>
                    <section class="centrar">
                    <div class="box centrar2">
                        <input type="text" class="input-inner" name="poliza" placeholder="Poliza de Seguro" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="telseguro" placeholder="Telefono de Seguro" required>
                    </div>
                  </section>
                    <h2 class="subtitulo">Datos Medicos</h2>
                    <section class="centrar">
                    <div class="box centrar2">
                        <input type="text" class="input-inner" name="tiposanguineo" placeholder="Tipo Sanguineo" required>
                    </div>
                    <div class="box">
                        <input type="text" class="input-inner" name="alergias" placeholder="Alergias" required>
                    </div>
                  </section>
                    <div class="btncentrar">
                      <input class="btn" type="submit" name="registrohog" value="Registrar">

                    </div>

                </form>
            </section>




</body>
</html>
