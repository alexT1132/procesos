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
      <div class="logo"><a href="#"> Eventos </a></div>
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
                  <li><a href="../Calculo/calculo.php">Calculo</a></li>
                  <li><a href="../Detalle_actividad/DA.php">Detalle_actividad</a></li>
                  <li><a href="../Puestos/puesto.php">Puestos</a></li>
                  <li><a href="../Unidad_N/UN.php">Unidad_Negocio</a></li>
                  <li><a href="eventos.php">Eventos</a></li>
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
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin: 50px;">
        Añadir <i class='bx bx-plus'></i>
    </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Nuevo Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="valEvento.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Eventual</label>
                            <input type="text" class="form-control" name="Eventual"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Por Eventos</label>
                            <input type="text" class="form-control" name="Por_Eventos"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Continuos</label>
                            <input type="text" class="form-control" name="Continuos"  >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mensual</label>
                            <input type="text" class="form-control" name="Mensual"  >
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
    <table class="table" style="width: 800px;">
  <thead class="text-center">
    <tr>
      <th scope="col">ID_Eventos</th>
      <th scope="col">Eventual</th>
      <th scope="col">Por_Eventos</th>
      <th scope="col">Continuos</th>
      <th scope="col">Mensual</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody class="text-center">
    <?php
      $query = "SELECT * FROM eventos";
      $result_task = mysqli_query($conexion, $query);

      while($row = mysqli_fetch_assoc($result_task)) { ?>
      <tr>
        <td><?php echo $row['ID_Eventos']; ?></td>
        <td><?php echo $row['Eventual']; ?></td>
        <td><?php echo $row['Por_Eventos']; ?></td>
        <td><?php echo $row['Continuos']; ?></td>
        <td><?php echo $row['Mensual']; ?></td>
        <td>
          <a href="edit.php?ID_Eventos=<?php echo $row['ID_Eventos']?>" class="btn btn-warning">
            <i class='bx bxs-edit'></i>
          </a>
          <a href="delete.php?ID_Eventos=<?php echo $row['ID_Eventos']?>" class="btn btn-danger">
            <i class='bx bx-trash'></i>
          </a>
        </td>
      </tr>
      </tr>
      <?php } ?>
  </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>