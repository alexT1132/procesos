<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Nomen'])) {
  $ID_Nomen = $_GET['ID_Nomen'];
  $query = "DELETE FROM nomenclatura WHERE ID_Nomen = $ID_Nomen";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: nomenclatura.php');
}

?>