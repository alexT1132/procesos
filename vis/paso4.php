<?php

    session_start();

include("../config/conexion.php");
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

  }

  if (isset($_POST['update'])) {
    $ID_empleado = $_GET['ID_empleado'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $ID_Unidad_Negocio = $_POST['ID_Unidad_Negocio'];
    $Nom_Unidad_Negocio = $_POST['Nom_Unidad_Negocio'];
    $Email = $_POST['Email'];
    $Area = $_POST['Area'];
    $ID_Actividad = $_POST['ID_Actividad'];
    $Nom_Actividad = $_POST['Nom_Actividad'];
    $ID_Nuevo_Puesto = $_POST['ID_Nuevo_Puesto'];
    $Nom_Nuevo_Puesto = $_POST['Nom_Nuevo_Puesto'];
    $ID_Procesos = $_POST['ID_Procesos'];
    $Nom_Proceso = $_POST['Nom_Proceso'];
    $ID_Direcciones = $_POST['ID_Direcciones'];
    $Nom_Direcciones = $_POST['Nom_Direcciones'];
    $ID_Subproceso = $_POST['ID_Subproceso'];
    $Nom_Subproceso = $_POST['Nom_Subproceso'];
    $ID_funcion = $_POST['ID_funcion'];
    $Nom_funcion = $_POST['Nom_funcion'];
    $ID_Valor = $_POST['ID_Valor'];
    $input = $_POST['input'];
    $sistema = $_POST['sistema'];
    $rol = $_POST['rol'];
    $tiempo = $_POST['tiempo'];
    $val_Frec = $_POST['val_Frec'];
    $vol = $_POST['vol'];


    if ($val_Frec == '4') {
        $t_h = ($tiempo * $vol * $val_Frec);
    }else
    if ($val_Frec == '1') {
        $t_h = ($tiempo * $vol * $val_Frec);
    }else
    if ($val_Frec == '12') {
        $t_h = ($tiempo * $vol) / $val_Frec;
    }
    
    if ($t_h) {
        $ftes = $t_h / 160;
    }

    $query = "UPDATE usuario_cliente set Nombre = '$Nombre', Apellido = '$Apellido', ID_Unidad_Negocio = '$ID_Unidad_Negocio', Nom_Unidad_Negocio = '$Nom_Unidad_Negocio', Email = '$Email', Area = '$Area', ID_Actividad = '$ID_Actividad', Nom_Actividad = '$Nom_Actividad', ID_Nuevo_Puesto = '$ID_Nuevo_Puesto', Nom_Nuevo_Puesto = '$Nom_Nuevo_Puesto', ID_Procesos = '$ID_Procesos', Nom_Proceso = '$Nom_Proceso', ID_Direcciones = '$ID_Direcciones', Nom_Direcciones = '$Nom_Direcciones', ID_Subproceso = '$ID_Subproceso', Nom_Subproceso = '$Nom_Subproceso', ID_funcion = '$ID_funcion', Nom_funcion = '$Nom_funcion', ID_Valor = '$ID_Valor', 
    $input = 'input', $sistema = 'sistema', $rol = 'rol', tiempo = '$tiempo', val_Frec = '$val_Frec', vol = '$vol', t_h = '$t_h', ftes = '$ftes' WHERE ID_empleado = $ID_empleado";
    mysqli_query($conexion, $query);
    
    if (!$query) {
        echo 'Error al guardar los datos';
    }

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Piasa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo_3.png">
    <link rel="stylesheet" href="../css/users.css">
</head>
<body>
    <section class="navbar-section">
        <div class="container-navbar">
            <nav class="navbar">
                <div class="logo">
                    <img src="../img/logo.png">
                </div>
                <div class="button-navbar">
                    <form class="d-flex" action="../destroy.php">
                        <button class="btn" type="submit">
                            <h5>Cerrar Session</h5>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </section>
    <section class="body-container">
        <div class="container" style="margin-top: 5%;">
            <div class="row justify-content-center">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                    <form action="valPaso4.php" method="POST">
                        <div class="1">
                    <?php
                    if (isset($_SESSION['Nombre']) && isset($_SESSION['Apellido']) && isset($_SESSION['ID_Unidad_Negocio']) && isset($_SESSION['Nom_Unidad_Negocio']) 
                    && isset($_SESSION['Email']) && isset($_SESSION['Area']) && isset($_SESSION['ID_Direcciones']) && isset($_SESSION['Nom_Direcciones']) 
                    && isset($_SESSION['ID_Nuevo_Puesto']) && isset($_SESSION['Nom_Nuevo_Puesto']) && isset($_SESSION['ID_funcion']) && isset($_SESSION['Nom_funcion'])) { 
                ?>
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $_SESSION['Nombre']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $_SESSION['Apellido']; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Unidad_Negocio" class="form-label">ID Unidad_Negocio</label>
                          <input type="text" class="form-control" name="ID_Unidad_Negocio" id="ID_Unidad_Negocio" value="<?php echo $_SESSION['ID_Unidad_Negocio']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Unidad_Negocio" class="form-label">Unidad de Negocio</label>
                          <input type="text" class="form-control" name="Nom_Unidad_Negocio" id="Nom_Unidad_Negocio" value="<?php echo $_SESSION['Nom_Unidad_Negocio']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['Email']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Area" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area" id="Area" value="<?php echo $_SESSION['Area']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                <label>ID_Actividad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="ID_Actividad" disabled>
                        <?php
                            $sql1 = "SELECT * FROM detalle_actividad WHERE ID_Actividad=".$row['ID_Actividad'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected disabled value='".$row1['ID_Actividad']."'>".$row1['nom_actividad']."</option>";

                        ?>   
                </select>
            </div>
            <div class="mb-3">
                <label>nom_actividad</label>
                <select class="form-select mb-3" aria-label="Default select example" name="Nom_Actividad" disabled>
                        <?php
                            $sql1 = "SELECT * FROM detalle_actividad WHERE ID_Actividad=".$row['ID_Actividad'];
                            $resultado1 = $conexion->query($sql1);

                            $row1 = $resultado1->fetch_assoc();

                            echo "<option selected disabled value='".$row1['nom_actividad']."'>".$row1['nom_actividad']."</option>";
                        ?>   
                </select>
            </div>
            <div class="mb-3" style="display: none;">
              <label for="ID_Nuevo_Puesto" class="form-label">Puesto</label>
              <input type="text" class="form-control" name="ID_Nuevo_Puesto" id="ID_Nuevo_Puesto" value="<?php echo $_SESSION['ID_Nuevo_Puesto']; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
              <input type="text" class="form-control" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto" value="<?php echo $_SESSION['Nom_Nuevo_Puesto']; ?>" disabled>
            </div>
            <div class="mb-3">
            <label>ID_Proceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Procesos" disabled>
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
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Proceso" disabled>
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
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Direcciones" class="form-label">ID Direccion</label>
                          <input type="text" class="form-control" name="ID_Direcciones" id="ID_Direcciones" value="<?php echo $_SESSION['ID_Direcciones']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Direccion</label>
                          <input type="text" class="form-control" name="Nom_Direcciones" id="Nom_Direcciones" value="<?php echo $_SESSION['Nom_Direcciones']; ?>" disabled>
                        </div>
                        <div class="mb-3">
            <label>ID_subProceso</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Subproceso" disabled>
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
        <select class="form-select mb-3" aria-label="Default select example" name="Nom_Subproceso" disabled>
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
                        <div class="mb-3" style="display: none;">
                          <label for="ID_funcion" class="form-label">ID Funcion</label>
                          <input type="text" class="form-control" name="ID_funcion" id="ID_funcion" value="<?php echo $_SESSION['ID_funcion']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_funcion" class="form-label">Funcion</label>
                          <input type="text" class="form-control" name="Nom_funcion" id="Nom_funcion" value="<?php echo $_SESSION['Nom_funcion']; ?>" disabled>
                        </div>
                        <div class="mb-3">
            <label>ID_Valor</label>
        <select class="form-select mb-3" aria-label="Default select example" name="ID_Valor" disabled>
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
                        <?php
                          }
                        ?>
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="input" class="form-label">Input</label>
                                <input type="text" class="form-control" name="input" id="input" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                                <label for="sistema" class="form-label">Sistema</label>
                                <input type="text" class="form-control" name="sistema" id="sistema" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                                <label for="rol" class="form-label">Rol</label>
                                <select class="form-select mb-3" name="rol" id="rol" style="width: 300px;">
                                    <option selected disabled value="">Selecciona un rol</option>
                                    <option>Ejecutar</option>
                                    <option>Supervisar</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="tiempo" class="form-label">Tiempo</label>
                                <input type="text" class="form-control" name="tiempo" id="tiempo" style="width: 300px;">
                            </div>
                            <div class="md-3" style="align-items: center; width: 100%">
                          <label for="val_Frec" class="form-label">Frecuencia</label>
                          <div class="d-flex" style="gap: 2%;">
                              <select class="form-select mb-3" name="val_Frec" id="val_Frec">
                                <option value="4">Semanal</option>
                                <option value="1">Mensual</option>
                                <option value="12">Anual</option>
                              </select>
                          </div>
                        </div>
                            <div class="mb-3">
                                <label for="vol" class="form-label">volumen</label>
                                <input type="text" class="form-control" id="vol" name="vol" style="width: 300px;">
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success btn-block" style="width: 20%; margin-right: 12px;">
                                Registrar
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>