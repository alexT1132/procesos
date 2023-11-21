<?php

include('../config/conexion.php');

session_start();

// Recuperar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

// Almacenar datos en la sesión
$_SESSION['input'] = $input;
$_SESSION['sistema'] = $sistema;
$_SESSION['rol'] = $rol;
$_SESSION['tiempo'] = $tiempo;
$_SESSION['val_Frec'] = $val_Frec;
$_SESSION['vol'] = $vol;
$_SESSION['t_h'] = $t_h;
$_SESSION['ftes'] = $ftes;
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
                            <h5>Cerrar Sesion</h5>
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
                    <div class="card-header">
                        <h2>Confirmación de datos</h2>
                    </div>
                    <div class="card-body">
                    <form action="valPaso5.php?ID_empleado=<?php echo $row['ID_empleado']?>" method="POST">
                    <?php
                        if (isset($_SESSION['input']) && isset($_SESSION['sistema']) && isset($_SESSION['rol']) && isset($_SESSION['tiempo']) 
                        && isset($_SESSION['val_Frec']) && isset($_SESSION['vol']) && isset($_SESSION['t_h']) && isset($_SESSION['ftes'])) { 
                    ?> 
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="input" class="form-label" style="margin-top: 3%;">Input:</label>
                                <input type="text" class="form-control" name="input" id="input" value="<?php echo $_SESSION['input']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="sistema" class="form-label" style="margin-top: 3%;">Sistema:</label>
                                <input type="text" class="form-control" name="sistema" id="sistema" value="<?php echo $_SESSION['sistema']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="rol" class="form-label" style="margin-top: 3%;">Rol:</label>
                                <input type="text" class="form-control" name="rol" id="rol" value="<?php echo $_SESSION['rol']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="tiempo" class="form-label" style="margin-top: 3%;">Tiempo:</label>
                                <input type="text" class="form-control" name="tiempo" id="tiempo" value="<?php echo $_SESSION['tiempo']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="val_Frec" class="form-label" style="margin-top: 3%;">Frecuencia:</label>
                                <input type="text" class="form-control" name="val_Frec" id="val_Frec" value="<?php echo $_SESSION['val_Frec']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="vol" class="form-label">Volumen:</label>
                                <input type="text" class="form-control" name="vol" id="vol" value="<?php echo $_SESSION['vol']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="t_h" class="form-label">Total de Horas:</label>
                                <input type="text" class="form-control" name="t_h" id="t_h" value="<?php echo $_SESSION['t_h']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="ftes" class="form-label">FTE'S:</label>
                                <input type="text" class="form-control" name="ftes" id="ftes" value="<?php echo $_SESSION['ftes']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <?php
                          }
                        ?>
                        <br>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success btn-block" style="width: 40%; margin-right: 12px;">
                                Confirmar
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