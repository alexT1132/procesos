<!DOCTYPE html>
<html>
<head>
    <title>Formulario con JavaScript</title>
</head>
<body>
    <h1>Formulario de Datos</h1>
    <form id="miFormulario">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <input type="button" value="Enviar" onclick="recopilarDatos()">
    </form>

    <script>
        function recopilarDatos() {
            var nombre = document.getElementById("nombre").value;
            var email = document.getElementById("email").value;

            alert("Datos recopilados:\nNombre: " + nombre + "\nCorreo Electrónico: " + email);
        }
    </script>
</body>
</html>
