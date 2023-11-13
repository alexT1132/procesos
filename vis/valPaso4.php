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
            header("Location: paso2.php");
        }else
        if ($val_Frec == '1') {
            $t_h = ($tiempo * $vol * $val_Frec);
            header("Location: paso2.php");
        }else
        if ($val_Frec == '12') {
            $t_h = ($tiempo * $vol) / $val_Frec;
            header("Location: paso2.php");
        }

        if ($t_h) {
            $ftes = $t_h / 160;
            header("Location: paso2.php");
        }

    }
?>