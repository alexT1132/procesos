<?php include('../config/conexion.php'); ?>

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
        <div class="container" style="margin-top: 8%;">
            <div class="row justify-content-center">
                <div class="card" style="width: auto;">
                    <div class="card-body">
                    <form action="valPaso4.php" method="post">
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
                            <div class="md-3" style="align-items: center;">
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
                            <div class="mb-3">
                                <label for="vol" class="form-label">FTE'S</label>
                                <input type="text" class="form-control" id="fte's" name="fte's" style="width: 300px;">
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