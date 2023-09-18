<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Eventual = $_POST['Eventual'];
        $Por_Eventos = $_POST['Por_Eventos'];
        $Continuos = $_POST['Continuos'];
        $Mensual = $_POST['Mensual'];
        $query = "INSERT INTO eventos(	Eventual, 
                                        Por_Eventos, 
                                        Continuos,
                                        Mensual) VALUES ( '$Eventual', 
                                                                '$Por_Eventos', 
                                                                '$Continuos',
                                                                '$Mensual')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: eventos.php');
    }
?>