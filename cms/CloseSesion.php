<?php
session_start();
include('config.php');

// Eliminar el id de usuario:
unset ($_SESSION['id']);

//Eliminar todas las sesiones:
session_unset();

// Terminar la sesión:
session_destroy();
$parametros_cookies = session_get_cookie_params();
setcookie(session_name(),0,1,$parametros_cookies["path"]);

//Eliminando las  cookies  en session
setcookie ($_SESSION['id'], "", 1);
setcookie ($_SESSION['id'], false);
unset($_COOKIE[$_SESSION['id']]);


echo '<meta http-equiv="refresh" content="0;url=../index.php?sc=sc">';
?>