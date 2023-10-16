<?php

include("../../config/conexion.php");

if(isset($_GET['ID_funcion'])) {
  $ID_funcion = $_GET['ID_funcion'];
  $query = "DELETE FROM funciones WHERE ID_funcion = $ID_funcion";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: funcion.php');
}

?>