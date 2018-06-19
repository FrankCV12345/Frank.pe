<!DOCTYPE html>
<html>
    <head>
        <title> Sobre mi | Frank.pe </title>
        	<?php require_once'head.php';?>
    </head>
    <body onscroll="Alto()">
	<!--CONTENEDOR PADRE-->
		<div class="full-screem">
		 <!--CONTENEDOR DE EL CONTENIDO DE LA PAGINA-->
			<div class="contenedor">
			<?php
			  require_once'items_menu.php';
		      require_once'Menu-pc.php';
		     ?>
		     <div class="cont-first-box">
		         <img src="portada-mas-sobre-mi.jpeg" class="portada-mas-sobre-mi" id="portada-pc">
		         <img src="portada-mas-sobre-mi-movil.jpeg" class="portada-mas-sobre-mi" id="portada-movil"> 
	         <div class="frase-first-box">  
	         Imagine cuantas personas 
	         navegan por internet,  ahora imagina
	         cuantas de esas  personas pueden ser tus clientes
	        
	         </div>
		     </div>
		     <div class="cont-second-box">
		              <div class="cont-sobre-mi">
		          <img src="https://scontent.flim5-1.fna.fbcdn.net/v/t1.0-9/30571393_1608714659224168_7553928621447281746_n.jpg?_nc_cat=0&_nc_eui2=v1%3AAeGA3VtATKqhtDGE2C266_idKAllHxRYnjaXcYRJV-6Xwram3SacrDz2nAj7hGhQwQ_BSBu2bPgOMrXtb0EOfLjUgjPxsazrNkWIF5FqSpc1eA&oh=28a4380f69d17ae10aec0ac6d4ef7144&oe=5B5897ED" class="mi-avatar">
		         <p class="sobre-mi-parrafo">¡Hola! 

Me llamo Frank campos, soy un diseñador/desarrollador web freelance trabajo con pequeñas empresas que necesitan conseguir clientes en internet gracias a una web profesional que transmita confianza.

Crearé tu web para que posicione bien en Google gracias a un desarrollo muy optimizado y un diseño simple e intuitivo. Tendrás una web segura y rápida para que puedas centrarte en vender.</p>
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