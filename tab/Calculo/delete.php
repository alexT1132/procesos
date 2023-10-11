<?php

include("../../config/conexion.php");

if(isset($_GET['ID_Calculo'])) {
  $ID_Calculo = $_GET['ID_Calculo'];
  $query = "DELETE FROM calculo WHERE ID_Calculo = $ID_Calculo";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: calculo.php');
}

?>