<?php
session_start();
include('config.php');

date_default_timezone_set("America/Bogota");
$dateCreateCow    = date('d-m-Y H:i:s A', time()); 
$nameCow 		      = $_REQUEST['nameCow'];
$proposito  		  = $_REQUEST['proposito'];
$idUser  		      = $_REQUEST['idUser'];

$queryInsert  = ("INSERT INTO vacas(idUser,nameCow,proposito,dateCreateCow) VALUES ('$idUser','$nameCow','$proposito', '$dateCreateCow')");
$resultInsert = mysqli_query($con, $queryInsert);
	if ($resultInsert >0){
		echo '<meta http-equiv="refresh" content="0;url=detalleVaca.php?sc=sc">';
	}

?>