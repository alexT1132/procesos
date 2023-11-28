<?php
    session_start();

    include('../config/conexion.php');

    if (isset($_SESSION['formulario1']) && isset($_SESSION['formulario2'])) {
        $formulario1 = $_SESSION['formulario1'];
        $formulario2 = $_SESSION['formulario2'];

        // Escapa los datos para prevenir inyección SQL
        $Nombre = $conexion->real_escape_string($formulario1['Nombre']);
        $Apellido = $conexion->real_escape_string($formulario1['Apellido']);
        $Nom_Unidad_Negocio = $conexion->real_escape_string($formulario1['Nom_Unidad_Negocio']);
        $Email = $conexion->real_escape_string($formulario1['Email']);
        $Area = $conexion->real_escape_string($formulario1['Area']);
        $Nom_Direcciones = $conexion->real_escape_string($formulario1['Nom_Direcciones']);
        $Nom_Nuevo_Puesto = $conexion->real_escape_string($formulario1['Nom_Nuevo_Puesto']);
        $Nom_funcion = $conexion->real_escape_string($formulario1['Nom_funcion']);
        $estado = $conexion->real_escape_string($formulario2['estado']);
        $input = $conexion->real_escape_string($formulario2['input']);
        $sistema = $conexion->real_escape_string($formulario2['sistema']);
        $rol = $conexion->real_escape_string($formulario2['rol']);
        $tiempo = $conexion->real_escape_string($formulario2['tiempo']);
        $val_Frec = $conexion->real_escape_string($formulario2['val_Frec']);
        $vol = $conexion->real_escape_string($formulario2['vol']);
        $t_h = $conexion->real_escape_string($formulario2['t_h']);
        $ftes = $conexion->real_escape_string($formulario2['ftes']);

        $query = "UPDATE usuario_cliente SET Nombre = '$Nombre', Apellido = '$Apellido', Nom_Unidad_Negocio = '$Nom_Unidad_Negocio', Email = '$Email', Area = '$Area', Nom_Direcciones = '$Nom_Direcciones', Nom_Nuevo_Puesto = '$Nom_Nuevo_Puesto', Nom_funcion = '$Nom_funcion', 
        estado = '$estado', input = '$input', sistema = '$sistema', rol = '$rol', tiempo = '$tiempo', val_Frec = '$val_Frec', vol = '$vol', t_h = '$t_h', ftes = '$ftes' WHERE ID_empleado = {$formulario2['ID_empleado']}";
    $resultado = $conexion->query($query);

    $conexion->close();

    // Limpia los datos de la sesión
    unset($_SESSION['formulario2']);

    header('Location: paso2.php');
    exit;

} else {
    header('location: ../error.php');
}

?> 