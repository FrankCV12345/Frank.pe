<!DOCTYPE html>
<html>
    <head>
        <title>Servicios | frank.pe</title>
        <?php require_once'head.php'; ?>
    </head>
    <body  onscroll="Alto()">
	<!--CONTENEDOR PADRE-->
		<div class="full-screem" >
		 <!--CONTENEDOR DE EL CONTENIDO DE LA PAGINA-->
		  <div class="contenedor">
			<?php
			  require_once'items_menu.php';
		      require_once'Menu-pc.php';
		     ?>
		     <div class="cont-first-box">
		         <img src="portada-servicios.jpeg" class="portada-servicios" id="portada-servicios-pc">
		         <img src="portada-servicios-movil.jpeg" class="portada-servicios" id="portada-servicios-movil">
		         <div class="frase-first-box">  
	               SERVICIOS
	             </div>
		     </div>
		     <div class="cont-second-box">
        		<div class="cont-servicios">
		         <div class="items-servicios">
                 <img  src="https://docs.google.com/drawings/d/1Zy0YmLY6Y4N3WPQAHm8AvjlgQJNX5KTTFllb-ZCFb3A/pub?w=400&amp;h=400">
                 <p> Desarrollo de sistemas como sistemas de inventarios  o aplicaciones web par aumentar la productividad de su negocio</p>
                 </div>
                  <div class="items-servicios">
                 <img src="imagenes/iconos/diseño-web.png">
                 <p>Diseño de paginas web completamente adaptables a cualquier dispositivo, para que su negocio tenga presencia en internet. </p>
                 </div>
                 <div class="items-servicios">
                 <img src="imagenes/iconos/community-manager.png"> 
                 <p>Administración de sitios web y redes sociales</p>
                 </div>
                  <div class="items-servicios">
                 <img src="imagenes/iconos/e-comerce.png"> 
                 <p>Desarrollo de tiendas online,ventas a traves de internet </p>
                 </div>
                 </div>
		     </div>
		   </div> 
		     <?php
			require_once'Footer.php';
			?>
		</div>
			<div class="contacto-fb" onclick="DespliegaFB()"><!--<img id="logo-men" src="002-mensajero.png">-->
		 <spam id="abre_mens">Contactar por facebook</spam>
		 <spam id="cierra_mens">Cerrar</spam>
		<div id="cont-men-fb">
		<iframe id="men-fb" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWebDesignFrank%2F&tabs=messages&width=250&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1509381392478385" width="250" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>
		</div>
		     </body>
</html>