<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['username'];
if($varsesion== null || $varsesion=''){
    header("location: ../../error.php");
    die();
}

?>

<?php include('../../config/conexion.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home | Grupo Piasa</title>
    <link rel="stylesheet" href="../../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="../../img/logo_3.png">
</head>
<body><br>
    <div class="navbar">
    <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"> Consultas </a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="../../home.php">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Tablas</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Tablas</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="../U_C/uc.php">Usuario/Cliente</a></li>
                  <li><a href="../Nomenclatura/nomenclatura.php">Nomenclatura</a></li>
                  <li><a href="../Sub_procesos/subPros.php">Sub_procesos</a></li>
                  <li><a href="../Taxonomina/taxo.php">Taxonomina</a></li>
                  <li><a href="../Tipo/tipo.php">Tipo</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="calculo.php">Calculo</a></li>
                  <li><a href="../Detalle_actividad/DA.php">Detalle_actividad</a></li>
                  <li><a href="../Puestos/puesto.php">Puestos</a></li>
                  <li><a href="../Unidad_N/UN.php">Unidad_Negocio</a></li>
                  <li><a href="../Eventos/eventos.php">Eventos</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="../Procesos/procesos.php">Procesos</a></li>
                  <li><a href="../Direcciones/direcciones.php">Direcciones</a></li>
                  <li><a href="../Frecuencia/frecuencia.php">Frecuencia</a></li>
                  <li><a href="../funciones/funcion.php">Funcion</a></li>
                  <li><a href="../entrega/entrega.php">Entrega</a></li>
                  <li><a href="consultas.php">Consultas</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a type="submite" href="../../destroy.php">Cerrar Sessión</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
    </div>
    <br>
    <div class="position-absolute top-10 end-0" style="width: 300px; margin-right: 50px;"><br><br>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 50px;">
        Añadir <i class='bx bx-plus'></i>
    </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nueva consulta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="valConsulta.php" method="POST">
                    <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Funcion</label>
                          <select class="form-select mb-3" name="ID_funcion">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Funcion</label>
                          <select class="form-select mb-3" name="Nom_funcion">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Proceso</label>
                          <select class="form-select mb-3" name="ID_Procesos">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Proceso</label>
                          <select class="form-select mb-3" name="nom_Procesos">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM procesos");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Procesos']."'>".$resultado['Nom_Procesos']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Subproceso</label>
                          <select class="form-select mb-3" name="ID_subproceso">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_subProcesos']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Subproceso</label>
                          <select class="form-select mb-3" name="nom_subproceso">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_Subproceso']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Actividad</label>
                          <select class="form-select mb-3" name="ID_Actividad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
                          <select class="form-select mb-3" name="nom_Actividad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="row justify-content-end">
                            <button type="submit" name="guardar" class="btn btn-success btn-block" style="width: 120px; margin-right: 12px;">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- formulario -->
    <div class="row justify-content-center">
    <table class="table" style="width: 1400px;">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID_funcion</th>
      <th scope="col">Funciones</th>
      <th scope="col">ID_Procesos</th>
      <th scope="col">Procesos</th>
      <th scope="col">ID_Subprocesos</th>
      <th scope="col">Sub_procesos</th>
      <th scope="col">ID_Actividad</th>
      <th scope="col">Actividades</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
      $query = "SELECT * FROM consultas";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
      <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['ID_funcion']; ?></td>
        <td><?php echo $row['Nom_funcion']; ?></td>
        <td><?php echo $row['ID_Procesos']; ?></td>
        <td><?php echo $row['nom_Procesos']; ?></td>
        <td><?php echo $row['ID_subproceso']; ?></td>
        <td><?php echo $row['nom_subproceso']; ?></td>
        <td><?php echo $row['ID_Actividad']; ?></td>
        <td><?php echo $row['nom_Actividad']; ?></td>
        <td>
          <a href="edit.php?ID=<?php echo $row['ID']?>" class="btn btn-warning">
            <i class='bx bxs-edit'></i>
          </a>
          <a href="delete.php?ID=<?php echo $row['ID']?>" class="btn btn-danger">
            <i class='bx bx-trash'></i>
          </a>
        </td>
      </tr>
      <?php } ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>