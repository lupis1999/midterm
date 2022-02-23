<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


require ('conexion.php');

$consulta = mysqli_query (
	$mysqli, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'"
);

if(!$consulta){
	echo mysqli_error($mysqli);
	exit;
}

if($user = mysqli_fetch_assoc($consulta)) {
	header('Location: home.php');
} else {
	echo "<center>Credenciales incorrectas</center>";
}

?>