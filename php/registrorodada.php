<?php
    include("conexion2.php");

    if(isset($_POST['registrarrodada'])){
        $num_rodada = $_POST['numrodada'];
        $destino = $_POST['destino'];
        $fecharodada = $_POST['fecharodada'];
        $kilometros = $_POST['kilometros'];

        if($num_rodada != "" && $destino != "" && $fecharodada != ""){

            $sql = "INSERT INTO rodadas(num_rodada, destino, fecha, kilometros) VALUES ('$num_rodada', '$destino', '$fecharodada', '$kilometros')";

            $insertar = $conexion->query($sql);

            if($insertar){
                echo '<script type="text/javascript">alert("Se ha registrado correctamente");</script>';
                //header("Location: ../panel.php");
                echo '<script>location.href="../panel.php";</script>';
            }else {
                echo '<script type="text/javascript">alert("Lo sentimos no se pudo registrar el usuario");</script>';
                    echo '<script>location.href="../panel.php";</script>';
                    //printf("error %s ", $conexion->error);
            }
        }
    }

$conexion->close();
 ?>
