<?php
    include('../config/conexion.php');

    if (isset($_POST['update'])) {
        $ID_empleado = $_GET['ID_empleado'];
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $ID_Unidad_Negocio = $_POST['ID_Unidad_Negocio'];
        $Nom_Unidad_Negocio = $_POST['Nom_Unidad_Negocio'];
        $Email = $_POST['Email'];
        $Area = $_POST['Area'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $Nom_Actividad = $_POST['Nom_Actividad'];
        $ID_Nuevo_Puesto = $_POST['ID_Nuevo_Puesto'];
        $Nom_Nuevo_Puesto = $_POST['Nom_Nuevo_Puesto'];
        $ID_Procesos = $_POST['ID_Procesos'];
        $Nom_Proceso = $_POST['Nom_Proceso'];
        $ID_Direcciones = $_POST['ID_Direcciones'];
        $Nom_Direcciones = $_POST['Nom_Direcciones'];
        $ID_Subproceso = $_POST['ID_Subproceso'];
        $Nom_Subproceso = $_POST['Nom_Subproceso'];
        $ID_funcion = $_POST['ID_funcion'];
        $Nom_funcion = $_POST['Nom_funcion'];
        $ID_Valor = $_POST['ID_Valor'];
        $Nom_Valor = $_POST['Nom_Valor'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "UPDATE usuario_cliente set Nombre = '$Nombre', Apellido = '$Apellido', ID_Unidad_Negocio = '$ID_Unidad_Negocio', Nom_Unidad_Negocio = '$Nom_Unidad_Negocio', Email = '$Email', Area = '$Area', ID_Actividad = '$ID_Actividad', Nom_Actividad = '$Nom_Actividad', ID_Nuevo_Puesto = '$ID_Nuevo_Puesto', Nom_Nuevo_Puesto = '$Nom_Nuevo_Puesto', ID_Procesos = '$ID_Procesos', Nom_Proceso = '$Nom_Proceso', ID_Direcciones = '$ID_Direcciones', Nom_Direcciones = '$Nom_Direcciones', ID_Subproceso = '$ID_Subproceso', Nom_Subproceso = '$Nom_Subproceso', ID_funcion = '$ID_funcion', Nom_funcion = '$Nom_funcion', ID_Valor = '$ID_Valor', 
        Nom_Valor = '$Nom_Valor', Nom_frecuencia = '$Nom_frecuencia' WHERE ID_empleado = $ID_empleado";
        mysqli_query($conexion, $query);
        header('Location: paso1.php');
    }
?>