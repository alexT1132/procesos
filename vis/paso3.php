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
    <br>
    <section class="body-section">
        <div class="container-body">
            <div class="card" style="margin-left: 20%; margin-right: 20%;">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="input" class="form-label">Input</label>
                                <input type="text" class="form-control" id="input" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                                <label for="sistema" class="form-label">Sistema</label>
                                <input type="text" class="form-control" id="sistema" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                                <label for="sistema" class="form-label">Rol</label>
                                <select class="form-select mb-3" name="ID_funcion" id="ID_funcion" style="width: 300px;">
                                    <option selected disabled value="">Selecciona un rol</option>
                                    <option>Ejecutar</option>
                                    <option>ejecutar</option>
                                </select>                            
                            </div>
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="tiempo1" class="form-label">Tiempo</label>
                                <input type="time" class="form-control" name="tiempo1" id="tiempo1" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                          <label for="dato1" class="form-label">Frecuencia</label>
                          <select class="form-select mb-3" name="dato1" id="dato1" style="width: 300px;">
                            <option selected disabled value="">Selecciona una frecuencia</option>
                            <option>Semanal</option>
                            <option>Mensual</option>
                            <option>Anual</option>
                          </select>
                        </div>
                            <div class="mb-3">
                                <label for="vol1" class="form-label">volumen</label>
                                <input type="number" class="form-control" id="vol1" name="vol1" style="width: 300px;">
                            </div>
                        </div>
                        <div class="d-flex" style="gap: 40px;">
                            <div class="mb-3">
                                <label for="sistema" class="form-label">Conversion en horas</label>
                                <input type="number" class="form-control" id="sistema" style="width: 300px;">
                            </div>
                            <div class="mb-3">
                                <label for="sistema" class="form-label">FTE's</label>
                                <input type="text" class="form-control" id="sistema" style="width: 300px;">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>