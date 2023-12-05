
<?php 
  session_start();

  include('../config/conexion.php'); 


  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    //DATOS DEL FORM
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Nom_Unidad_Negocio = $_POST['Nom_Unidad_Negocio'];
    $Email = $_POST['Email'];
    $Area = $_POST['Area'];
    $Nom_Direcciones = $_POST['Nom_Direcciones'];
    $Nom_Nuevo_Puesto = $_POST['Nom_Nuevo_Puesto'];
    $Nom_funcion = $_POST['Nom_funcion'];

    //DATOS EN LA SESSION
    $_SESSION['formulario1'] = array(
      'Nombre' => $Nombre,
      'Apellido' => $Apellido,
      'Nom_Unidad_Negocio' => $Nom_Unidad_Negocio,
      'Email' => $Email,
      'Area' => $Area,
      'Nom_Direcciones' => $Nom_Direcciones,
      'Nom_Nuevo_Puesto' => $Nom_Nuevo_Puesto,
      'Nom_funcion' => $Nom_funcion
    );

    header('Location: paso2.php');
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
                            <h5>Finalizar</h5>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </section>
    <section class="body-section">
        <div class="container-body" style="display: flex; gap: 40px; padding: 40px 0; margin-left: 3%;">
            <!--Page 1-->
          <div id="page1" class="page" style="width: 30%;">
            <form action="#" method="POST" >
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
                        <div class="mb-3">
                          <label for="Nom_Nuevo_Puesto" class="form-label">Puesto</label>
                          <select class="form-select mb-3" name="Nom_Nuevo_Puesto" id="Nom_Nuevo_Puesto" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="Nom_funcion" class="form-label">Funcion</label>
                          <select class="form-select mb-3" name="Nom_funcion" id="Nom_funcion" required>
                            <option selected value="" disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>   
                        <div class="row justify-content-center">
                          <input type="submit" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;" value="Siguiente">
                        </div>
                      </div>
                    </div>
                </form>
            </div>
        </div>        
    </section>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>