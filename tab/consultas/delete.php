<?php

include("../../config/conexion.php");

if(isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "DELETE FROM consultas WHERE ID = $ID";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: consultas.php');
}

?>