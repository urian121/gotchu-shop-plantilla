<?php
session_start();
include('config.php');

date_default_timezone_set("America/Bogota");
$dateCreate     = date('d-m-Y H:i:s A', time()); 

$nombre 		= $_REQUEST['nombre'];
$apellido  		= $_REQUEST['apellido'];
$dateNacimiento = $_REQUEST['dateNacimiento'];
$tlf 			= $_REQUEST['tlf'];
$email 			= $_REQUEST['email'];
$password  		= $_REQUEST['password'];


$sqlVerificando = ("SELECT * FROM users WHERE email='".$email."' ");
$QueryResul     = mysqli_query($con,$sqlVerificando);
$cantidadUser   = mysqli_num_rows($QueryResul);
if ($cantidadUser >0) {
  echo "<script type='text/javascript'>
      alert('El correo ya existe');
    </script>";
 }else{

	$queryInsert  = ("INSERT INTO users(nombre,apellido,dateNacimiento,tlf,email,password,dateCreate) VALUES ('$nombre','$apellido','$dateNacimiento', '$tlf','$email','$password','$dateCreate')");
	$resultInsert = mysqli_query($con, $queryInsert);
	if ($resultInsert >0){

//Creando codigo aleatorio para confirmacion del correo via msjs y email
function codeConfirmation($length = 5) {
    return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
}
$codeConfirmacion  = codeConfirmation();

	  //enviado codigo al correo para validar email
	  $para    = $emailClient;
    $titulo  = "Confirmar cuenta";
    $mensaje = "
    <!doctype html>
    <html lang='es'>
    <head>
    <title>confirmar cuenta</title>
    </head>
		<body>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		    <div style='width: 80%; margin:0 auto; background-color: #ffffff; color: #34495e; text-align: center;font-family: sans-serif'>
				<h2 style='font-size: 16px; color: #34495e; margin: 0 0 7px;'>&#161;Felicitaciones&#33; 
					<strong style='color:#555;'>".$nombre."</strong>, ya estás a sólo 1 paso de verificar tu correo.
				</h2>
				<p>&nbsp;</p>
				<h4>Código de confirmación: <strong>". $codeConfirmacion ."</strong></h4>
				<p>&nbsp;</p>
				<img style='padding: 0; display: block; width:100%; max-width:600px; margin:0 auto;' src='https://www.pruebaroyalcanin.com.co/landing_kit_royal_canin/assets/imgs/gatos.png'>
				<p>&nbsp;</p>
			</div>
		</body>
    </html>
    "; 

    //Cabecera Obligatoria
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Bono Royal Canin <noresponder@pruebaroyalcanin.com.co>' . "\r\n";
    $headers .= 'Cc: noresponder@pruebaroyalcanin.com.co' . "\r\n";
    
    //OPCIONAR
    $headers .= "Reply-To: "; 
    $headers .= "Return-path:"; 
    $headers .= "Cc:"; 
    $headers .= "Bcc:"; 
    
    @mail($para, $titulo, $mensaje, $headers);

		
		echo '<meta http-equiv="refresh" content="0;url=home.php?sc=sc">';
	}
  }

?>