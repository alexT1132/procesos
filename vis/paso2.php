<?php

    session_start();

    include('../config/conexion.php');

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
    <section class="body-section">
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 3%; margin-right: 3%;">
            <!--Page 1-->
          <div id="page1" class="page" style="width: 30%;">
            <form action="">
              <div class="card">
                <div class="card-body">

                <?php
                    if (isset($_SESSION['Nombre']) && isset($_SESSION['Apellido']) && isset($_SESSION['ID_Unidad_Negocio']) && isset($_SESSION['Nom_Unidad_Negocio']) 
                    && isset($_SESSION['Email']) && isset($_SESSION['Area']) && isset($_SESSION['ID_Direcciones']) && isset($_SESSION['Nom_Direcciones']) 
                    && isset($_SESSION['ID_Nuevo_Puesto']) && isset($_SESSION['Nom_Nuevo_Puesto']) && isset($_SESSION['ID_funcion']) && isset($_SESSION['Nom_funcion'])) { 
                ?>
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $_SESSION['Nombre']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $_SESSION['Apellido']; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Unidad_Negocio" class="form-label">ID Unidad_Negocio</label>
                          <input type="text" class="form-control" name="ID_Unidad_Negocio" id="ID_Unidad_Negocio" value="<?php echo $_SESSION['ID_Unidad_Negocio']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Unidad_Negocio" class="form-label">Unidad de Negocio</label>
                          <input type="text" class="form-control" name="Nom_Unidad_Negocio" id="Nom_Unidad_Negocio" value="<?php echo $_SESSION['Nom_Unidad_Negocio']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $_SESSION['Email']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Area" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area" id="Area" value="<?php echo $_SESSION['Area']; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Direcciones" class="form-label">ID Direccion</label>
                          <input type="text" class="form-control" name="ID_Direcciones" id="ID_Direcciones" value="<?php echo $_SESSION['ID_Direcciones']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Direccion</label>
                          <input type="text" class="form-control" name="Nom_Direcciones" id="Nom_Direcciones" value="<?php echo $_SESSION['Nom_Direcciones']; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Nuevo_Puesto" class="form-label">Puesto</label>
                          <input type="text" class="form-control" name="ID_Nuevo_Puesto" id="ID_Nuevo_Puesto" value="<?php echo $_SESSION['ID_Nuevo_Puesto']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
                          <input type="text" class="form-control" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto" value="<?php echo $_SESSION['Nom_Nuevo_Puesto']; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_funcion" class="form-label">ID Funcion</label>
                          <input type="text" class="form-control" name="ID_funcion" id="ID_funcion" value="<?php echo $_SESSION['ID_funcion']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_funcion" class="form-label">Funcion</label>
                          <input type="text" class="form-control" name="Nom_funcion" id="Nom_funcion" value="<?php echo $_SESSION['Nom_funcion']; ?>" disabled>
                        </div>     
                        <?php
                          }
                        ?>
                      </div>
                    </div>
                </form>
            </div>

            <div id="page2" class="page" style="width: 100%;">
              <form action="paso3.php" method="GET">
              <div class="container text-center">
                <div class="row">
                    <div class="col d-flex" style="gap: 1%;">
                    <select class="form-select mb-3" name="Nom_Proceso">
                            <option value="todos">Todos</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>            
                          <input type="submit" class="btn btn-outline-success" value="Search">       
                    </div>
                  </div>
                </div>
              </form>

              <?php

                error_reporting(0);


                  $nom_Procesos = $_GET['Nom_Proceso'];

                // Consulta SQL
                $sql = "SELECT * FROM usuario_cliente";

                if ($Nom_Proceso != 'todos') {
                  $sql .= " WHERE Nom_Proceso = '$Nom_Proceso'";
              }
              
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
                    while ($row = $result->fetch_assoc()) {
                    ?>
                     <tbody>
                      <tr>
                        <td><?php echo $row['Nom_Subproceso']; ?></td>
                        <td><?php echo $row['Nom_Subproceso']; ?></td>
                        <td>
                          <a href="paso3.php?ID=<?php echo $row['ID']?>" class="btn btn-warning">
                            Capturar
                          </a>
                        </td>
                        <td>
                          <?php 
                            if ($result) {
                              ?>
                            <img src="../img/x-regular-48.png">   
                          <?php
                            }
                          ?>
                        </td>
                      </tr>
                    </tbody>
                    <?php 
                    }
                    ?>
                    </table>
                    <?php
                } else {
                    echo "";
                }
                ?>

            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>