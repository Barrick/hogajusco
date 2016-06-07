<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Rodada</title>
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="../css/fonts/fonts.css">
</head>
<body>

      <section id="registro-inner">
          <section class="izquierda">
          <h2 class="subtitulo">Edicion de Rodadas</h2>

          <form action="#" method="post">
              <div class="box block">
              <!--php para consultar-->
                    <div class="labeledit">
                        <label for="editrodada">Elija el No de Rodada</label>
                    </div>
                  <div class="seditrodada">
                      <select name="editrodada" id="editrodada">
                          <option value="1">rodada1</option>
                      </select>
                  </div>
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
                  <input class="btn" type="submit" name="editarrodada" value="Editar">
              </div>

          </form>
        </section>
      </section>
</body>
</html>
