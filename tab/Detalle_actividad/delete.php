<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Actividad'])) {
  $ID_Actividad = $_GET['ID_Actividad'];
  $query = "DELETE FROM detalle_actividad WHERE ID_Actividad = $ID_Actividad";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: DA.php');
}

?>