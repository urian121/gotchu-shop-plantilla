<?php
include('config.php');
date_default_timezone_set("America/Bogota");
$dateCreateCow    = date('d-m-Y H:i:s A', time()); 

$idUser 		      = $_REQUEST['idUser'];
$id_produts_amazon    = $_REQUEST['id_produts_amazon'];
$nameCow  		      = $_REQUEST['nameCow'];
$dateCreateCow  	  = date($_REQUEST['dateCreateCow'].' H:i:s A');

$queryInsert  = ("INSERT INTO vacas(idUser,id_produts_amazon,nameCow,dateCreateCow) VALUES ('$idUser','$id_produts_amazon','$nameCow','$dateCreateCow')");
$resultInsert = mysqli_query($con, $queryInsert);
	if ($resultInsert >0){
    //Busco el registro que se acaba de hacer
    $SqlUltimaVaca      = ("SELECT MAX(idCow) AS ultimaVaca FROM vacas WHERE idUser='$idUser'");
    $jqueryUltimaVaca   = mysqli_query($con, $SqlUltimaVaca); 
    $dataUltimaVaca     = mysqli_fetch_array($jqueryUltimaVaca);
    $ultimoIdVaca       = $dataUltimaVaca['ultimaVaca'];

		echo '<meta http-equiv="refresh" content="0;url=detalleVaca.php?idmivaca='.$ultimoIdVaca.'">';
	}

?>

