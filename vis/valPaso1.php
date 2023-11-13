<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['Nombre'] = $_POST["Nombre"];
    $_SESSION['Apellido'] = $_POST["Apellido"];
    $_SESSION['ID_Unidad_Negocio'] = $_POST["ID_Unidad_Negocio"];
    $_SESSION['Nom_Unidad_Negocio'] = $_POST["Nom_Unidad_Negocio"];
    $_SESSION['Email'] = $_POST["Email"];
    $_SESSION['Area'] = $_POST["Area"];
    $_SESSION['ID_Direcciones'] = $_POST["ID_Direcciones"];
    $_SESSION['Nom_Direcciones'] = $_POST["Nom_Direcciones"];
    $_SESSION['ID_Nuevo_Puesto'] = $_POST["ID_Nuevo_Puesto"];
    $_SESSION['Nom_Nuevo_Puesto'] = $_POST["Nom_Nuevo_Puesto"];
    $_SESSION['ID_funcion'] = $_POST["ID_funcion"];
    $_SESSION['Nom_funcion'] = $_POST["Nom_funcion"];
}

    header("Location: paso2.php");

?>