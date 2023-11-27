<?php

    session_start();

    include('../config/conexion.php');

    if(isset($_SESSION['formulario1'])) {
      $datos1 = $_SESSION['formulario1'];
    } else {
      echo 'Error';
      exit;
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
      //DATOS DEL FORM
      $Nom_Proceso = $_POST['Nom_Proceso'];
  
      //DATOS EN LA SESSION
      $_SESSION['formulario2'] = array(
        'Nom_Proceso' => $Nom_Proceso,
      );
  
      header('Location: paso3.php');
      exit;
  
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Piasa</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                          <div style="margin-left: 35%;">
                            <a type="submite" class="btn btn-danger" href="paso1.php">Back</a>
                            <button type="submit" class="btn btn-outline-success" >
                              Next
                            </button>
                          </div>
                  </form>
                </div>
            </div>
            
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>