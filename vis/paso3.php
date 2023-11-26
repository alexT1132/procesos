<?php

    session_start();

    include('../config/conexion.php');  

    if(isset($_SESSION['formulario1'])) {
      $datos1 = $_SESSION['formulario1'];
    } else {
      echo 'Datos no encontrados';
      exit;
    }

    if(isset($_SESSION['formulario3'])) {
      $datos3 = $_SESSION['formulario3'];
    } else {
      echo 'Datos no encontrados';
      exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      //DATOS DEL FORM
      $Nom_Subproceso = $_POST['Nom_Subproceso'];
      $Nom_Actividad = $_POST['Nom_Actividad'];
  
      //DATOS EN LA SESSION
      $_SESSION['formulario3'] = array(
        'Nom_Subproceso' => $Nom_Subproceso,
        'Nom_Actividad' => $Nom_Actividad,
      );

      header('Location: paso4.php');
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
                        <div class="mb-3">
                            <label for="Nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" value="<?php echo $datos1['Nombre']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" id="Apellido" value="<?php echo $datos1['Apellido']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Unidad_Negocio" class="form-label">Unidad de Negocio</label>
                          <input type="text" class="form-control" name="Nom_Unidad_Negocio" id="Nom_Unidad_Negocio" value="<?php echo $datos1['Nom_Unidad_Negocio']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="Email" id="Email" value="<?php echo $datos1['Email']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="Area" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area" id="Area" value="<?php echo $datos1['Area']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Direcciones" class="form-label">Direccion</label>
                          <input type="text" class="form-control" name="Nom_Direcciones" id="Nom_Direcciones" value="<?php echo $datos1['Nom_Direcciones']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
                          <input type="text" class="form-control" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto" value="<?php echo $datos1['Nom_Nuevo_Puesto']; ?>" disabled>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_funcion" class="form-label">Funcion</label>
                          <input type="text" class="form-control" name="Nom_funcion" id="Nom_funcion" value="<?php echo $datos1['Nom_funcion']; ?>" disabled>
                        </div>     
                      </div>
                    </div>
                </form>
                <br>
                <div>
                  <form action="" method="post">
                    <div class="mb-3 text-center">
                      <label for="exampleInputEmail1" class="form-label">Nombre Proceso</label>
                      <input type="text" class="form-control" name="Nom_funcion" id="Nom_funcion" value="<?php echo $datos2['Nom_Proceso']; ?>" disabled>
                    </div>
                  </form>
                </div>
            </div>

            <div id="page2" class="page" style="width: 100%;">
              
            <form action="" method="post">

                        <!-- Tablas -->
                        <div class="tablas d-flex" style="gap: 8%;">
                          <div class="tablaSubpros">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Subproceso</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $sqlConsultaTabla1 = "SELECT * FROM sub_proceso";
                              $resultadoTabla1 = $conexion->query($sqlConsultaTabla1);
    
                              while ($filaTabla1 = $resultadoTabla1->fetch_assoc()) {
                              ?>
                                <tr>
                                  <td>
                                      <input type="checkbox" class="form-check-input" name="Nom_Subproceso" id="Nom_Subproceso" value="<?php $filaTabla1["nom_Subproceso"]; ?>">
                                  </td>
                                  <td>
                                    <?php echo $filaTabla1["nom_Subproceso"]; ?>
                                  </td>
                                </tr>
                                <?php
                                  }
                                ?>
                              </tbody>
                            </table>
                          </div>
                          <div class="tablaAct">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>Actividad</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                              $sqlConsultaTabla2 = "SELECT * FROM detalle_actividad";
                              $resultadoTabla2 = $conexion->query($sqlConsultaTabla2);
    
                              while ($filaTabla2 = $resultadoTabla2->fetch_assoc()) {
                              ?>
                                <tr>
                                  <td>
                                      <input type="checkbox" class="form-check-input" name="Nom_Actividad" id="Nom_Actividad" value="<?php $filaTabla2["nom_actividad"]; ?>">
                                  </td>
                                  <td>
                                    <?php echo $filaTabla2["nom_actividad"]; ?>
                                  </td>
                                </tr>
                                <?php
                                  }
                                ?>
                              </tbody>
                            </table>
                            <a type="submite" class="btn btn-danger" href="paso2.php">Back</a>
                            <button type="submit" class="btn btn-success">
                                Next
                            </button>
                          </div>
                        </div>
            </form>

            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>