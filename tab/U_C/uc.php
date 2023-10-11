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
    <title>Home | Grupo Piasa</title>
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
      <div class="logo"><a href="#"> Usuario/Cliente </a></div>
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
                  <li><a href="uc.php">Usuario/Cliente</a></li>
                  <li><a href="../Nomenclatura/nomenclatura.php">Nomenclatura</a></li>
                  <li><a href="../Sub_procesos/subPros.php">Sub_procesos</a></li>
                  <li><a href="../Taxonomina/taxo.php">Taxonomina</a></li>
                  <li><a href="../Tipo/tipo.php">Tipo</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="../Calculo/calculo.php">Calculo</a></li>
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
                  <li><a href="../Temporalidad/tem.php">Temporalidad</a></li>
                  <li><a href="../entrega/entrega.php">Entrega</a></li>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Unidad de Negocios</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="valUC.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre usuario/empleado">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="Apellido" placeholder="Apellido usuario/empleado">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Unidad_Negocio</label>
                          <select class="form-select mb-3" name="ID_Unidad_Negocio">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                $spc = "";
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Unidad_Negocio</label>
                          <select class="form-select mb-3" name="Nom_Unidad_Negocio">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM unidad_negocio");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_unidad_negocio']."'>".$resultado['nom_unidad_negocio']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Actividad</label>
                          <select class="form-select mb-3" name="ID_Actividad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                $spc = "";
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
                          <select class="form-select mb-3" name="Nom_Actividad">
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
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID_Nuevo_Puesto</label>
                          <select class="form-select mb-3" name="ID_Nuevo_Puesto">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                $spc = "";
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nom_Nuevo_Puesto</label>
                          <select class="form-select mb-3" name="Nom_Nuevo_Puesto">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM nuevo_puesto");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nuevo_Puesto']."'>".$resultado['Nuevo_Puesto']."</option>";
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
                          <select class="form-select mb-3" name="Nom_Proceso">
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
                          <label for="exampleInputEmail1" class="form-label">ID Direccion</label>
                          <select class="form-select mb-3" name="ID_Direcciones">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

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
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM direcciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Direccion']."'>".$resultado['Nom_Direccion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Subproceso</label>
                          <select class="form-select mb-3" name="ID_Subproceso">
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
                          <select class="form-select mb-3" name="Nom_Subproceso">
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
                          <label for="exampleInputEmail1" class="form-label">ID Temporalidad</label>
                          <select class="form-select mb-3" name="ID_Temporalidad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM temporalidad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Temporalidad']."'>".$resultado['Nom_Temporalidad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Temporalidad</label>
                          <select class="form-select mb-3" name="Nom_Temporalidad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM temporalidad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Temporalidad']."'>".$resultado['Nom_Temporalidad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">ID Valor</label>
                          <select class="form-select mb-3" name="ID_Valor">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['ID_Valor']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Valor</label>
                          <select class="form-select mb-3" name="Nom_Valor">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_Valor']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Frecuencia</label>
                          <select class="form-select mb-3" name="Nom_frecuencia">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                include ("../../config/conexion.php");

                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_frecuencia']."'>".$resultado['Nom_frecuencia']."</option>";
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
    <table class="table" style="margin-left: 40px;">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">ID</th>
      <th scope="col">Unidad_negocio</th>
      <th scope="col">email</th>
      <th scope="col">area</th>
      <th scope="col">ID</th>
      <th scope="col">Actividad</th>
      <th scope="col">ID</th>
      <th scope="col">Nuevo_Puesto</th>
      <th scope="col">ID</th>
      <th scope="col">Proceso</th>
      <th scope="col">ID</th>
      <th scope="col">Direccion</th>
      <th scope="col">ID</th>
      <th scope="col">Subproceso</th>
      <th scope="col">ID</th>
      <th scope="col">Temporalidad</th>
      <th scope="col">ID</th>
      <th scope="col">Valor</th>
      <th scope="col">frecuencia</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
      $query = "SELECT * FROM usuario_cliente";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
      <tr>
        <td><?php echo $row['ID_empleado']; ?></td>
        <td><?php echo $row['Nombre']; ?></td>
        <td><?php echo $row['Apellido']; ?></td>
        <td><?php echo $row['ID_Unidad_Negocio']; ?></td>
        <td><?php echo $row['Nom_Unidad_Negocio']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Area']; ?></td>
        <td><?php echo $row['ID_Actividad']; ?></td>
        <td><?php echo $row['Nom_Actividad']; ?></td>
        <td><?php echo $row['ID_Nuevo_Puesto']; ?></td>
        <td><?php echo $row['Nom_Nuevo_Puesto']; ?></td>
        <td><?php echo $row['ID_Procesos']; ?></td>
        <td><?php echo $row['Nom_Proceso']; ?></td>
        <td><?php echo $row['ID_Direcciones']; ?></td>
        <td><?php echo $row['Nom_Direcciones']; ?></td>
        <td><?php echo $row['ID_Subproceso']; ?></td>
        <td><?php echo $row['Nom_Subproceso']; ?></td>
        <td><?php echo $row['ID_Temporalidad']; ?></td>
        <td><?php echo $row['Nom_Temporalidad']; ?></td>
        <td><?php echo $row['ID_Valor']; ?></td>
        <td><?php echo $row['Nom_Valor']; ?></td>
        <td><?php echo $row['Nom_frecuencia']; ?></td>
        <td>
          <a href="editar.php?ID_empleado=<?php echo $row['ID_empleado']?>" class="btn btn-warning">
            <i class='bx bxs-edit'></i>
          </a>
          <a href="delete.php?ID_empleado=<?php echo $row['ID_empleado']?>" class="btn btn-danger">
            <i class='bx bx-trash'></i>
          </a>
        </td>
      </tr>
      <?php } ?>
  </tbody>
</table>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>