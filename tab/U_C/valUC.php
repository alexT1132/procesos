<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
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
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "INSERT INTO usuario_cliente(Nombre, 
                                    Apellido,
                                    ID_Unidad_Negocio,
                                    Nom_Unidad_Negocio,
                                    Email,
                                    Area,
                                    ID_Actividad,
                                    Nom_Actividad,
                                    ID_Nuevo_Puesto,
                                    Nom_Nuevo_Puesto,
                                    ID_Procesos,
                                    Nom_Proceso,
                                    ID_Direcciones,
                                    Nom_Direcciones,
                                    ID_Subproceso,
                                    Nom_Subproceso,
                                    ID_funcion,
                                    Nom_funcion,
                                    ID_Valor,
                                    Nom_frecuencia) VALUES ('$Nombre',
                                                        '$Apellido',
                                                        '$ID_Unidad_Negocio',
                                                        '$Nom_Unidad_Negocio',
                                                        '$Email',
                                                        '$Area',
                                                        '$ID_Actividad',
                                                        '$Nom_Actividad',
                                                        '$ID_Nuevo_Puesto',
                                                        '$Nom_Nuevo_Puesto',
                                                        '$ID_Procesos',
                                                        '$Nom_Proceso',
                                                        '$ID_Direcciones',
                                                        '$Nom_Direcciones',
                                                        '$ID_Subproceso',
                                                        '$Nom_Subproceso',
                                                        '$ID_funcion',
                                                        '$Nom_funcion',
                                                        '$ID_Valor',
                                                        '$Nom_frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: uc.php');
    }
?>