<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_funcion = $_POST['Nom_funcion'];
        $query = "INSERT INTO funciones(Nom_funcion) VALUES ('$Nom_funcion')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: funcion.php');
    }
?>