<?php
$para=$_POST['destinatario'];
$asunto=$_POST['asunto'];
$Msj=$_POST['message'];
$contenido = '<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
	</style>
		
	</head>
	<body style="font-family: "Roboto", sans-serif;">
	<div class="padre" style="max-width: 600px;margin: 0 auto; background-color: #E1E1E1;">
		<table style="max-width:500px; margin: auto; background-color: white;padding: 15px;"> 
		    <thead></thead>
		    <tfoot>
              <tr>
               <td colspan="3" style="text-align:center;background-color:#181818; color: white;padding: 20px; font-size:12px">
               Copyright © 2017 - Frank.pe - Todos los Derechos Reservados. <br>
               <a href="http://frank.pe/" style="text-decoration: none;">Frank.pe</a>
               </td>
              </tr> 
        </tfoot>
		    <tbody>
			<tr>
				<td colspan="3"> 
				<a href="http://frank.pe/servicios.php" style="text-decoration: none;"><img src="http://frank.pe/imagenes/img-correo/foto-correo-vet.png" style="width: 100%;"></a>
				</td>
			</tr>
			<tr>
				<td> <a href="http://frank.pe/" style="text-decoration: none;"><img src="http://frank.pe/imagenes/img-correo/frank-pe.png" style="max-width:150px;"></a></td>
			</tr>
			<tr>
				<td style="font-size: 15px;line-height: 25px; text-align: justify">
				Buen Día señores :'.$Msj.', Mi nombre es frank campos soy Diseñador Web freelancer. nos gustaría ayudarle con la mejora de el diseño de su sitio web, para que de esa forma su negocio llegue a mas personas y pueda conseguir mas clientes, con nuestros planes que van desde los 500 soles usted podrá tener un sitio web amigable, rápido y efectivo , Puede Contactar con nosotros para mas información.
				</td>
			</tr>
			</tbody>
		</table>
	</div>
	</body>
</html>';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: Frank.pe <contacto@frank.pe>' . "\r\n";

if (mail($para,$asunto,$contenido,$cabeceras)) {
   header("location:index.html");
} else {
   header("location:index.html");
}
?>