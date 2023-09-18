<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario/Cliente | Grupo Piasa</title>
    <link rel="stylesheet" href="../../css/modal.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="../../css/tab.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="navbar">
    <nav>
    <div class="wrapper">
      <div class="logo"><a href="#"> Grupo Piasa</a></div>
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
    <br><br><br>
    <br><br>
    <div class="cont-sector">
    <section class="hero__main container">
            <div class="hero__texts">
                <a href="#" class="hero__cta">
                    Añadir <i class='bx bx-plus'></i>
                </a>
            </div>
        </section>
    </header>

    <section class="modal ">
        <div class="modal__container">
            <h2 class="modal__title">¡Bienvenido al sitio!</h2>
            <p class="modal__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nobis nisi quibusdam doloremque expedita quae ipsam accusamus quisquam quas, culpa tempora. Veniam consectetur deleniti maxime.</p>
            <a href="#" class="modal__close">Cerrar Modal</a>
        </div>
    </section>
    <div class="outer-wrapper">
    <div class="table-wrapper">
    <table>
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
            <tr>
                <td>Value 1</td>
                <td>Value 2</td>
                <td>Value 3</td>
                <td>Value 4</td>
                <td>Value 5</td>
                <td>Value 6</td>
                <td>Value 7</td>
                <td>Value 8</td>
                <td>Value 9</td>
                <td>Value 10</td>
                <td>Value 11</td>
                <td>Value 12</td>
                <td>Value 13</td>
                <td>Value 14</td>
                <td>Value 15</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
    </div>

    

    <script src="../../js/modal.js"></script>
</body>
</html>