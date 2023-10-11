<?php

include("../../config/conexion.php");

if(isset($_GET['ID_entrega'])) {
  $ID_entrega = $_GET['ID_entrega'];
  $query = "DELETE FROM entrega WHERE ID_entrega = $ID_entrega";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: entrega.php');
}

?>