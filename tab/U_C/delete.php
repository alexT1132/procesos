<?php

include("../../config/conexion.php");

if(isset($_GET['ID_empleado'])) {
  $ID_empleado = $_GET['ID_empleado'];
  $query = "DELETE FROM usuario_cliente WHERE ID_unidad_negocio = $ID_unidad_negocio";
  $result = mysqli_query($conexion, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: uc.php');
}

?>