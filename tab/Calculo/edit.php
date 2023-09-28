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

            $sql = "SELECT * FROM calculo WHERE ID_Calculo =".$_GET['ID_Calculo'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Calculo</label>
            <input type="text" class="form-control text-center" name="nom_calculo" value="<?php echo $row['nom_calculo']; ?>" placeholder="Actualizar nombre calculo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID Actividad</label>
            <input type="text" class="form-control text-center" name="ID_Actividad " value="<?php echo $row['ID_Actividad ']; ?>" placeholder="Actualizar ID Actividad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre Actividad</label>
            <input type="text" class="form-control text-center" name="nom_actividad" value="<?php echo $row['nom_actividad']; ?>" placeholder="Actualizar Nombre Actividad">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tiempo</label>
            <input type="text" class="form-control text-center" name="Tiempo" value="<?php echo $row['Tiempo']; ?>" placeholder="Actualizar Tiempo">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Frecuencia</label>
            <input type="text" class="form-control text-center" name="Frecuencia" value="<?php echo $row['Frecuencia']; ?>" placeholder="Actualizar Frecuencia">
        </div>
        <br>
        <div class="text-center">
            <a href="calculo.php" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>