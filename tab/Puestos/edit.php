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

            $sql = "SELECT * FROM nuevo_puesto WHERE ID_Nuevo_Puesto =".$_GET['ID_Nuevo_Puesto'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nuevo puesto</label>
            <input type="text" class="form-control text-center" name="Nuevo_Puesto" value="<?php echo $row['Nuevo_Puesto']; ?>" placeholder="Actualizar nuevo_puesto">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Actividad </label>
            <input type="text" class="form-control text-center" name="ID_Actividad " value="<?php echo $row['ID_Actividad ']; ?>" placeholder="Actualizar ID Actividad ">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
            <input type="text" class="form-control text-center" name="nom_actividad" value="<?php echo $row['nom_actividad']; ?>" placeholder="Actualizar nombre actividad">
        </div>
        <br>
        <div class="text-center">
            <a href="puesto.php" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>