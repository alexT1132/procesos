<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="title text-center">
        <h1>Modificar datos</h1>
    </div>
    <br><br>
    <div class="container text-center">
        <form action="" method="POST">
        <?php
            include ('../../config/conexion.php');

            $sql = "SELECT * FROM usuario_cliente WHERE ID_empleado =".$_GET['ID'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control text-center" name="Nombre" value="<?php echo $row['Nombre']; ?>" placeholder="Actualizar Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control text-center" name="Apellido" value="<?php echo $row['Apellido']; ?>" placeholder="Actualizar Apellido">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Unidad Negocio</label>
            <input type="text" class="form-control text-center" name="ID_Unidad_Negocio" value="<?php echo $row['ID_Unidad_Negocio']; ?>" placeholder="Actualizar ID Unidad Negocio">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Unidad Negocio </label>
            <input type="text" class="form-control text-center" name="Nom_Unidad_Negocio  " value="<?php echo $row['Nom_Unidad_Negocio']; ?>" placeholder="Actualizar Nombre Unidad Negocio">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control text-center" name="Email" value="<?php echo $row['Email']; ?>" placeholder="Actualizar Email">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Area</label>
            <input type="text" class="form-control text-center" name="Area" value="<?php echo $row['Area']; ?>" placeholder="Actualizar Area">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Actividad</label>
            <input type="text" class="form-control text-center" name="ID_Actividad" value="<?php echo $row['ID_Actividad']; ?>" placeholder="Actualizar ID Actividad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
            <input type="text" class="form-control text-center" name="Nom_Actividad" value="<?php echo $row['Nom_Actividad']; ?>" placeholder="Actualizar Nombre Actividad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID_Nuevo_Puesto </label>
            <input type="text" class="form-control text-center" name="ID_Nuevo_Puesto" value="<?php echo $row['ID_Nuevo_Puesto']; ?>" placeholder="Actualizar ID_Nuevo_Puesto">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Nuevo Puesto </label>
            <input type="text" class="form-control text-center" name="Nom_Nuevo_Puesto " value="<?php echo $row['Nom_Nuevo_Puesto']; ?>" placeholder="Actualizar Nombre Nuevo Puesto">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Procesos </label>
            <input type="text" class="form-control text-center" name="ID_Procesos" value="<?php echo $row['ID_Procesos']; ?>" placeholder="Actualizar ID Procesos">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Proceso </label>
            <input type="text" class="form-control text-center" name="Nom_Proceso " value="<?php echo $row['Nom_Proceso']; ?>" placeholder="Actualizar Nombre Proceso">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Direcciones </label>
            <input type="text" class="form-control text-center" name="ID_Direcciones" value="<?php echo $row['ID_Direcciones']; ?>" placeholder="Actualizar ID Direcciones">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Direcciones </label>
            <input type="text" class="form-control text-center" name="Nom_Direcciones" value="<?php echo $row['Nom_Direcciones']; ?>" placeholder="Actualizar Nombre Direcciones">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Subproceso </label>
            <input type="text" class="form-control text-center" name="ID_Subproceso" value="<?php echo $row['ID_Subproceso']; ?>" placeholder="Actualizar ID Subproceso">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Subproceso</label>
            <input type="text" class="form-control text-center" name="Nom_Subproceso" value="<?php echo $row['Nom_Subproceso']; ?>" placeholder="Actualizar Nombre Subproceso">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID_Temporalidad</label>
            <input type="text" class="form-control text-center" name="ID_Temporalidad" value="<?php echo $row['ID_Temporalidad']; ?>" placeholder="Actualizar ID Temporalidad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Temporalidad</label>
            <input type="text" class="form-control text-center" name="Nom_Temporalidad" value="<?php echo $row['Nom_Temporalidad']; ?>" placeholder="Actualizar Nombre Temporalidad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Valor</label>
            <input type="text" class="form-control text-center" name="ID_Valor" value="<?php echo $row['ID_Valor']; ?>" placeholder="Actualizar ID Valor">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Valor</label>
            <input type="text" class="form-control text-center" name="Nom_Valor" value="<?php echo $row['Nom_Valor']; ?>" placeholder="Actualizar Nombre Valor">
        </div>
        <br>
        <div class="text-center">
            <a href="uc.php" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>