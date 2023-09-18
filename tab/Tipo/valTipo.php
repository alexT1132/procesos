<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Transaccional = $_POST['Transaccional'];
        $Estrategico = $_POST['Estrategico'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $query = "INSERT INTO tipo(Transaccional, 
                                        Estrategico, 
                                        ID_Actividad) VALUES ('$Transaccional', 
                                                                '$Estrategico', 
                                                                '$ID_Actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: Tipo.php');
    }
?>