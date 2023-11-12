
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
    <section class="body-section">
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 100px;">
            <!--Page 1-->
          <div id="page1" class="page" style="width: 30%;">
            <form action="paso2.php" method="POST" >
              <div class="card">
                <div class="card-body">
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido" required>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Unidad_Negocio" class="form-label">ID Unidad_Negocio</label>
                          <select class="form-select mb-3" name="ID_Unidad_Negocio" id="ID_Unidad_Negocio">
                            <?php
                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Unidad_Negocio" class="form-label">Unidad de Negocio</label>
                          <select class="form-select mb-3" name="Nom_Unidad_Negocio" id="Nom_Unidad_Negocio" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="Area" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area" id="Area" required>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Direcciones" class="form-label">ID Direccion</label>
                          <select class="form-select mb-3" name="ID_Direcciones" id="ID_Direcciones">
                            <?php
                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Direccion</label>
                          <select class="form-select mb-3" name="Nom_Direcciones" id="Nom_Direcciones" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Nuevo_Puesto" class="form-label">ID_Nuevo_Puesto</label>
                          <select class="form-select mb-3" name="ID_Nuevo_Puesto" id="ID_Nuevo_Puesto">
                            <?php
                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="opcion" class="form-label">Puesto</label>
                          <select class="form-select mb-3" name="Nom_Nuevo_Puesto" id="opcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_funcion" class="form-label">ID Funcion</label>
                          <select class="form-select mb-3" name="ID_funcion" id="ID_funcion">
                            <?php
                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="opcion" class="form-label">Funcion</label>
                          <select class="form-select mb-3" name="Nom_funcion" id="opcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Procesos" class="form-label">ID Proceso</label>
                          <select class="form-select mb-3" name="ID_Procesos" id="ID_Procesos">
                            <?php
                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="opcion" class="form-label">Proceso</label>
                          <select class="form-select mb-3" name="Nom_Proceso" id="opcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Subproceso" class="form-label">ID Subproceso</label>
                          <select class="form-select mb-3" name="ID_Subproceso" id="ID_Subproceso">
                            <?php
                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_subProcesos']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="opcion" class="form-label">Subproceso</label>
                          <select class="form-select mb-3" name="Nom_Subproceso" id="opcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_Subproceso']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Actividad" class="form-label">ID Actividad</label>
                          <select class="form-select mb-3" name="ID_Actividad" id="ID_Actividad">
                            <?php
                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="opcion" class="form-label">Actividad</label>
                          <select class="form-select mb-3" name="Nom_Actividad" id="opcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Valor" class="form-label">ID Valor</label>
                          <select class="form-select mb-3" name="ID_Valor" id="ID_Valor">
                            <?php
                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Valor']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="Nom_Valor" class="form-label">Nombre Valor</label>
                          <select class="form-select mb-3" name="Nom_Valor" id="Nom_Valor">
                            <?php
                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Valor']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="Nom_frecuencia" class="form-label">Nombre Frecuencia</label>
                          <select class="form-select mb-3" name="Nom_frecuencia" id="Nom_frecuencia">
                            <?php
                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_frecuencia']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>     
                        <div class="row justify-content-center">
                            <button type="submit" name="guardar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Siguiente</button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>

            <div id="page2" class="page" style="width: 60%; margin-left: 5%; display: none;">
              <form action="paso1.php" method="post">
              <div class="container text-center">
                <div class="row">
                    <div class="col d-flex">
                      <input class="form-control me-2" type="search" name="busquedaProceso" id="busquedaProceso" placeholder="Buscar Proceso" aria-label="Search" style="width: 40%;">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </div>
                  </div>
                </div>
              </form>

              <?php

                $busquedaProceso = $_POST['busquedaProceso'] ?? '';

                // Consulta SQL
                $sql = "SELECT * FROM consultas WHERE 
                        nom_Procesos LIKE '%$busquedaProceso%'";

                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                   ?>
                   <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Subprocesos</th>
                          <th scope="col">Actividades</th>
                          <th scope="col">Validacion</th>
                          <th scope="col">Estado</th>
                        </tr>
                      </thead>
                    <?php
                    while ($fila = $result->fetch_assoc()) {
                    ?>
                     <tbody>
                      <tr>
                        <td style="width: 280px;"><?php echo $fila['nom_subproceso']; ?></td>
                        <td style="width: 280px;"><?php echo $fila['nom_Actividad']; ?></td>
                        <td>
                          <a href="paso3.php?ID=<?php echo $fila['ID']?>" class="btn btn-warning">
                            Capturar
                          </a>
                        </td>
                      </tr>
                    </tbody>
                    <?php 
                    }
                    ?>
                    </table>
                    <?php
                } else {
                    echo "No se encontraron resultados.";
                }
                ?>

            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>