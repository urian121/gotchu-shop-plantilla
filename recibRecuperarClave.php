<?php
include('config.php');

$logitudPass = 4;
$miPassword  = substr( md5(microtime()), 1, $logitudPass);
$clave       = $miPassword;

$correo         = $_REQUEST['email'];
$consulta       = ("SELECT * FROM users WHERE email ='".$correo."'");
$jqueryconsulta = mysqli_query($con, $consulta); 
$dataconsulta   = mysqli_fetch_array($jqueryconsulta);
$cant           = mysqli_num_rows($jqueryconsulta);

//ei; email incorrecto, no existe.
if($cant ==0){ 
    echo "<script type='text/javascript'>
            window.location='../login.php?ei=1';
        </script>";
}else{
    $sql = ("UPDATE users SET password='". $clave ."' WHERE email='".$correo."' ");
    $ok = mysqli_query($con,$sql); 
    //ce: clave usuario cambiada con exito.
    header("Location: ../login.php?ce=1&cli=".$dataconsulta['nameFull']);
}

$para    = $correo;
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

mail($para, $titulo, $mensaje, $headers);

?>