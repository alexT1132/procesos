
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
    <div class="container text-center">
        <div class="row">
            <div class="col-5">
                <form method="POST" action="paso2.php" id="datos">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Puesto</label>
                            <select class="form-select mb-3" name="" id="campo2">
                                <option selected disabled>Selecciona una opción</option>
                                <?php
                                    include ("../config/conexion.php");
    
                                    $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                    while ($resultado = $sql->fetch_assoc()) {
                                    echo "<option value='".$resultado['Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Direccion</label>
                              <select class="form-select mb-3" name="Direcciones" id="campo3">
                                <option selected disabled>Selecciona una opción</option>
                                <?php
                                    include ("../config/conexion.php");
    
                                    $sql = $conexion->query("SELECT * FROM direcciones");
                                    while ($resultado = $sql->fetch_assoc()) {
                                    echo "<option value='".$resultado['Nom_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                        <label class="form-label">Nombre</label>
                        <input type="text" id="campo1" class="form-control" name="nombre">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name="enviar" id="enviar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;" disabled>Mostrar</button>
                    </div>
                </form>
                <form class="d-flex" role="search" style="margin-top: 35%;">
                    <select class="form-select mb-3" name="nom_Procesos" disabled>
                        <option selected disabled>Selecciona el proceso</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                    </select>
                    <button class="btn btn-outline-success" id="buscador" type="submit" disabled style="height: 37px;">Search</button>
                </form>
            </div>
            <div class="col-7">
                <br>
                <div class="outer-wrapper" style="margin-left: 50px; width: 1020px">
                    <div class="table-wrapper" style="max-height: 680px; overflow-y: scroll;">
                        <table class="table" id="tabla" style="width: 1000px; border: 1px solid black; display: none;">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 250px;">Subprocesos</th>
                                    <th scope="col" style="width: 250px;">Actividades</th>
                                    <th scope="col">Validacion</th>
                                    <th scope="col">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM consultas";
                                    $result_task = mysqli_query($conexion, $query);

                                    while($row = mysqli_fetch_assoc($result_task)) { ?>
                                    <tr>
                                        <td><?php echo $row['nom_subproceso']; ?></td>
                                        <td><?php echo $row['nom_Actividad']; ?></td>
                                        <td>
                                            <input type="checkbox" class="form-check-input">
                                        </td>
                                        <td>
                                            <img src="../img/x-regular-48.png">
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>   
            </div>
        </div>
    </div>
        
    
    <script src="../js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>