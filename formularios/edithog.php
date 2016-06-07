<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Hog</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/fonts/fonts.css">
</head>
<body>

        <section id="regustro-inner">
            <div class="titulo">
                <span>Editar Miembros Hog</span>
            </div>
                <h2 class="subtitulo">Datos Personales</h2>
                <form action="" method="post">

                    <section class="centrar">
                        <div class="box">
                            <input class="input-inner" type="text" name="alias" placeholder="Alias" required>
                        </div>
                        <div class="box">
                            <!--se reemplaza por php la consulta-->
                            <div class="labeledit">
                                <label for="editnombrehog">Selecciona Nombre</label>
                            </div>
                            <div class="seditname">
                                <select name="editnombrehog" id="editnombrehog">
                                    <option value="1">nombre 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="hoginternacional" placeholder="HOG Internacional">
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto1" placeholder="Moto 1" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto2" placeholder="Moto 2" >
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto3" placeholder="Moto 3">
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto4" placeholder="Moto 4" >
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto5" placeholder="Moto 5" >
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="moto6" placeholder="Moto 6" >
                        </div>
                    </section>

                    <h2 class="subtitulo">Redes Sociales</h2>

                    <section class="centrar">
                        <div class="box">
                            <input class="input-inner" type="text" name="celular" placeholder="Celular" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="facebook" placeholder="Facebook" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="whatsapp" placeholder="Whastsapp" required>
                        </div>
                    </section>

                    <h2 class="subtitulo">Contacto</h2>

                    <section class="centrar">
                        <div class="box centrar2">
                            <input class="input-inner" type="text" name="telemergencia" placeholder="Telefono de Emergencia" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="contactoemergencia" placeholder="Contacto de Emergencia" required>
                        </div>
                    </section>

                    <h2 class="subtitulo">Seguro</h2>

                    <section class="centrar">
                        <div class="box centrar2">
                            <input class="input-inner" type="text" name="poliza" placeholder="Poliza de Seguro" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="telseguro" placeholder="Telefono del SeguroCelular" required>
                        </div>
                    </section>

                    <h2 class="subtitulo">Datos Medicos</h2>

                    <section class="centrar">
                        <div class="box centrar2">
                            <input class="input-inner" type="text" name="tiposanguineo" placeholder="Tipo Sanguineo" required>
                        </div>
                        <div class="box">
                            <input class="input-inner" type="text" name="alergias" placeholder="Alergias" required>
                        </div>
                    </section>

                    <div class="btncentrar">
                        <input  class="btn" type="submit" name="editarhog" value="Editar">
                    </div>

                </form>

        </section>

</body>
</html>
