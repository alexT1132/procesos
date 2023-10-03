<?php
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
$_SESSION['username']=$username;

include ('config/conexion.php');

$consulta="SELECT*FROM usernames where username='$username' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){ 
    header("location: home.php");

}
else{
    header('location: index.php');
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>