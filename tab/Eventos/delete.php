<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Eventos'])) {
  $ID_Eventos = $_GET['ID_Eventos'];
  $query = "DELETE FROM eventos WHERE ID_Eventos = $ID_Eventos";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: eventos.php');
}

?>