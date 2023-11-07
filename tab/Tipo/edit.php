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
$nom_tipo = '';
$ID_Actividad = '';
$nom_actividad = '';

if  (isset($_GET['ID_Tipo'])) {
  $ID_Tipo = $_GET['ID_Tipo'];
  $query = "SELECT * FROM tipo WHERE ID_Tipo = $ID_Tipo";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom_tipo = $row['nom_tipo'];
    $ID_Actividad = $row['ID_Actividad'];
    $nom_actividad = $row['nom_actividad'];
  }
}

if (isset($_POST['update'])) {
    $ID_Tipo = $_GET['ID_Tipo'];
    $nom_tipo = $_POST['nom_tipo'];
    $ID_Actividad = $_POST['ID_Actividad'];
    $nom_actividad = $_POST['nom_actividad'];
    $query = "UPDATE tipo set nom_tipo = '$nom_tipo', ID_Actividad = '$ID_Actividad', nom_actividad = '$nom_actividad' WHERE ID_Tipo = $ID_Tipo";
    mysqli_query($conexion, $query);
    header('Location: tipo.php');
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
        <form action="edit.php?ID_Tipo=<?php echo $_GET['ID_Tipo']; ?>" method="POST">
            <div class="mb-3">
                <label for="" class="form-label">Nombre tipo</label>
                <select class="form-select mb-3" name="nom_tipo">
                    <option selected disabled value="<?php echo $row['nom_tipo']; ?>"><?php echo $row['nom_tipo']; ?></option>
                    <option value="...">...</option>
                    <option value="Transaccional">Transaccional</option>
                    <option value="Estrategico">Estratégico</option>
                </select>
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
            <a type="submite" class="btn btn-danger" href="tipo.php">Back</a>
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