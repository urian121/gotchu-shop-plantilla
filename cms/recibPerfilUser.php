<?php
require("config.php");

$idUser = $_REQUEST['idUser'];
$UpdateUser = ("UPDATE users SET
	nombre			='".$_POST['nombre']."',
	apellido		='".$_POST['apellido']."',
	dateNacimiento	='".$_POST['dateNacimiento']."',
	tlf				='".$_POST['tlf']."',
	email			='".$_POST['email']."',
	password		='".$_POST['password']."'

WHERE id='".$idUser."'");
$ResultadoUpdate = mysqli_query($con, $UpdateUser);

header("Location:home.php?du=du");
?>