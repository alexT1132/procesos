<?php
    session_start();

    if (isset($_SESSION['formulario1']) && isset($_SESSION['formulario2'])) {
        $formulario1 = $_SESSION['formulario1'];
        $formulario2 = $_SESSION['formulario2'];
    }

    if (isset($_SESSION['Editar'])) {
        $Editar = $_SESSION['Editar'];
    }

    // Limpia los datos de la sesión
    unset($_SESSION['formulario1']);
    unset($_SESSION['formulario2']);
    unset($_SESSION['Editar']);

    session_destroy();
    header('location: index.php');

?>