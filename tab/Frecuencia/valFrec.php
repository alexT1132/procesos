<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_Valor = $_POST['Nom_Valor'];
        $query = "INSERT INTO frecuencia(Nom_Valor) VALUES ('$Nom_Valor')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: frecuencia.php');
    }
?>