<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Taxonomina'])) {
  $ID_Taxonomina = $_GET['ID_Taxonomina'];
  $query = "DELETE FROM taxonomina WHERE ID_Taxonomina = $ID_Taxonomina";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: taxo.php');
}

?>