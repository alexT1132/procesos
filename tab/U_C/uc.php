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
                  <li><a href="../funciones/funcion.php">Funcion</a></li>
                  <li><a href="../entrega/entrega.php">Entrega</a></li>
                  <li><a href="../users/users.php">Usuarios</a></li>
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
    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 50px;">
        Añadir <i class='bx bx-plus'></i>
    </button>-->

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
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" name="Area">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
                          <select class="form-select mb-3" name="Nom_Actividad">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM detalle_actividad");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_actividad']."'>".$resultado['nom_actividad']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nom_Nuevo_Puesto</label>
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
                          <label for="exampleInputEmail1" class="form-label">Nombre Subproceso</label>
                          <select class="form-select mb-3" name="Nom_Subproceso">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM sub_proceso");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['nom_Subproceso']."'>".$resultado['nom_Subproceso']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Funcion</label>
                          <select class="form-select mb-3" name="Nom_funcion">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM funciones");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_funcion']."'>".$resultado['Nom_funcion']."</option>";
                              }
                            ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Frecuencia</label>
                          <select class="form-select mb-3" name="Nom_frecuencia">
                            <option selected disabled>Selecciona una opción</option>
                            <?php
                                $sql = $conexion->query("SELECT * FROM frecuencia");
                                while ($resultado = $sql->fetch_assoc()) {
                                echo "<option value='".$resultado['Nom_frecuencia']."'>".$resultado['Nom_frecuencia']."</option>";
                              }
                            ?>
                          </select>
                        </div>  
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="estado" id="estado" value="0">
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
    <div class="row justify-content-center" style="width: 100%; margin-left: 8%; margin-top: 6%;">
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Unidad_negocio</th>
      <th scope="col">email</th>
      <th scope="col">area</th>
      <th scope="col">Actividad</th>
      <th scope="col">Nuevo_Puesto</th>
      <th scope="col">Proceso</th>
      <th scope="col">Direccion</th>
      <th scope="col">Subproceso</th>
      <th scope="col">Función</th>
      <th scope="col">val_Frec</th>
      <th scope="col">input</th>
      <th scope="col">sistema</th>
      <th scope="col">rol</th>
      <th scope="col">tiempo</th>
      <th scope="col">vol</th>
      <th scope="col">t_h</th>
      <th scope="col">ftes</th>
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
        <td><?php echo $row['Nom_Unidad_Negocio']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Area']; ?></td>
        <td><?php echo $row['Nom_Actividad']; ?></td>
        <td><?php echo $row['Nom_Nuevo_Puesto']; ?></td>
        <td><?php echo $row['Nom_Proceso']; ?></td>
        <td><?php echo $row['Nom_Direcciones']; ?></td>
        <td><?php echo $row['Nom_Subproceso']; ?></td>
        <td><?php echo $row['Nom_funcion']; ?></td>
        <td><?php echo $row['val_Frec']; ?></td>
        <td><?php echo $row['input']; ?></td>
        <td><?php echo $row['sistema']; ?></td>
        <td><?php echo $row['rol']; ?></td>
        <td><?php echo $row['tiempo']; ?></td>
        <td><?php echo $row['vol']; ?></td>
        <td><?php echo $row['t_h']; ?></td>
        <td><?php echo $row['ftes']; ?></td>
        <td>
          <a href="editar.php?ID_empleado=<?php echo $row['ID_empleado']?>" class="btn btn-warning">
            <i class='bx bxs-edit'></i>
          </a>
          <a href="delete.php?ID_empleado=<?php echo $row['ID_empleado']?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">
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