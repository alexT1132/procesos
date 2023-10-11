<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Direccion'])) {
  $ID_Direccion = $_GET['ID_Direccion'];
  $query = "DELETE FROM direcciones WHERE ID_Direccion = $ID_Direccion";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: direcciones.php');
}

?>