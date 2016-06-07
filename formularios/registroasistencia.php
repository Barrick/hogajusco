<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Asistencia</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/fonts/fonts.css">
</head>
<body>

        <section id="registro-inner">
            <section>
                <h2 class="subtitulo">Registro de Asistencia</h2>
                <form action="" method="post">

                    <div class="box">
                        <label for="nombrehog">Elija Nombre</label>
                        <select name="nombrehog" id="nombrehog">
                             <option value="1">valor 1</option>
                        </select>
                    </div>
                    <div class="box">

                        <label for="">Elija Rodada</label>
                        <!--aqui se reemplaza por php para la consulta a la bd-->
                        <select name="nrodada" id="nrodada">
                            <option value="1">rodada1</option>
                        </select>
                    </div>
                    <div class="box block">
                        <input class="btn alinear" type="submit" name="registroasistencia" value="Registrar">
                    </div>
                </form>
            </section>
        </section>

</body>
</html>
