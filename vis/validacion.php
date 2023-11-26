<?php
    session_start();

    include('../config/conexion.php');

    if (isset($_SESSION['formulario1']) && isset($_SESSION['formulario2'])) {
        $formulario1 = $_SESSION['formulario1'];
        $formulario2 = $_SESSION['formulario2'];
        $formulario3 = $_SESSION['formulario3'];
        $formulario4 = $_SESSION['formulario4'];

        
        // Escapa los datos para prevenir inyección SQL
        $Nombre = $conexion->real_escape_string($formulario1['Nombre']);
        $Apellido = $conexion->real_escape_string($formulario1['Apellido']);
        $Nom_Unidad_Negocio = $conexion->real_escape_string($formulario1['Nom_Unidad_Negocio']);
        $Email = $conexion->real_escape_string($formulario1['Email']);
        $Area = $conexion->real_escape_string($formulario1['Area']);
        $Nom_Direcciones = $conexion->real_escape_string($formulario1['Nom_Direcciones']);
        $Nom_Nuevo_Puesto = $conexion->real_escape_string($formulario1['Nom_Nuevo_Puesto']);
        $Nom_funcion = $conexion->real_escape_string($formulario1['Nom_funcion']);
        $Nom_Proceso = $conexion->real_escape_string($formulario2['Nom_Proceso']);
        $Nom_Subproceso = $conexion->real_escape_string($formulario3['Nom_Subproceso']);
        $Nom_Actividad = $conexion->real_escape_string($formulario3['Nom_Actividad']);
        $input = $conexion->real_escape_string($formulario4['input']);
        $sistema = $conexion->real_escape_string($formulario4['sistema']);
        $rol = $conexion->real_escape_string($formulario4['rol']);
        $tiempo = $conexion->real_escape_string($formulario4['tiempo']);
        $val_Frec = $conexion->real_escape_string($formulario4['val_Frec']);
        $vol = $conexion->real_escape_string($formulario4['vol']);
        $t_h = $conexion->real_escape_string($formulario4['t_h']);
        $ftes = $conexion->real_escape_string($formulario4['ftes']);
       
        
        $query = "INSERT INTO usuario_cliente (Nombre = '$Nombre', Apellido = '$Apellido', Nom_Unidad_Negocio = '$Nom_Unidad_Negocio', Email = '$Email', Area = '$Area', Nom_Direcciones = '$Nom_Direcciones', Nom_Nuevo_Puesto = '$Nom_Nuevo_Puesto', Nom_funcion = '$Nom_funcion', input = '$input', 
    sistema = '$sistema', rol = '$rol', tiempo = '$tiempo', val_Frec = '$val_Frec', vol = '$vol', t_h = '$t_h', ftes = '$ftes')";
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