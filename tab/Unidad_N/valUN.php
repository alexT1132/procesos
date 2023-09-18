<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_unidad_negocio = $_POST['nom_unidad_negocio'];
        $query = "INSERT INTO unidad_negocio(nom_unidad_negocio) VALUES ('$nom_unidad_negocio')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: UN.php');
    }
?>