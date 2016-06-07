<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Rodadas</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/fonts/fonts.css">
</head>
<body>

      <section id="registro-inner">
        <section class="izquierda">
          <h2 class="subtitulo">Registro de Rodadas 2016</h2>
          <form action="#" method="post" class="completo">
              <div class="box block">
                  <input class="input-inner" type="number" name="numrodada" placeholder="No De Rodada" required>
              </div>
              <div class="box block">
                  <input class="input-inner" type="text" name="destino" placeholder="Destino" required>
              </div>
              <div class="box block">
                  <input class="input-inner" type="date" name="fecharodada" placeholder="Fecha" required>
              </div>
              <div class="box block">
                  <input class="input-inner" type="number" name="kilometros" placeholder="Kilometros" required>
              </div>
              <div class="box block">
                  <input class="btn" type="submit" name="registrarrodada" value="Registrar">
              </div>

          </form>
        </section>

      </section>


</body>
</html>
