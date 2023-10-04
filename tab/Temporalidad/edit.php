<?php
include("../../config/conexion.php");
$Nom_Temporalidad = '';

if  (isset($_GET['ID_Temporalidad'])) {
  $ID_Temporalidad = $_GET['ID_Temporalidad'];
  $query = "SELECT * FROM temporalidad WHERE ID_Temporalidad = $ID_Temporalidad";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nom_Temporalidad = $row['Nom_Temporalidad'];
  }
}

if (isset($_POST['update'])) {
    $ID_Temporalidad = $_GET['ID_Temporalidad'];
    $Nom_Temporalidad = $_POST['Nom_Temporalidad'];
    $query = "UPDATE temporalidad set Nom_Temporalidad = '$Nom_Temporalidad' WHERE ID_Temporalidad = $ID_Temporalidad";
    mysqli_query($conexion, $query);
    header('Location: tem.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="edit.php?ID_Temporalidad=<?php echo $_GET['ID_Temporalidad']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom_Temporalidad</label>
                <input type="text" class="form-control" name="Nom_Temporalidad" value="<?php echo $Nom_Temporalidad; ?>" placeholder="Actualizar Nombre">
            </div>
            <a type="submite" class="btn btn-danger" href="tem.php">Back</a>
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