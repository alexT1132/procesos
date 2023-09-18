<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Transaccional = $_POST['Transaccional'];
        $Estrategico = $_POST['Estrategico'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $query = "INSERT INTO tipo(Transaccional, 
                                        Estrategico, 
                                        ID_Actividad,
                                        nom_actividad) VALUES ('$Transaccional', 
                                                                '$Estrategico', 
                                                                '$ID_Actividad',
                                                                '$nom_actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: Tipo.php');
    }
?>