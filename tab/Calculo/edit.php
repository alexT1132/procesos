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
$ID_Actividad = '';
$Descripcion = '';
$Tiempo = '';
$ID_Valor = '';
$Nom_Valor = '';
$Nom_frecuencia = '';

if  (isset($_GET['ID_Calculo'])) {
  $ID_Calculo = $_GET['ID_Calculo'];
  $query = "SELECT * FROM calculo WHERE ID_Calculo = $ID_Calculo";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $ID_Actividad = $row['ID_Actividad'];
    $nom_actividad = $row['nom_actividad'];
    $Tiempo = $row['Tiempo'];
    $ID_Valor = $row['ID_Valor'];
    $Nom_Valor = $row['Nom_Valor'];
    $Nom_frecuencia = $row['Nom_frecuencia'];
  }
}

if (isset($_POST['update'])) {
    $ID_Calculo = $_GET['ID_Calculo'];
    $ID_Actividad = $_POST['ID_Actividad'];
    $nom_actividad = $_POST['nom_actividad'];
    $Tiempo = $_POST['Tiempo'];
    $Frecuencia = $_POST['Frecuencia'];
    $ID_Valor = $_POST['ID_Valor'];
    $Nom_Valor = $_POST['Nom_Valor'];
    $Nom_frecuencia = $_POST['Nom_frecuencia'];
    $query = "UPDATE calculo set ID_Actividad = '$ID_Actividad', nom_actividad = '$nom_actividad', Tiempo = '$Tiempo', ID_Valor = '$ID_Valor', 
    Nom_Valor = '$Nom_Valor', Nom_frecuencia = '$Nom_frecuencia' WHERE ID_Calculo = $ID_Calculo";
    mysqli_query($conexion, $query);
    header('Location: calculo.php');
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
        <form action="edit.php?ID_Calculo=<?php echo $_GET['ID_Calculo']; ?>" method="POST">
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
                <label for="exampleInputEmail1" class="form-label">Tiempo</label>
                <input type="text" class="form-control" name="Tiempo" value="<?php echo $Tiempo; ?>" placeholder="Actualizar dato">
            </div>
            <div class="mb-3">
            <label>ID_Valor</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Valor">
            <option selected disabled>--Seleccione Temporalidad--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Valor =".$row['ID_Valor'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['ID_Valor']."'>".$row1['Nom_frecuencia']."</option>";

                $sql2 = "SELECT * FROM frecuencia";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ID_Valor']."'>".$Fila['Nom_frecuencia']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_Valor</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Valor">
            <option selected disabled>--Seleccione Temporalidad--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Valor =".$row['ID_Valor'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_Valor']."'>".$row1['Nom_frecuencia']."</option>";

                $sql2 = "SELECT * FROM frecuencia";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_Valor']."'>".$Fila['Nom_frecuencia']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_frecuencia</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_frecuencia">
            <option selected disabled>--Seleccione Frecuencia--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Valor =".$row['ID_Valor'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_frecuencia']."'>".$row1['Nom_frecuencia']."</option>";

                $sql2 = "SELECT * FROM frecuencia";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_frecuencia']."'>".$Fila['Nom_frecuencia']."</option>";
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