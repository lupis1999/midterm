<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


require ('conexion.php');

$consulta = mysqli_query (
	$mysqli, "INSERT INTO usuarios VALUES(null, '$usuario', '$contrasena')"
);

if(!$consulta){
	echo mysqli_error($mysqli);
	exit;
}
else {
	header('Location: home.php');
}

?>