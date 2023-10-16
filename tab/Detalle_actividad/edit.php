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
$nom_actividad = '';
$Entregable = '';
$sistema = '';
$Descripcion = '';

if  (isset($_GET['ID_Actividad'])) {
  $ID_Actividad = $_GET['ID_Actividad'];
  $query = "SELECT * FROM detalle_actividad WHERE ID_Actividad = $ID_Actividad";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom_actividad = $row['nom_actividad'];
    $Entregable = $row['Entregable'];
    $sistema = $row['sistema'];
    $Descripcion = $row['Descripcion'];
  }
}

if (isset($_POST['update'])) {
    $ID_Actividad = $_GET['ID_Actividad'];
    $nom_actividad = $_POST['nom_actividad'];
    $Entregable = $_POST['Entregable'];
    $sistema = $_POST['sistema'];
    $Descripcion = $_POST['Descripcion'];
    $query = "UPDATE detalle_actividad set nom_actividad = '$nom_actividad', Entregable = '$Entregable', sistema = '$sistema', Descripcion = '$Descripcion' WHERE ID_Actividad = $ID_Actividad";
    mysqli_query($conexion, $query);
    header('Location: DA.php');
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
        <form action="edit.php?ID_Actividad=<?php echo $_GET['ID_Actividad']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom_actividad</label>
                <input type="text" class="form-control" name="nom_actividad" value="<?php echo $nom_actividad; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entregable</label>
                <input type="text" class="form-control" name="Entregable" value="<?php echo $Entregable; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">sistema</label>
                <input type="text" class="form-control" name="sistema" value="<?php echo $sistema; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion" value="<?php echo $Descripcion; ?>" placeholder="Actualizar Descripcion">
            </div>
            <a type="submite" class="btn btn-danger" href="DA.php">Back</a>
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