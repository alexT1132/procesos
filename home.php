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
      <div class="logo"><a href="#"> Grupo Piasa</a></div>
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
                  <li><a href="#">Nomenclatura</a></li>
                  <li><a href="#">Sub_procesos</a></li>
                  <li><a href="#">Taxonomina</a></li>
                  <li><a href="#">Tipo</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">Calculo</a></li>
                  <li><a href="#">Detalle_actividad</a></li>
                  <li><a href="#">Puestos</a></li>
                  <li><a href="#">Unidad_Negocio</a></li>
                  <li><a href="#">Eventos</a></li>
                </ul>
              </div>
              <div class="row">
                <ul class="mega-links">
                  <li><a href="#">Procesos</a></li>
                  <li><a href="#">Direcciones</a></li>
                  <li><a href="#">Frecuencia</a></li>
                  <li><a href="#">Temporalidad</a></li>

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


</body>
</html>