<?php
    include('../../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $ID_funcion = $_POST['ID_funcion'];
        $Nom_funcion = $_POST['Nom_funcion'];
        $ID_Procesos = $_POST['ID_Procesos'];
        $nom_Procesos = $_POST['nom_Procesos'];
        $ID_subproceso = $_POST['ID_subproceso'];
        $nom_subproceso = $_POST['nom_subproceso'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $nom_Actividad = $_POST['nom_Actividad'];
        $query = "INSERT INTO consultas(ID_funcion, 
                                        Nom_funcion, 
                                        ID_Procesos,
                                        nom_Procesos,
                                        ID_subproceso,
                                        nom_subproceso,
                                        ID_Actividad,
                                        nom_Actividad) VALUES ('$ID_funcion', 
                                                            '$Nom_funcion', 
                                                            '$ID_Procesos',
                                                            '$nom_Procesos',
                                                            '$ID_subproceso',
                                                            '$nom_subproceso',
                                                            '$ID_Actividad',
                                                            '$nom_Actividad')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        header('Location: consultas.php');
    }
?>