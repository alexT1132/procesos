<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_Temporalidad = $_POST['Nom_Temporalidad'];
        $query = "INSERT INTO temporalidad(Nom_Temporalidad) VALUES ('$Nom_Temporalidad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: tem.php');
    }
?>