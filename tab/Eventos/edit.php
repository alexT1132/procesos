<?php
include("../../config/conexion.php");
$Nom_Temporalidad = '';

if  (isset($_GET['ID_Eventos'])) {
  $ID_Eventos = $_GET['ID_Eventos'];
  $query = "SELECT * FROM eventos WHERE ID_Eventos = $ID_Eventos";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Eventual = $row['Eventual'];
    $Por_Eventos = $row['Por_Eventos'];
    $Continuos = $row['Continuos'];
    $Mensual = $row['Mensual'];
  }
}

if (isset($_POST['update'])) {
    $ID_Eventos = $_GET['ID_Eventos'];
    $Eventual = $_POST['Eventual'];
    $Por_Eventos = $_POST['Por_Eventos'];
    $Continuos = $_POST['Continuos'];
    $Mensual = $_POST['Mensual'];
    $query = "UPDATE eventos set Eventual = '$Eventual', Por_Eventos = '$Por_Eventos', Continuos = '$Continuos', Mensual = '$Mensual' WHERE ID_Eventos = $ID_Eventos";
    mysqli_query($conexion, $query);
    header('Location: eventos.php');
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
        <form action="edit.php?ID_Eventos=<?php echo $_GET['ID_Eventos']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Eventual</label>
                <input type="text" class="form-control" name="Eventual" value="<?php echo $Eventual; ?>" placeholder="Actualizar Eventual" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Por Eventos</label>
                <input type="text" class="form-control" name="Por_Eventos" value="<?php echo $Por_Eventos; ?>" placeholder="Actualizar Informacion" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Continuos</label>
                <input type="text" class="form-control" name="Continuos" value="<?php echo $Continuos; ?>" placeholder="Actualizar Informacion" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mensual</label>
                <input type="text" class="form-control" name="Mensual" value="<?php echo $Mensual; ?>" placeholder="Actualizar Informacion" >
            </div>
            <a type="submite" class="btn btn-danger" href="eventos.php">Back</a>
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