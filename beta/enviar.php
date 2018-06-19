<?php

$para='frankfdbz@gmail.com';
$asunto='Frank.pe | Contacto';
$nombre=$_POST['TxtNombre'];
$correo=$_POST['Txtcorreo'];
$celular=$_POST['TxtTelefono'];
$Msj=$_POST['message'];
$contenido='Nombre :'. $nombre."\n".'correo :'.$correo."\n".'telefono :'.$celular."\n".' Mensaje :'.$Msj;
$cabecera='from: yo@ps.com';
 if (mail($para,$asunto,$contenido,$cabecera)) {
   header("location:gracias.html");
} else {
   header("location:error.html");
}

//-----------------------------
//$para = 'frankfdbz@gmail.com';
//$asunto = 'Prueba de FCV-Desarrollo de web';
//$mensaje = $_POST['message'];
//$cabeceras = 'From: remitente@dominio.com'; //. "\r\n" .
//'Reply-To: remitente@dominio.com' . "\r\n" .
//'X-Mailer: PHP/' . phpversion();

//if(mail($para, $asunto, $mensaje,$cabeceras)) {
//echo 'Correo enviado correctamente';
//} else {
//echo 'Error al enviar mensaje';
//}
 ?>
