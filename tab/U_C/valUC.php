<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Nom_Unidad_Negocio = $_POST['Nom_Unidad_Negocio'];
        $Email = $_POST['Email'];
        $Area = $_POST['Area'];
        $Nom_Actividad = $_POST['Nom_Actividad'];
        $Nom_Nuevo_Puesto = $_POST['Nom_Nuevo_Puesto'];
        $Nom_Proceso = $_POST['Nom_Proceso'];
        $Nom_Direcciones = $_POST['Nom_Direcciones'];
        $Nom_Subproceso = $_POST['Nom_Subproceso'];
        $Nom_funcion = $_POST['Nom_funcion'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "INSERT INTO usuario_cliente(Nombre, 
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
                                    Nom_frecuencia) VALUES ('$Nombre',
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
                                                        '$Nom_frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: uc.php');
    }
?>