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
<body>
    <div class="navbar" style="margin-top: 25px;">
    <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"> Tipo </a></div>
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
                  <li><a href="tipo.php">Tipo</a></li>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 50px;">
        Añadir <i class='bx bx-plus'></i>
    </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nuevo Tipo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="valTipo.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Transaccional</label>
                            <input type="text" class="form-control" name="Transaccional" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Estrategico</label>
                            <input type="text" class="form-control" name="Estrategico" >
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
                          <select class="form-select mb-3" name="nom_actividad">
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

    <div class="row justify-content-center">
      <!-- formulario -->
    <table class="table" style="width: 400px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Transaccional</th>
      <th scope="col">Estrategico</th>
      <th scope="col">ID_Actividad</th>
      <th scope="col">Nom_Actividad</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody class="text-center">
    <?php
      $query = "SELECT * FROM tipo";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
      <tr>
        <td><?php echo $row['ID_Tipo']; ?></td>
        <td><?php echo $row['Transaccional']; ?></td>
        <td><?php echo $row['Estrategico']; ?></td>
        <td><?php echo $row['ID_Actividad']; ?></td>
        <td><?php echo $row['nom_actividad']; ?></td>
        <td>
          <a href="edit.php?ID_Tipo=<?php echo $row['ID_Tipo']?>" class="btn btn-warning">
            <i class='bx bxs-edit'></i>
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