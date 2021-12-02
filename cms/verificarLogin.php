<?php
error_reporting(0);
session_start();
include('config.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
$email 			= $_REQUEST['email'];
$password  		= $_REQUEST['password'];

/*
El problema está en lo COLLATE que tiene en la base de datos latin1 para ese campo.
Tienes 2 opciones; el primero es realizar la consulta sin collate:
La segunda opción es modificar el COLLATE de esos campos:
https://bugs.mysql.com/bug.php?id=71939
ALTER TABLE users CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;
*/
//ALTER DATABASE MyDataBase COLLATE utf8_bin
$sqlVerificando = ("SELECT * FROM users WHERE email COLLATE utf8_bin='".$email."' AND password COLLATE utf8_bin='".$password."' ");
$QueryResul     = mysqli_query($con, $sqlVerificando);
if($totalStatusBonos = mysqli_num_rows($QueryResul)){

//$row = mysqli_fetch_assoc($QueryResul);
$row = mysqli_fetch_assoc($QueryResul);
	 $_SESSION['nombre']		= $row['nombre'];
	 $_SESSION['email'] 		= $row['email']; 
	 $_SESSION['id'] 		    = $row['id']; 
	 
	echo '<meta http-equiv="refresh" content="0;url=home.php?sc=sc">';
 }else{
		echo '<meta http-equiv="refresh" content="0;url=../index.php?sc=sc">';
	}
}
?>