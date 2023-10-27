<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_Subproceso = $_POST['nom_Subproceso'];
        $query = "INSERT INTO sub_proceso(nom_Subproceso) VALUES ('$nom_Subproceso')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: subPros.php');
    }
?>