
<?php
    include('../config/conexion.php');

    if (isset($_POST['guardar'])) {
        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $ID_Unidad_Negocio = $_POST['ID_Unidad_Negocio'];
        $Nom_Unidad_Negocio = $_POST['Nom_Unidad_Negocio'];
        $Email = $_POST['Email'];
        $Area = $_POST['Area'];
        $ID_Actividad = $_POST['ID_Actividad'];
        $Nom_Actividad = $_POST['Nom_Actividad'];
        $ID_Nuevo_Puesto = $_POST['ID_Nuevo_Puesto'];
        $Nom_Nuevo_Puesto = $_POST['Nom_Nuevo_Puesto'];
        $ID_Procesos = $_POST['ID_Procesos'];
        $Nom_Proceso = $_POST['Nom_Proceso'];
        $ID_Direcciones = $_POST['ID_Direcciones'];
        $Nom_Direcciones = $_POST['Nom_Direcciones'];
        $ID_Subproceso = $_POST['ID_Subproceso'];
        $Nom_Subproceso = $_POST['Nom_Subproceso'];
        $ID_funcion = $_POST['ID_funcion'];
        $Nom_funcion = $_POST['Nom_funcion'];
        $ID_Valor = $_POST['ID_Valor'];
        $Nom_Valor = $_POST['Nom_Valor'];
        $Nom_frecuencia = $_POST['Nom_frecuencia'];
        $query = "INSERT INTO usuario_cliente(Nombre, 
                                    Apellido,
                                    ID_Unidad_Negocio,
                                    Nom_Unidad_Negocio,
                                    Email,
                                    Area,
                                    ID_Actividad,
                                    Nom_Actividad,
                                    ID_Nuevo_Puesto,
                                    Nom_Nuevo_Puesto,
                                    ID_Procesos,
                                    Nom_Proceso,
                                    ID_Direcciones,
                                    Nom_Direcciones,
                                    ID_Subproceso,
                                    Nom_Subproceso,
                                    ID_funcion,
                                    Nom_funcion,
                                    ID_Valor,
                                    Nom_Valor,
                                    Nom_frecuencia) VALUES ('$Nombre',
                                                        '$Apellido',
                                                        '$ID_Unidad_Negocio',
                                                        '$Nom_Unidad_Negocio',
                                                        '$Email',
                                                        '$Area',
                                                        '$ID_Actividad',
                                                        '$Nom_Actividad',
                                                        '$ID_Nuevo_Puesto',
                                                        '$Nom_Nuevo_Puesto',
                                                        '$ID_Procesos',
                                                        '$Nom_Proceso',
                                                        '$ID_Direcciones',
                                                        '$Nom_Direcciones',
                                                        '$ID_Subproceso',
                                                        '$Nom_Subproceso',
                                                        '$ID_funcion',
                                                        '$Nom_funcion',
                                                        '$ID_Valor',
                                                        '$Nom_Valor',
                                                        '$Nom_frecuencia')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die("Query Failed.");
        }

        
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
    <section class="body-section">
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 100px;">
            <!--Page 1-->
          <div id="page1" class="page" style="width: 30%;">
            <form action="">
              <div class="card">
                <div class="card-body">
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $Nombre; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $Apellido; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Unidad_Negocio" class="form-label">ID Unidad_Negocio</label>
                          <input type="text" class="form-control" name="ID_Unidad_Negocio" id="ID_Unidad_Negocio" value="<?php echo $ID_Unidad_Negocio; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Unidad_Negocio" class="form-label">Unidad de Negocio</label>
                          <input type="text" class="form-control" name="Nom_Unidad_Negocio" id="Nom_Unidad_Negocio" value="<?php echo $Nom_Unidad_Negocio; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $Email; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Area" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area" id="Area" value="<?php echo $Area; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Direcciones" class="form-label">ID Direccion</label>
                          <input type="text" class="form-control" name="ID_Direcciones" id="ID_Direcciones" value="<?php echo $ID_Direcciones; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Direccion</label>
                          <input type="text" class="form-control" name="Nom_Direcciones" id="Nom_Direcciones" value="<?php echo $Nom_Direcciones; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Nuevo_Puesto" class="form-label">ID_Nuevo_Puesto</label>
                          <input type="text" class="form-control" name="ID_Nuevo_Puesto" id="ID_Nuevo_Puesto" value="<?php echo $ID_Nuevo_Puesto; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
                          <input type="text" class="form-control" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto" value="<?php echo $Nom_Nuevo_Puesto; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_funcion" class="form-label">ID Funcion</label>
                          <input type="text" class="form-control" name="ID_funcion" id="ID_funcion" value="<?php echo $ID_funcion; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_funcion" class="form-label">Funcion</label>
                          <input type="text" class="form-control" name="Nom_funcion" id="Nom_funcion" value="<?php echo $Nom_funcion; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Procesos" class="form-label">ID Proceso</label>
                          <input type="text" class="form-control" name="ID_Procesos" id="ID_Procesos" value="<?php echo $ID_Procesos; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Proceso" class="form-label">Proceso</label>
                          <input type="text" class="form-control" name="Nom_Proceso" id="Nom_Proceso" value="<?php echo $Nom_Proceso; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Subproceso" class="form-label">ID Subproceso</label>
                          <input type="text" class="form-control" name="ID_Subproceso" id="ID_Subproceso" value="<?php echo $ID_Subproceso; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Subproceso" class="form-label">Subproceso</label>
                          <input type="text" class="form-control" name="Nom_Subproceso" id="Nom_Subproceso" value="<?php echo $Nom_Subproceso; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Actividad" class="form-label">ID Actividad</label>
                          <input type="text" class="form-control" name="ID_Actividad" id="ID_Actividad" value="<?php echo $ID_Actividad; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Actividad" class="form-label">Actividad</label>
                          <input type="text" class="form-control" name="Nom_Actividad" id="Nom_Actividad" value="<?php echo $Nom_Actividad; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="ID_Valor" class="form-label">ID Valor</label>
                          <input type="text" class="form-control" name="ID_Valor" id="ID_Valor" value="<?php echo $ID_Valor; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="Nom_Valor" class="form-label">Nombre Valor</label>
                          <input type="text" class="form-control" name="Nom_Valor" id="Nom_Valor" value="<?php echo $Nom_Valor; ?>" disabled>
                        </div>
                        <div class="mb-3" style="display: none;">
                          <label for="Nom_frecuencia" class="form-label">Nombre Frecuencia</label>
                          <input type="text" class="form-control" name="Nom_frecuencia" id="Nom_frecuencia" value="<?php echo $Nom_frecuencia; ?>" disabled>
                        </div>     
                        <div class="row justify-content-center">
                            <button type="submit" name="guardar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Siguiente</button>
                        </div>
                      </div>
                    </div>
                </form>
            </div>

            <div id="page2" class="page" style="width: 60%; margin-left: 5%">
              <form action="paso2.php" method="post">
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
                    echo "No se encontraron resultados.";
                }
                ?>

            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>