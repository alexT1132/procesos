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
$Nom_Valor = '';
$Nom_frecuencia = '';

if  (isset($_GET['ID_Valor'])) {
  $ID_Valor = $_GET['ID_Valor'];
  $query = "SELECT * FROM frecuencia WHERE ID_Valor = $ID_Valor";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nom_Valor = $row['Nom_Valor'];
    $Nom_frecuencia = $row['Nom_frecuencia'];
  }
}

if (isset($_POST['update'])) {
    $ID_Valor = $_GET['ID_Valor'];
    $Nom_Valor = $_POST['Nom_Valor'];
    $Nom_frecuencia = $_POST['Nom_frecuencia'];
    $query = "UPDATE frecuencia set Nom_Valor = '$Nom_Valor', Nom_frecuencia = '$Nom_frecuencia' WHERE ID_Valor = $ID_Valor";
    mysqli_query($conexion, $query);
    header('Location: frecuencia.php');
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
        <form action="edit.php?ID_Valor=<?php echo $_GET['ID_Valor']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Valor</label>
                <input type="text" class="form-control" name="Nom_Valor" value="<?php echo $Nom_Valor; ?>" placeholder="Actualizar Valor">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom_frecuencia</label>
                <input type="text" class="form-control" name="Nom_frecuencia" value="<?php echo $Nom_frecuencia; ?>" placeholder="Actualizar Nombre">
            </div>
            <a type="submite" class="btn btn-danger" href="frecuencia.php">Back</a>
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