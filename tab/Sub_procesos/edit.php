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
$nom_Subproceso = '';

if  (isset($_GET['ID_subProcesos'])) {
  $ID_subProcesos = $_GET['ID_subProcesos'];
  $query = "SELECT * FROM sub_proceso WHERE ID_subProcesos = $ID_subProcesos";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom_Subproceso = $row['nom_Subproceso'];
  }
}

if (isset($_POST['update'])) {
    $ID_subProcesos = $_GET['ID_subProcesos'];
    $nom_Subproceso = $_POST['nom_Subproceso'];
    $query = "UPDATE sub_proceso set nom_Subproceso = '$nom_Subproceso' WHERE ID_subProcesos = $ID_subProcesos";
    mysqli_query($conexion, $query);
    header('Location: subPros.php');
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
        <form action="edit.php?ID_subProcesos=<?php echo $_GET['ID_subProcesos']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre subproceso</label>
                <input type="text" class="form-control" name="nom_Subproceso" value="<?php echo $nom_Subproceso; ?>" placeholder="Actualizar Nombre">
            </div>
            <a type="submite" class="btn btn-danger" href="subPros.php">Back</a>
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