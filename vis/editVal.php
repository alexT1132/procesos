<?php
    session_start();

    include('../config/conexion.php');

    if (isset($_SESSION['Editar'])) {
        $Editar = $_SESSION['Editar'];

        // Escapa los datos para prevenir inyección SQL
        $Nom_Proceso = $conexion->real_escape_string($Editar['Nom_Proceso']);
        $Nom_Subproceso = $conexion->real_escape_string($Editar['Nom_Subproceso']);
        $Nom_Actividad = $conexion->real_escape_string($Editar['Nom_Actividad']);
        $input = $conexion->real_escape_string($Editar['input']);
        $sistema = $conexion->real_escape_string($Editar['sistema']);
        $rol = $conexion->real_escape_string($Editar['rol']);
        $tiempo = $conexion->real_escape_string($Editar['tiempo']);
        $val_Frec = $conexion->real_escape_string($Editar['val_Frec']);
        $vol = $conexion->real_escape_string($Editar['vol']);
        $t_h = $conexion->real_escape_string($Editar['t_h']);
        $ftes = $conexion->real_escape_string($Editar['ftes']);

        $query1 = "UPDATE consultas SET val_Frec = '$val_Frec', input = '$input', sistema = '$sistema', rol = '$rol', tiempo = '$tiempo', vol = '$vol',
        t_h = '$t_h', ftes = '$ftes' WHERE ID = {$Editar['ID']}";
        $resultado1 = $conexion->query($query1);

        if ($resultado1) {
            
            $query2 = "UPDATE usuario_cliente SET val_Frec = '$val_Frec', input = '$input', sistema = '$sistema', rol = '$rol', tiempo = '$tiempo', vol = '$vol',
            t_h = '$t_h', ftes = '$ftes' WHERE Nom_Proceso = '$Nom_Proceso' AND Nom_Subproceso = '$Nom_Subproceso' AND Nom_Actividad = '$Nom_Actividad'";
            $resultado2 = $conexion->query($query2);

        }


    $conexion->close();

    // Limpia los datos de la sesión
    unset($_SESSION['Editar']);

    header('Location: paso2.php');
    exit;

} else {
    header('location: ../error.php');
}

?> 