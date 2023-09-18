<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_Direccion = $_POST['Nom_Direccion'];
        $query = "INSERT INTO direcciones(Nom_Direccion) VALUES ('$Nom_Direccion')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: direcciones.php');
    }
?>