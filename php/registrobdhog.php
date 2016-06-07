<?php
    include("conexion2.php");

    if(isset($_POST['registrohog'])){

        $alias = $_POST['alias'];
        $nombre = $_POST['ncompleto'];
        $hoginter = $_POST['hoginternacional'];
        $moto1 = $_POST['moto1'];
        $moto2 = $_POST['moto2'];
        $moto3 = $_POST['moto3'];
        $moto4 = $_POST['moto4'];
        $moto5 = $_POST['moto5'];
        $moto6 = $_POST['moto6'];
        $cel = $_POST['celular'];
        $face = $_POST['facebook'];
        $whats = $_POST['whatsapp'];
        $telemer = $_POST['telemergencia'];
        $contactoemer = $_POST['contactoemergencia'];
        $poliza = $_POST['poliza'];
        $telseguro = $_POST['telseguro'];
        $tiposang = $_POST['tiposanguineo'];
        $alergia = $_POST['alergias'];


        if($alias != "" && $nombre != "" && $moto1 != "" && $cel != "" &&
           $face != "" && $whats != "" && $telemer != "" && $contactoemer != ""
           && $poliza != "" && $telseguro != "" && $tiposang != "" && $alergia != ""){

                $sql = 'SELECT nombre_completo FROM miembros';
                $resultado = $conexion -> query($sql);

                $row = mysqli_fetch_array($resultado);
                $compara = $row['user'];
                $sql2 = "SELECT nombre_completo FROM miembros WHERE nombre_completo = '$compara'";
                $verificar = $conexion -> query($sql2);

                if($verificar == $nombre){

                            echo '<script type= "text/javascript">alert("El usuario ya existe");</script>';
                }else{

                    $sql3 = "INSERT INTO miembros (alias,nombre_completo, hog_internacional, moto_1, moto_2 , moto_3, moto_4, moto_5, moto_6, celular, facebook, whatsapp, tel_emergencia, contacto_emergecia, poliza_seguro, contacto_seguro, tipo_sanguineo, alergias) VALUES ('$alias', '$nombre', '$hoginter', '$moto1', '$moto2', '$moto3', '$moto4', '$moto5', '$moto6 ', '$cel',
                            '$face', '$whats', '$telemer', '$contactoemer', '$poliza', '$telseguro', '$tiposang', '$alergia')";

                    $insertar = $conexion -> query($sql3);

                    echo '<script type="text/javascript">alert("Se ha registrado correctamente");</script>';
                }




           }else{
               '<script type="text/javascript">alert("Favor de completar los campos solicitados");</script>';
           }

    }
 ?>
