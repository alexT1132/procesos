<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_puesto = $_POST['nom_puesto'];
        $query = "INSERT INTO puestos(nom_puesto) VALUES ('$nom_puesto')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: puesto.php');
    }
?>