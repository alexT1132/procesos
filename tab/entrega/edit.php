<?php
include("../../config/conexion.php");
$nom_entrega = '';


if  (isset($_GET['ID_entrega'])) {
  $ID_entrega = $_GET['ID_entrega'];
  $query = "SELECT * FROM entrega WHERE ID_entrega = $ID_entrega";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom_entrega = $row['nom_entrega'];
  }
}

if (isset($_POST['update'])) {
    $ID_entrega = $_GET['ID_entrega'];
    $nom_entrega = $_POST['nom_entrega'];
    $query = "UPDATE entrega set nom_entrega = '$nom_entrega' WHERE ID_entrega = $ID_entrega";
    mysqli_query($conexion, $query);
    header('Location: entrega.php');
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
        <form action="edit.php?ID_entrega=<?php echo $_GET['ID_entrega']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre entrega</label>
                <input type="text" class="form-control" name="nom_entrega" value="<?php echo $nom_entrega; ?>" placeholder="Actualizar Nombre">
            </div>
            <a type="submite" class="btn btn-danger" href="entrega.php">Back</a>
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