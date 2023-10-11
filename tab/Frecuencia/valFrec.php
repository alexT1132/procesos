<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nom_Valor = $_POST['Nom_Valor'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "INSERT INTO frecuencia(Nom_Valor, Nom_frecuencia) VALUES ('$Nom_Valor', '$Nom_frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: frecuencia.php');
    }
?>