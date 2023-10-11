<?php

include("../../config/conexion.php");

if(isset($_GET['ID_subProcesos'])) {
  $ID_subProcesos = $_GET['ID_subProcesos'];
  $query = "DELETE FROM sub_proceso WHERE ID_subProcesos = $ID_subProcesos";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: subPros.php');
}

?>