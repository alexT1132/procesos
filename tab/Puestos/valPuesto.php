<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nuevo_Puesto = $_POST['Nuevo_Puesto'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $query = "INSERT INTO nuevo_puesto(Nuevo_Puesto,
                                    ID_Actividad,
                                    nom_actividad) VALUES ('$Nuevo_Puesto',
                                                            '$ID_Actividad',
                                                            '$nom_actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: puesto.php');
    }
?>