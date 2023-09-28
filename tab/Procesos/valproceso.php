<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_Procesos = $_POST['Nom_Procesos'];
        $query = "INSERT INTO procesos(Nom_Procesos) VALUES ('$Nom_Procesos')";
        $result = mysqli_query($conexion,$query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: procesos.php');
    }
?>