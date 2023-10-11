<?php

include("../../config/conexion.php");

if(isset($_GET['ID_unidad_negocio'])) {
  $ID_unidad_negocio = $_GET['ID_unidad_negocio'];
  $query = "DELETE FROM unidad_negocio WHERE ID_unidad_negocio = $ID_unidad_negocio";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: UN.php');
}

?>