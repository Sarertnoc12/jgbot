<?php
$usuario= $_POST['usuario'];
$password= $_POST['password'];
include ('conexion.php');
$consulta = $conexion->query("SELECT usuario, password FROM usuario WHERE usuario ='$usuario' AND password ='$password'");
if ($resultado = mysqli_fetch_array($consulta)) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header('location:index.php');
}else{
	
    header('Location: index2.php');
}
  ?>