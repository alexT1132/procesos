<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_actividad = $_POST['nom_actividad'];
        $Tiempo = $_POST['Tiempo'];
        $ID_Valor = $_POST['ID_Valor'];
        $Nom_Valor = $_POST['Nom_Valor'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "INSERT INTO calculo(ID_Actividad, 
                                        nom_actividad, 
                                        Tiempo, 
                                        ID_Valor,
                                        Nom_Valor,
                                        Nom_frecuencia) VALUES ('$ID_Actividad', 
                                                                '$nom_actividad', 
                                                                '$Tiempo', 
                                                                '$ID_Valor',
                                                                '$Nom_Valor',
                                                                '$Nom_frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: calculo.php');
    }
?>