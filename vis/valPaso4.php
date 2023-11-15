<?php

    session_start();

    include('../config/conexion.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger datos del formulario
        $input = $_POST['input'];
        $sistema = $_POST['sistema'];
        $rol = $_POST['rol'];
        $tiempo = $_POST['tiempo'];
        $ = $_POST[''];
        $ = $_POST[''];


    // Almacenar en la sesión
    $_SESSION['nombre'] = $nombre;
    $_SESSION['email'] = $email;

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

