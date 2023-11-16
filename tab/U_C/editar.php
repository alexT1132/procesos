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
$Nombre = '';
$Apellido = '';
$ID_Unidad_Negocio = '';
$Nom_Unidad_Negocio = '';
$Email = '';
$Area = '';
$ID_Actividad = '';
$Nom_Actividad = '';
$ID_Nuevo_Puesto = '';
$Nom_Nuevo_Puesto = '';
$ID_Procesos = '';
$Nom_Proceso = '';
$ID_Direcciones = '';
$Nom_Direcciones = '';
$ID_Subproceso = '';
$Nom_Subproceso = '';
$ID_funcion = '';
$Nom_funcion = '';
$ID_Valor = '';
$Nom_Valor = '';
$Nom_frecuencia = '';


if  (isset($_GET['ID_empleado'])) {
  $ID_empleado = $_GET['ID_empleado'];
  $query = "SELECT * FROM usuario_cliente WHERE ID_empleado = $ID_empleado";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    $ID_Unidad_Negocio = $row['ID_Unidad_Negocio'];
    $Nom_Unidad_Negocio = $row['Nom_Unidad_Negocio'];
    $Email = $row['Email'];
    $Area = $row['Area'];
    $ID_Actividad = $row['ID_Actividad'];
    $Nom_Actividad = $row['Nom_Actividad'];
    $ID_Nuevo_Puesto = $row['ID_Nuevo_Puesto'];
    $Nom_Nuevo_Puesto = $row['Nom_Nuevo_Puesto'];
    $ID_Procesos = $row['ID_Procesos'];
    $Nom_Proceso = $row['Nom_Proceso'];
    $ID_Direcciones = $row['ID_Direcciones'];
    $Nom_Direcciones = $row['Nom_Direcciones'];
    $ID_Subproceso = $row['ID_Subproceso'];
    $Nom_Subproceso = $row['Nom_Subproceso'];
    $ID_funcion = $row['ID_funcion'];
    $Nom_funcion = $row['Nom_funcion'];
    $ID_Valor = $row['ID_Valor'];
    $Nom_Valor = $row['Nom_Valor'];
    $Nom_frecuencia = $row['Nom_frecuencia'];
  }
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
    <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="editar.php?ID_empleado=<?php echo $_GET['ID_empleado']; ?>" method="POST">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $Nombre; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $Apellido; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="ID_Unidad_Negocio">ID_Unidad_Negocio</label>
                <select class="form-select mb-3" aria-label="Default select example" id="ID_Unidad_Negocio" name="ID_Unidad_Negocio">
                    <option selected disabled>--Seleccione Unidad Negocio--</option>
                        <?php
                            $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Unidad_Negocio=".$row['ID_Unidad_Negocio'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['ID_Unidad_Negocio']."'>".$row1['Nom_Unidad_Negocio']."</option>";

                            $sql2 = "SELECT * FROM unidad_negocio";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['ID_unidad_negocio']."'>".$Fila['nom_unidad_negocio']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
                <label>Nom_Unidad_Negocio</label>
                <select class="form-select mb-3" aria-label="Default select example" name="Nom_Unidad_Negocio">
                    <option selected disabled>--Seleccione Actividad--</option>
                        <?php
                            $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Unidad_Negocio=".$row['ID_Unidad_Negocio'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['Nom_Unidad_Negocio']."'>".$row1['Nom_Unidad_Negocio']."</option>";

                            $sql2 = "SELECT * FROM unidad_negocio";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['nom_unidad_negocio']."'>".$Fila['nom_unidad_negocio']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" id="Email" value="<?php echo $Email; ?>" placeholder="Actualizar Nombre">
            </div>
            <div class="mb-3">
                <label for="Area" class="form-label">Area</label>
                <input type="text" class="form-control" name="Area" id="Area" value="<?php echo $Area; ?>" placeholder="Actualizar Nombre">
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
                <select class="form-select mb-3" aria-label="Default select example" name="Nom_Actividad">
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
                <label>ID_Nuevo_Puesto</label>
                <select class="form-select mb-3" aria-label="Default select example" name="ID_Nuevo_Puesto">
                    <option selected disabled>--Seleccione Puesto--</option>
                        <?php
                            $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Nuevo_Puesto=".$row['ID_Nuevo_Puesto'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected value='".$row1['ID_Nuevo_Puesto']."'>".$row1['Nom_Nuevo_Puesto']."</option>";

                            $sql2 = "SELECT * FROM nuevo_puesto";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['ID_Nuevo_Puesto']."'>".$Fila['Nuevo_Puesto']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
                <label>Nom_Nuevo_Puesto</label>
                <select class="form-select mb-3" aria-label="Default select example" name="Nom_Nuevo_Puesto">
                        <?php
                            $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Nuevo_Puesto=".$row['ID_Nuevo_Puesto'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected disabled value='".$row1['Nom_Nuevo_Puesto']."'>".$row1['Nom_Nuevo_Puesto']."</option>";

                            $sql2 = "SELECT * FROM nuevo_puesto";
                            $resultado2 = $conexion->query($sql2);

                            while ($Fila = $resultado2->fetch_array()) {
                                echo "<option value='".$Fila['Nuevo_Puesto']."'>".$Fila['Nuevo_Puesto']."</option>";
                            }
                        ?>   
                </select>
            </div>
            <div class="mb-3">
            <label>ID_Proceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Procesos">
            <option selected disabled>--Seleccione Proceso--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Procesos =".$row['ID_Procesos'];
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
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Procesos =".$row['ID_Procesos'];
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
            <label>ID_Direcciones</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Direcciones">
            <option selected disabled>--Seleccione Proceso--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Direcciones =".$row['ID_Direcciones'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['ID_Direcciones']."'>".$row1['Nom_Direcciones']."</option>";

                $sql2 = "SELECT * FROM direcciones";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ID_Direccion']."'>".$Fila['Nom_Direccion']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_Direcciones</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Direcciones">
            <option selected disabled>--Seleccione Nom_Direcciones--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Direcciones =".$row['ID_Direcciones'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_Direcciones']."'>".$row1['Nom_Direcciones']."</option>";

                $sql2 = "SELECT * FROM direcciones";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_Direccion']."'>".$Fila['Nom_Direccion']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>ID_subProceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Subproceso">
            <option selected disabled>--Seleccione subProceso--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Subproceso =".$row['ID_Subproceso'];
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
            <option selected disabled>--Seleccione Proceso--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_Subproceso =".$row['ID_Subproceso'];
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
            <div class="mb-3">
            <label>ID_funcion</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_funcion">
            <option selected disabled>--Seleccione funcion--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_funcion =".$row['ID_funcion'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['ID_funcion']."'>".$row1['Nom_funcion']."</option>";

                $sql2 = "SELECT * FROM funciones";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['ID_funcion']."'>".$Fila['Nom_funcion']."</option>";
                }
            ?>   
        </select>
            </div>
            <div class="mb-3">
            <label>Nom_funcion</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_funcion">
            <option selected disabled>--Seleccione Funcion--</option>
            <?php
                $sql1 = "SELECT * FROM usuario_cliente WHERE ID_funcion =".$row['ID_funcion'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['Nom_funcion']."'>".$row1['Nom_funcion']."</option>";

                $sql2 = "SELECT * FROM funciones";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Nom_funcion']."'>".$Fila['Nom_funcion']."</option>";
                }
            ?>   
        </select>
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
            <a type="submite" class="btn btn-danger" href="uc.php">Back</a>
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