<?php

include("../../config/conexion.php");

if(isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "SELECT * FROM usernames WHERE ID = $ID";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $username = $row['username'];
    
    // Nombre de la tabla que deseas seleccionar y renombrar
    $username_tab = $username;

    // Consulta para seleccionar datos de la tabla
    $sql_select_data = "SELECT * FROM $username_tab";

    $result_select_data = $conexion->query($sql_select_data);

    if ($result_select_data->num_rows > 0) {

        // Consulta para borrar la tabla
        $sql_drop_table = "DROP TABLE IF EXISTS $username_tab";

        if ($conexion->query($sql_drop_table) === TRUE) {
          echo 'Exito';
        } else {
            echo "Error al cambiar el nombre de la tabla: ";
        }

      } 

  }

  $query_delete = "DELETE FROM usernames WHERE ID = $ID";
        $result_delete = mysqli_query($conexion, $query_delete);

        if(!$result_delete) {
          die("Query Failed.");
        }
      
        header('Location: users.php');
            
}

?>