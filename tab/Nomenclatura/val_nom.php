<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nomenclatura = $_POST['Nomenclatura'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $ID_Procesos  = $_POST['ID_Procesos'];
        $Nom_Proceso = $_POST['Nom_Proceso'];
        $ID_Subproceso = $_POST['ID_Subproceso'];
        $Nom_Subproceso = $_POST['Nom_Subproceso'];
        $query = "INSERT INTO nomenclatura(Nomenclatura, 
                                        ID_Actividad, 
                                        nom_actividad,
                                        ID_Procesos,
                                        Nom_Proceso,
                                        ID_Subproceso,
                                        Nom_Subproceso) VALUES ('$Nomenclatura', 
                                                                '$ID_Actividad', 
                                                                '$nom_actividad',
                                                                '$ID_Procesos ',
                                                                '$Nom_Proceso',
                                                                '$ID_Subproceso',
                                                                '$Nom_Subproceso')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: nomenclatura.php');
    }
?>