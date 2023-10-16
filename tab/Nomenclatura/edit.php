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
$Nomenclatura = '';
$ID_Actividad  = '';
$nom_actividad = '';
$ID_Procesos = '';
$Nom_Proceso = '';
$ID_Subproceso = '';
$Nom_Subproceso = '';

if  (isset($_GET['ID_Nomen'])) {
  $ID_Nomen = $_GET['ID_Nomen'];
  $query = "SELECT * FROM nomenclatura WHERE ID_Nomen = $ID_Nomen";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nomenclatura = $row['Nomenclatura'];
    $ID_Actividad = $row['ID_Actividad'];
    $nom_actividad = $row['nom_actividad'];
    $ID_Procesos = $row['ID_Procesos'];
    $Nom_Proceso = $row['Nom_Proceso'];
    $ID_Subproceso = $row['ID_Subproceso'];
    $Nom_Subproceso = $row['Nom_Subproceso'];

  }
}

if (isset($_POST['update'])) {
    $ID_Nomen = $_GET['ID_Nomen'];
    $Nomenclatura = $_POST['Nomenclatura'];
    $ID_Actividad = $_POST['ID_Actividad'];
    $nom_actividad = $_POST['nom_actividad'];
    $ID_Procesos = $_POST['ID_Procesos'];
    $Nom_Proceso = $_POST['Nom_Proceso'];
    $ID_Subproceso = $_POST['ID_Subproceso'];
    $Nom_Subproceso = $_POST['Nom_Subproceso'];

    $query = "UPDATE nomenclatura set Nomenclatura = '$Nomenclatura', ID_Actividad = '$ID_Actividad', nom_actividad = '$nom_actividad', ID_Procesos = '$ID_Procesos', Nom_Proceso = '$Nom_Proceso', ID_Subproceso = '$ID_Subproceso', Nom_Subproceso = '$Nom_Subproceso' WHERE ID_Nomen = $ID_Nomen";
    mysqli_query($conexion, $query);
    header('Location: nomenclatura.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Piasa</title>
    <link rel="shortcut icon" href="../../img/logo_3.png">
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
        <form action="edit.php?ID_Nomen=<?php echo $_GET['ID_Nomen']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom_Nomenclatura</label>
                <input type="text" class="form-control" name="Nomenclatura" value="<?php echo $Nomenclatura; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label>ID_Actividad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="ID_Actividad">
                    <option selected disabled>--Seleccione Actividad--</option>
                        <?php
                            $sql1 = "SELECT * FROM detalle_actividad WHERE ID_Actividad=".$row['ID_Actividad'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['ID_Actividad']."'>".$row1['nom_actividad']."</option>";

                            $sql2 = "SELECT * FROM detalle_actividad";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['ID_Actividad']."'>".$Fila['nom_actividad']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
                <label>nom_actividad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="nom_actividad">
                    <option selected disabled>--Seleccione Actividad--</option>
                        <?php
                            $sql1 = "SELECT * FROM detalle_actividad WHERE ID_Actividad=".$row['ID_Actividad'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['nom_actividad']."'>".$row1['nom_actividad']."</option>";

                            $sql2 = "SELECT * FROM detalle_actividad";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['nom_actividad']."'>".$Fila['nom_actividad']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
            <label>ID_Proceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Procesos">
            <option selected disabled>--Seleccione Proceso--</option>
            <?php
                $sql1 = "SELECT * FROM nomenclatura WHERE ID_Procesos =".$row['ID_Procesos'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['ID_Procesos']."'>".$row1['Nom_Proceso']."</option>";

                $sql2 = "SELECT * FROM procesos";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ID_Procesos']."'>".$Fila['Nom_Procesos']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>nom_proceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Proceso">
            <option selected disabled>--Seleccione Proceso--</option>
            <?php
                $sql1 = "SELECT * FROM nomenclatura WHERE ID_Procesos =".$row['ID_Procesos'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_Proceso']."'>".$row1['Nom_Proceso']."</option>";

                $sql2 = "SELECT * FROM procesos";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_Procesos']."'>".$Fila['Nom_Procesos']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>ID_subProceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Subproceso">
            <option selected disabled>--Seleccione subProceso--</option>
            <?php
                $sql1 = "SELECT * FROM nomenclatura WHERE ID_Subproceso =".$row['ID_Subproceso'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['ID_Subproceso']."'>".$row1['Nom_Subproceso']."</option>";

                $sql2 = "SELECT * FROM sub_proceso";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ID_subProcesos']."'>".$Fila['nom_Subproceso']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_subProceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Subproceso">
            <option selected disabled>--Seleccione subProceso--</option>
            <?php
                $sql1 = "SELECT * FROM nomenclatura WHERE ID_Subproceso =".$row['ID_Subproceso'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_Subproceso']."'>".$row1['Nom_Subproceso']."</option>";

                $sql2 = "SELECT * FROM sub_proceso";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['nom_Subproceso']."'>".$Fila['nom_Subproceso']."</option>";
                }
            ?>   
        </select>
            </div>
            <a type="submite" class="btn btn-danger" href="nomenclatura.php">Back</a>
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