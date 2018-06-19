<?php
$para=$_POST['destinatario'];
$asunto=$_POST['asunto'];
$Msj=$_POST['message'];
$contenido = '<html>
	<head>
	<title>Frank.pe</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body style="font-family: "Roboto", sans-serif;">
		<div class="padre" style="margin:auto; max-width:600px;">
		  <table style="width:100%">
    <thead style="-webkit-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);
box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.75);">
        <tr>
            <th colspan="4"><a href="http://frank.pe/" target="_blank"><img src="http://frank.pe/imagenes/img-correo/frank-pe.png" style="width:50%; max-width:300px;"></a></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="4" style="text-align:center;background-color:#181818; color: white;padding: 20px;">
            Copyright © 2017 - Frank.pe - Todos los Derechos Reservados. <br>
            <a href="http://frank.pe/" style="text-decoration: none;">Frank.pe</a>
            
            </td>
        </tr>
    </tfoot>  
    <tbody>
        <tr>
        <td style="font-size:20px; text-align:center;padding:5px; line-height:30px;">
      Buen Día señores :'.$Msj.', Mi nombre es frank campos soy Diseñador Web freelancer.
        Nos gustaría ayudarle con la mejora de el diseño  de su sitio web, ya que el diseño de su sitio web es muy importante para poder captar nuevos clientes, este es la carta de presentación de su negocio por tanto hay que prestarle muchísima atención, por esta razón hemos creado planes que van desde los 500 soles, usted podrá tener un sitio web amigable, rápido y efectivo , 
        Puede <a href="http://frank.pe/contacto.php" style="color:#1ED760;">Contactar</a> con nosotros para mas información.
        </td>
        </tr>
        <tr>
        <td style="padding: 5px;">
        <a href="http://frank.pe/servicios.php"><img src="http://frank.pe/imagenes/img-correo/foto-correo.png" style="width: 100%;"></a>
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