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
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a type="submite" href="#">Cerrar Sessión</a></li>
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
    
    <div>
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 50px;">
        Añadir <i class='bx bx-plus'></i>
    </button>
    </div>
     

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nuevo Usuario/Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="valU_C.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Apellido</label>
                            <input type="text" class="form-control" name="apellido">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Puesto</label>
                            <select class="form-select" aria-label="Default select example" name="ID_puesto">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM puestos";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_puesto']; ?> <?php echo $row['nom_puesto']; ?>"><?php echo $row['ID_puesto']; ?>.- <?php echo $row['nom_puesto']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Unidad de Negocio</label>
                            <select class="form-select" aria-label="Default select example" name="ID_unidad_negocio">
                                <option selected>Seleciona una opción</option>
                                <?php
                  $query = "SELECT * FROM unidad_negocio";
                  $result_task = mysqli_query($conexion, $query);
                  
                  while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_unidad_negocio']; ?> <?php echo $row['nom_unidad_negocio']; ?>"><?php echo $row['ID_unidad_negocio']; ?>.- <?php echo $row['nom_unidad_negocio']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" name="area" id="area">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Actividad</label>
                            <select class="form-select" aria-label="Default select example" name="ID_actividad">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM detalle_actividad";
      $result_task = mysqli_query($conexion, $query);
      
      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Actividad']; ?> <?php echo $row['nom_actividad']; ?>"><?php echo $row['ID_Actividad']; ?>.- <?php echo $row['nom_actividad']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nuevo Puesto</label>
                            <select class="form-select" aria-label="Default select example" name="ID_nuevo_puesto">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM nuevo_puesto";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Nuevo_Puesto']; ?> <?php echo $row['nom_nuevo_puesto']; ?>"><?php echo $row['ID_Nuevo_Puesto']; ?>.- <?php echo $row['nom_nuevo_puesto']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Procesos</label>
                            <select class="form-select" aria-label="Default select example" name="ID_procesos">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM procesos";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Procesos']; ?> <?php echo $row['Nom_Procesos']; ?>"><?php echo $row['ID_Procesos']; ?>.- <?php echo $row['Nom_Procesos']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Direccion</label>
                            <select class="form-select" aria-label="Default select example" name="ID_direccion">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM direcciones";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Direccion']; ?> <?php echo $row['Nom_Direccion']; ?>"><?php echo $row['ID_Direccion']; ?>.- <?php echo $row['Nom_Direccion']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Subproceso</label>
                            <select class="form-select" aria-label="Default select example" name="ID_subproceso">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM sub_proceso";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_subProcesos']; ?> <?php echo $row['Nom_Subproceso']; ?>"><?php echo $row['ID_subProcesos']; ?>.- <?php echo $row['Nom_Subproceso']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Temporalidad</label>
                            <select class="form-select" aria-label="Default select example" name="ID_Temporalidad">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM temporalidad";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Temporalidad']; ?> <?php echo $row['Nom_Temporalidad']; ?>"><?php echo $row['ID_Temporalidad']; ?>.- <?php echo $row['Nom_Temporalidad']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Valor</label>
                            <select class="form-select" aria-label="Default select example" name="ID_Valor">
                                <option selected>Seleciona una opción</option>
                                <?php
      $query = "SELECT * FROM frecuencia";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
                                <option value="<?php echo $row['ID_Valor']; ?> <?php echo $row['Nom_Valor']; ?>"><?php echo $row['ID_Valor']; ?>.- <?php echo $row['Nom_Valor']; ?></option>
                                <?php } ?>
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

    <div class="row justify-content-center">
      <!-- formulario -->
    <table class="table" style="width: 400px;">
  <thead>
    <tr>
      <th scope="col">ID_empleado</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">ID_puesto</th>
      <th scope="col">ID_unidad_negocio	</th>
      <th scope="col">email</th>
      <th scope="col">area</th>
      <th scope="col">direccion</th>
      <th scope="col">ID_actividad</th>
      <th scope="col">ID_nuevo_puesto</th>
      <th scope="col">ID_procesos</th>
      <th scope="col">ID_direccion</th>
      <th scope="col">ID_subproceso</th>
      <th scope="col">ID_temporalidad</th>
      <th scope="col">ID_valor</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $query = "SELECT * FROM usuario_cliente";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
      <tr>
        <td><?php echo $row['ID_empleado']; ?></td>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>
        <td><?php echo $row['ID_puesto']; ?></td>
        <td><?php echo $row['ID_unidad_negocio']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['area']; ?></td>
        <td><?php echo $row['direccion']; ?></td>
        <td><?php echo $row['ID_actividad']; ?></td>
        <td><?php echo $row['ID_nuevo_puesto']; ?></td>
        <td><?php echo $row['ID_procesos']; ?></td>
        <td><?php echo $row['ID_direccion']; ?></td>
        <td><?php echo $row['ID_subproceso']; ?></td>
        <td><?php echo $row['ID_Temporalidad']; ?></td>
        <td><?php echo $row['ID_Valor']; ?></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>