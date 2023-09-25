<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Grupo Piasa</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">Home</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="home.php">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Tablas</a>
          <input type="checkbox" id="showMega">
          <label for="showMega" class="mobile-item">Tablas</label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <ul class="mega-links">
                  <li><a href="tab/U_C/uc.php">Usuario/Cliente</a></li>
                  <li><a href="tab/Nomenclatura/nomenclatura.php">Nomenclatura</a></li>
                  <li><a href="tab/Sub_procesos/subPros.php">Sub_procesos</a></li>
                  <li><a href="tab/Taxonomina/taxo.php">Taxonomina</a></li>
                  <li><a href="tab/Tipo/tipo.php">Tipo</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="tab/Calculo/calculo.php">Calculo</a></li>
                  <li><a href="tab/Detalle_actividad/DA.php">Detalle_actividad</a></li>
                  <li><a href="tab/Puestos/puesto.php">Puestos</a></li>
                  <li><a href="tab/Unidad_N/UN.php">Unidad_Negocio</a></li>
                  <li><a href="tab/Eventos/eventos.php">Eventos</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="tab/Procesos/procesos.php">Procesos</a></li>
                  <li><a href="tab/Direcciones/direcciones.php">Direcciones</a></li>
                  <li><a href="tab/Frecuencia/frecuencia.php">Frecuencia</a></li>
                  <li><a href="tab/Temporalidad/tem.php">Temporalidad</a></li>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>