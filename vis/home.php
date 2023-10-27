<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ../error.php");
    die();
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
    <div class="container text-center">
        <div class="row">
            <div class="col-5">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre Subproceso</label>
                        <select class="form-select mb-3" name="nom_subproceso">
                        <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../config/conexion.php");
    
                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_Subproceso']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-7">
                <div class="card" style="width: 65rem;">
                    <div class="card-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Funciones</th>
                                    <th scope="col">Procesos</th>
                                    <th scope="col">Sub_procesos</th>
                                    <th scope="col">Actividades</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                    $query = "SELECT * FROM consultas";
                                    $result_task = mysqli_query($conexion, $query);

                                    while($row = mysqli_fetch_assoc($result_task)) { ?>
                                    <tr>
                                        <td><?php echo $row['ID']; ?></td>
                                        <td><?php echo $row['Nom_funcion']; ?></td>
                                        <td><?php echo $row['nom_Procesos']; ?></td>
                                        <td><?php echo $row['nom_subproceso']; ?></td>
                                        <td><?php echo $row['nom_Actividad']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>