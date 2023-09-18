<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $nom_calculo = $_POST['nom_calculo'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $Tiempo = $_POST['Tiempo'];
        $Frecuencia = $_POST['Frecuencia'];
        $query = "INSERT INTO calculo(nom_calculo,
                                        ID_Actividad, 
                                        nom_actividad, 
                                        Tiempo, 
                                        Frecuencia) VALUES ('$nom_calculo',
                                                                '$ID_Actividad', 
                                                                '$nom_actividad', 
                                                                '$Tiempo', 
                                                                '$Frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: calculo.php');
    }
?>