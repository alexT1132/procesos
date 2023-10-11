<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_entrega = $_POST['nom_entrega'];
        $query = "INSERT INTO entrega(nom_entrega) VALUES ('$nom_entrega')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: entrega.php');
    }
?>