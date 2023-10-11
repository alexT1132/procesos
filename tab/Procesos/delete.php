<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Procesos'])) {
  $ID_Procesos = $_GET['ID_Procesos'];
  $query = "DELETE FROM procesos WHERE ID_Procesos = $ID_Procesos";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: procesos.php');
}

?>