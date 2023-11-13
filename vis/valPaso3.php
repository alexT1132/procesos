<?php
    include('../config/conexion.php');

    if (isset($_POST['update'])) {
        $input = $_POST['input'];
        $sistema = $_POST['sistema'];
        $rol = $_POST['rol'];
        $tiempo = $_POST['tiempo'];
        $val_Frec = $_POST['val_Frec'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $vol = $_POST['vol'];

        if ($val_Frec == '4') {
            $t_h = ($tiempo * $vol * $val_Frec);
            echo "El resultado es: " . $t_h;
        }else
        if ($val_Frec == '1') {
            $t_h = ($tiempo * $vol * $val_Frec);
            echo "El resultado es: " . $t_h;
        }else
        if ($val_Frec == '12') {
            $t_h = ($tiempo * $vol) / $val_Frec;
            echo "El resultado es: " . $t_h;
        }

        if ($t_h) {
            $ftes = $t_h / 160;
            echo "El resultado es: " . $ftes;
        }

    }
?>