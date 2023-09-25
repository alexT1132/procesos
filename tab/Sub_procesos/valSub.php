<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_Subproceso = $_POST['nom_Subproceso'];
        $ID_Proceso = $_POST['ID_Proceso'];
        $nom_proceso = $_POST['nom_proceso'];
        $ID_Actividad  = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $query = "INSERT INTO sub_proceso(nom_Subproceso, 
                                        ID_Proceso, 
                                        nom_proceso,
                                        ID_Actividad,
                                        nom_actividad) VALUES ('$nom_Subproceso', 
                                                                '$ID_Proceso', 
                                                                '$nom_proceso',
                                                                '$ID_Actividad ',
                                                                '$nom_actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: subPros.php');
    }
?>