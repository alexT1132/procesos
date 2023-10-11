<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Tipo'])) {
  $ID_Tipo = $_GET['ID_Tipo'];
  $query = "DELETE FROM tipo WHERE ID_Tipo = $ID_Tipo";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: tipo.php');
}

?>