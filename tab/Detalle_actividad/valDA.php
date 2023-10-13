<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_actividad = $_POST['nom_actividad'];
        $Entregable = $_POST['Entregable'];
        $sistema = $_POST['sistema'];
        $Descripcion = $_POST['Descripcion'];
        $query = "INSERT INTO detalle_actividad(nom_actividad, 
                                        Entregable, 
                                        sistema, 
                                        Descripcion) VALUES ('$nom_actividad', 
                                                                '$Entregable', 
                                                                '$sistema', 
                                                                '$Descripcion')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: DA.php');
    }
?>