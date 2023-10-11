<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Valor'])) {
  $ID_Valor = $_GET['ID_Valor'];
  $query = "DELETE FROM frecuencia WHERE ID_Valor = $ID_Valor";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: frecuencia.php');
}

?>