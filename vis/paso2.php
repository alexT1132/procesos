
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
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 60px;">
            <!--Page 1-->
            <div id="page1" class="page" style="width: 30%;">
                <form action="">
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="Nombre" id="Nombre">
                </div>
                <div class="mb-3">
                          <label for="ID_Nuevo_Puesto" class="form-label">ID_Puesto</label>
                          <select class="form-select mb-3" name="ID_Nuevo_Puesto" id="ID_Nuevo_Puesto">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
                          <select class="form-select mb-3" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="ID_Direcciones" class="form-label">ID Direccion</label>
                          <select class="form-select mb-3" name="ID_Direcciones" id="ID_Direcciones">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Nombre Direccion</label>
                          <select class="form-select mb-3" name="Nom_Direcciones" id="Nom_Direcciones">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="guardar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Siguiente</button>
                        </div>
                    </div>

                    <!--Page 2-->
                    <div id="page2" class="page" style="width: 60%;">
                        <?php
                            // Realizar una consulta para obtener los datos de la tabla "nombre"
                            $querySubPros = "SELECT ID_subProcesos, nom_Subproceso FROM sub_proceso";
                            $resultSubPros = $conexion->query($querySubPros);

                            // Realizar una consulta para obtener los datos de la tabla "apellido"
                            $queryAct = "SELECT ID_Actividad, nom_actividad FROM detalle_actividad";
                            $resultAct = $conexion->query($queryAct);

                            // Combinar los resultados en una sola tabla
                            ?> 
                            <form action="" method="post">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Subprocesos</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Actividades</th>
                                    </tr>
                                </thead>
                            <?php    
                            while (($rowSubpros = $resultSubPros->fetch_assoc()) && ($rowAct = $resultAct->fetch_assoc())) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"> <?php echo $rowSubpros["ID_subProcesos"]; ?>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"> <?php echo $rowSubpros["nom_Subproceso"]; ?>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"> <?php echo $rowAct["ID_Actividad"]; ?>
                                        </td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault"> <?php echo $rowAct["nom_actividad"]; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                                }
                            ?>
                            </table>
                            <br>
                            <input type="submit" value="Siguiente">
                        </form>
                    </div>
        </div>
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>