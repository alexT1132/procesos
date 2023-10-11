<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Nuevo_Puesto'])) {
  $ID_Nuevo_Puesto = $_GET['ID_Nuevo_Puesto'];
  $query = "DELETE FROM nuevo_puesto WHERE ID_Nuevo_Puesto = $ID_Nuevo_Puesto";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: puesto.php');
}

?>