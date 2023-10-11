<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Temporalidad'])) {
  $ID_Temporalidad = $_GET['ID_Temporalidad'];
  $query = "DELETE FROM temporalidad WHERE ID_Temporalidad = $ID_Temporalidad";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: tem.php');
}

?>