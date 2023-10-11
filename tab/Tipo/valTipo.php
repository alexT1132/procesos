<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_tipo = $_POST['nom_tipo'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $query = "INSERT INTO tipo(nom_tipo, 
                                        ID_Actividad,
                                        nom_actividad) VALUES ('$nom_tipo', 
                                                                '$ID_Actividad',
                                                                '$nom_actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: tipo.php');
    }
?>