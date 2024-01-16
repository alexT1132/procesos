<?php
    session_start();

    include('../config/conexion.php');

    if (isset($_SESSION['username']) && isset($_SESSION['formulario1']) && isset($_SESSION['formulario2'])) {
        $formulario1 = $_SESSION['formulario1'];
        $formulario2 = $_SESSION['formulario2'];
        $username_tab = $_SESSION['username'];

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
        $Nom_Subproceso = $conexion->real_escape_string($formulario2['Nom_Subproceso']);
        $Nom_Actividad = $conexion->real_escape_string($formulario2['Nom_Actividad']);
        $estado = $conexion->real_escape_string($formulario2['estado']);
        $input = $conexion->real_escape_string($formulario2['input']);
        $sistema = $conexion->real_escape_string($formulario2['sistema']);
        $rol = $conexion->real_escape_string($formulario2['rol']);
        $tiempo = $conexion->real_escape_string($formulario2['tiempo']);
        $val_Frec = $conexion->real_escape_string($formulario2['val_Frec']);
        $vol = $conexion->real_escape_string($formulario2['vol']);
        $t_h = $conexion->real_escape_string($formulario2['t_h']);
        $ftes = $conexion->real_escape_string($formulario2['ftes']);


        // Consulta SQL para sumar la columna
        $sql_suma = "SELECT SUM(ftes) as suma_total FROM $username_tab";
        $result_suma = $conexion->query($sql_suma);

        // Verificar si hay resultados
        if ($result_suma->num_rows > 0) {
            // Obtener el resultado de la suma
            $row = $result_suma->fetch_assoc();
            $sumaTotal = $row["suma_total"];

            if ($sumaTotal > 1.4) {

                header('location: paso_2.php');
                
            } else {
                
        $query1 = "UPDATE $username_tab SET val_Frec = '$val_Frec', input = '$input', sistema = '$sistema', rol = '$rol', tiempo = '$tiempo', vol = '$vol',
        t_h = '$t_h', ftes = '$ftes', estado = '$estado' WHERE id = {$formulario2['ID']}";
        $resultado1 = $conexion->query($query1);

        if ($resultado1) {
            
            $query2 = "INSERT INTO usuario_cliente (Nombre,
                                                        Apellido,
                                                        Nom_Unidad_Negocio,
                                                        Email,
                                                        Area,
                                                        Nom_Actividad,
                                                        Nom_Nuevo_Puesto,
                                                        Nom_Proceso,
                                                        Nom_Direcciones,
                                                        Nom_Subproceso,
                                                        Nom_funcion,
                                                        val_Frec,
                                                        input,
                                                        sistema,
                                                        rol,
                                                        tiempo,
                                                        vol,
                                                        t_h,
                                                        ftes) Values ('$Nombre',
                                                                        '$Apellido',
                                                                        '$Nom_Unidad_Negocio',
                                                                        '$Email',
                                                                        '$Area',
                                                                        '$Nom_Actividad',
                                                                        '$Nom_Nuevo_Puesto',
                                                                        '$Nom_Proceso',
                                                                        '$Nom_Direcciones',
                                                                        '$Nom_Subproceso',
                                                                        '$Nom_funcion',
                                                                        '$val_Frec',
                                                                        '$input',
                                                                        '$sistema',
                                                                        '$rol',
                                                                        '$tiempo',
                                                                        '$vol',
                                                                        '$t_h',
                                                                        '$ftes')";
            $resultado2 = $conexion->query($query2);

        }

    $conexion->close();

    header('Location: paso2.php');
    exit;

            }
        }
        

} else {
    header('location: ../error.php');
}

?> 