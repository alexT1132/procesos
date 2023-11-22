<?php 
  session_start();

  include('../config/conexion.php'); 

  if(isset($_SESSION['formulario2'])) {
    $datos2 = $_SESSION['formulario2'];
  } else {
    echo 'Datos no encontrados';
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
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="input" class="form-label" style="margin-top: 3%;">Input:</label>
                                <input type="text" class="form-control" name="input" id="input" value="<?php echo $datos2['input']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="sistema" class="form-label" style="margin-top: 3%;">Sistema:</label>
                                <input type="text" class="form-control" name="sistema" id="sistema" value="<?php echo $datos2['sistema']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="rol" class="form-label" style="margin-top: 3%;">Rol:</label>
                                <input type="text" class="form-control" name="rol" id="rol" value="<?php echo $datos2['rol']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="tiempo" class="form-label" style="margin-top: 3%;">Tiempo:</label>
                                <input type="text" class="form-control" name="tiempo" id="tiempo" value="<?php echo $datos2['tiempo']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;">
                                <label for="val_Frec" class="form-label" style="margin-top: 3%;">Frecuencia:</label>
                                <input type="text" class="form-control" name="val_Frec" id="val_Frec" value="<?php echo $datos2['val_Frec']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="vol" class="form-label">Volumen:</label>
                                <input type="text" class="form-control" name="vol" id="vol" value="<?php echo $datos2['vol']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="t_h" class="form-label">Total de Horas:</label>
                                <input type="text" class="form-control" name="t_h" id="t_h" value="<?php echo $datos2['t_h']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                            <div class="mb-3 d-flex" style="gap: 5%;" style="margin-top: 3%;">
                                <label for="ftes" class="form-label">FTE'S:</label>
                                <input type="text" class="form-control" name="ftes" id="ftes" value="<?php echo $datos2['ftes']; ?>" disabled style="width: 100%; border: none; background: none;">
                            </div>
                        <br>
                        <div class="row justify-content-center">
                            <a href="validacion.php" class="btn btn-success btn-block" style="width: 40%; margin-right: 12px;">
                                Confirmar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>