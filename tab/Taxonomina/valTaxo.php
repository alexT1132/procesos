<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_taxonomina = $_POST['nom_taxonomina'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $ID_proceso = $_POST['ID_proceso'];
        $nom_proceso = $_POST['nom_proceso'];
        $ID_Subproceso = $_POST['ID_Subproceso'];
        $nom_Subproceso = $_POST['nom_Subproceso'];
        $query = "INSERT INTO taxonomina(nom_taxonomina, 
                                        ID_Actividad, 
                                        nom_actividad,
                                        ID_proceso,
                                        nom_proceso,
                                        ID_Subproceso,
                                        nom_Subproceso) VALUES ('$nom_taxonomina', 
                                                                '$ID_Actividad', 
                                                                '$nom_actividad',
                                                                '$ID_proceso',
                                                                '$nom_proceso',
                                                                '$ID_Subproceso',
                                                                '$nom_Subproceso')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: taxo.php');
    }
?>