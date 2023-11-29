<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ../../error.php");
    die();
}

?>

<?php
include("../../config/conexion.php");
$Procesos = '';
$subproceso = '';
$Actividad = '';

if  (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "SELECT * FROM consultas WHERE ID = $ID";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Procesos = $row['Procesos'];
    $subproceso = $row['subproceso'];
    $Actividad = $row['Actividad'];
  }
}

if (isset($_POST['update'])) {
    $ID = $_GET['ID'];
    $Procesos = $_POST['Procesos'];
    $subproceso = $_POST['subproceso'];
    $Actividad = $_POST['Actividad'];
    $query = "UPDATE consultas set Procesos = '$Procesos', subproceso = '$subproceso', Actividad = '$Actividad' WHERE ID = $ID";
    mysqli_query($conexion, $query);
    header('Location: consultas.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Piasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="title text-center">
        <h1>Modificar datos</h1>
    </div>
    <br>
    <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="edit.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="mb-3">
            <label>nom_proceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Procesos">
            <?php
                $sql1 = "SELECT * FROM consultas WHERE ID =".$row['ID'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected disabled value='".$row1['Procesos']."'>".$row1['Procesos']."</option>";

                $sql2 = "SELECT * FROM procesos";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_Procesos']."'>".$Fila['Nom_Procesos']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_subProceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="subproceso">
            <?php
                $sql1 = "SELECT * FROM consultas WHERE ID =".$row['ID'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected disabled value='".$row1['subproceso']."'>".$row1['subproceso']."</option>";

                $sql2 = "SELECT * FROM sub_proceso";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['nom_Subproceso']."'>".$Fila['nom_Subproceso']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
                <label>nom_actividad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="Actividad">
                    <option selected disabled>--Seleccione Actividad--</option>
                        <?php
                            $sql1 = "SELECT * FROM consultas WHERE ID=".$row['ID'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['Actividad']."'>".$row1['Actividad']."</option>";

                            $sql2 = "SELECT * FROM detalle_actividad";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['nom_actividad']."'>".$Fila['nom_actividad']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <a type="submite" class="btn btn-danger" href="calculo.php">Back</a>
            <button class="btn btn-success" name="update">
                Update
            </button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>