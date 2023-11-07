
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
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 100px;">
            <!--Page 1-->
            <div id="page1" class="page" style="width: 30%;">
            <form action="paso2.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre usuario/empleado">
                        </div>
                        <div class="mb-3" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" placeholder="Apellido usuario/empleado">
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="exampleInputEmail1" class="form-label">ID Unidad_Negocio</label>
                          <select class="form-select mb-3" name="ID_Unidad_Negocio">
                            <option selected disabled>Selecciona una opción</option>
                            <?php

                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                $spc = "";
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="exampleInputEmail1" class="form-label">Nombre Unidad_Negocio</label>
                          <select class="form-select mb-3" name="Nom_Unidad_Negocio">
                            <option selected disabled>Selecciona una opción</option>
                            <?php

                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email">
                        </div>
                        <div class="mb-3" style="display: none;">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID_Puesto</label>
                          <select class="form-select mb-3" name="ID_Nuevo_Puesto">
                            <option selected disabled>Selecciona una opción</option>
                            <?php

                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                $spc = "";
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Puesto</label>
                          <select class="form-select mb-3" name="Nom_Nuevo_Puesto">
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
                          <label for="exampleInputEmail1" class="form-label">ID Direccion</label>
                          <select class="form-select mb-3" name="ID_Direcciones">
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
                          <label for="exampleInputEmail1" class="form-label">Nombre Direccion</label>
                          <select class="form-select mb-3" name="Nom_Direcciones">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                        
                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>    
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID_Proceso</label>
                          <select class="form-select mb-3" name="ID_Procesos">
                            <option selected disabled>Selecciona una opción</option>
                            <?php

                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Proceso</label>
                          <select class="form-select mb-3" name="Nom_Proceso">
                            <option selected disabled>Selecciona una opción</option>
                            <?php

                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-success btn-block" value="Siguiente" style="width: 120px; margin-right: 12px;">
                        </div>
                    </form>
                    </div>

                    <!--Page 2-->
                    <div id="page2" class="page" style="width: 60%; display: none;">
                        <?php
                            // Realizar una consulta para obtener los datos de la tabla "nombre"
                            $querySubPros = "SELECT ID_subProcesos, nom_Subproceso FROM sub_proceso";
                            $resultSubPros = $conexion->query($querySubPros);

                            // Realizar una consulta para obtener los datos de la tabla "apellido"
                            $queryAct = "SELECT ID_Actividad, nom_actividad FROM detalle_actividad";
                            $resultAct = $conexion->query($queryAct);

                            // Combinar los resultados en una sola tabla
                            ?> 
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
                    </div>
        </div>
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>