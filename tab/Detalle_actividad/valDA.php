<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $ID_Actividad = $_POST['ID_Actividad'];
        $Entregable = $_POST['Entregable'];
        $sistema = $_POST['sistema'];
        $Descripcion = $_POST['Descripcion'];
        $query = "INSERT INTO detalle_actividad(ID_Actividad, 
                                        Entregable, 
                                        sistema, 
                                        Descripcion) VALUES ('$ID_Actividad', 
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