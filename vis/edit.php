<?php 
 session_start();
 include('../config/conexion.php');

 $procesos = '';
 $subprocesos = '';
 $actividades = '';
 $input = '';
 $sistema = '';
 $rol = '';
 $tiempo = '';
 $val_Frec = '';
 $vol = '';


if  (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $query = "SELECT * FROM consultas WHERE ID = $ID";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $procesos = $row['procesos'];
    $subprocesos = $row['subprocesos'];
    $actividades = $row['actividades'];
    $input = $row['input'];
    $sistema = $row['sistema'];
    $rol = $row['rol'];
    $tiempo = $row['tiempo'];
    $val_Frec = $row['val_Frec'];
    $vol = $row['vol'];
  }
}


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos del formulario
    $ID = $_POST['ID'];
    $Nom_Proceso = $_POST['Nom_Proceso'];
    $Nom_Subproceso = $_POST['Nom_Subproceso'];
    $Nom_Actividad = $_POST['Nom_Actividad'];
    $input = $_POST['input'];
    $sistema = $_POST['sistema'];
    $rol = $_POST['rol'];
    $tiempo = $_POST['tiempo'];
    $val_Frec = $_POST['val_Frec'];
    $vol = $_POST['vol'];

    if ($val_Frec == '4') {
        $t_h = ($tiempo * $vol * $val_Frec);
        $t_h = round($t_h, 4);
    }else
    if ($val_Frec == '1') {
        $t_h = ($tiempo * $vol * $val_Frec);
        $t_h = round($t_h, 4);
    }else
    if ($val_Frec == '12') {
        $t_h = ($tiempo * $vol) / $val_Frec;
        $t_h = round($t_h, 4);
    }
    

    if ($t_h) {
        $ftes = $t_h / 160;
        $ftes = round($ftes, 4);

    }


    // Guarda los datos en la sesión
    $_SESSION['Editar'] = array(
        'ID' => $ID,
        'Nom_Proceso' => $Nom_Proceso,
        'Nom_Subproceso' => $Nom_Subproceso,
        'Nom_Actividad' => $Nom_Actividad,
        'estado' => $estado,
        'input' => $input,
        'sistema' => $sistema,
        'rol' => $rol,
        'tiempo' => $tiempo,
        'val_Frec' => $val_Frec,
        'vol' => $vol,
        't_h' => $t_h,
        'ftes' => $ftes,
    );
 
    header('Location: editVal.php');
    exit;
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
                            <h5>Finalizar encuesta</h5>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </section>
    <section class="body-container">
        <div class="container" style="margin-top: 5%;">
            <div class="row justify-content-center">
                <div class="title text-center">
                    <h3><b><?php echo $row['subprocesos']; ?></b></h3>
                    <br>
                    <h4><?php echo $row['actividades']; ?></h4>
                </div>
                <br><br>
                <div class="card" style="width: auto;">
                    <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="hidden" name="ID" value="<?php echo $_GET['ID']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="Nom_Proceso" value="<?php echo $row['procesos']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="Nom_Subproceso" value="<?php echo $row['subprocesos']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="Nom_Actividad" value="<?php echo $row['actividades']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="estado" value="1">
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="input" class="form-label">Input</label>
                                <input type="text" class="form-control" name="input" id="input" value="<?php echo $row['input']; ?>" style="width: 100%;">
                            </div>
                            <div class="mb-3">
                                <label for="sistema" class="form-label">Sistema</label>
                                <input type="text" class="form-control" name="sistema" id="sistema" value="<?php echo $row['sistema']; ?>" style="width: 100%;">
                            </div>
                            <div class="mb-3" style="width: 30%;">
                                <label for="rol" class="form-label">Rol</label>
                                <select class="form-select mb-3" name="rol" id="rol" style="width: 100%;">
                                    <option selected value="<?php echo $row['rol']; ?>"><?php echo $row['rol']; ?></option>
                                    <option>Ejecutar</option>
                                    <option>Supervisar</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="tiempo" class="form-label">Tiempo</label>
                                <input type="text" class="form-control" name="tiempo" id="tiempo" value="<?php echo $row['tiempo']; ?>" style="width: 100%;">
                            </div>
                            <div class="md-3" style="align-items: center; width: 30%">
                          <label for="val_Frec" class="form-label">Frecuencia</label>
                          <div class="d-flex" style="gap: 2%;">
                              <select class="form-select mb-3" name="val_Frec" id="val_Frec" required>
                              <option selected value="<?php echo $row['val_Frec']; ?>">
                              <?php if ($row['val_Frec'] == 4) {
                                echo 'Semanal';
                              } else
                              if ($row['val_Frec'] == 1) {
                                echo 'Mensual';
                              } else
                              if ($row['val_Frec'] == 12) {
                                echo 'Anual';
                              } ?></option>
                                <option value="4">Semanal</option>
                                <option value="1">Mensual</option>
                                <option value="12">Anual</option>
                              </select>
                          </div>
                        </div>
                            <div class="mb-3">
                                <label for="vol" class="form-label">volumen</label>
                                <input type="text" class="form-control" id="vol" name="vol" value="<?php echo $row['vol']; ?>" style="width: 100%;">
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-success btn-block" style="width: 30%; margin-right: 12px;" value="Guardar cambios">
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