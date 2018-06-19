<!DOCTYPE html>
<html>
    <head>
        <title>Contacto | Frank.pe</title>
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
		         <img src="portada-contacto.jpeg" class="portada-contacto"  id="porata-contacto-pc">
		         <img src="portada-contacto-movil.jpeg" class="portada-contacto" id="porata-contacto-movil" >
		         <div class="frase-first-box">  
	        CONTACTO
	        <h5>Hablemos sobre su proyecto</h5>
	         </div>
		     </div>
		      <div class="cont-second-box">
		       <div class="padre-cont-form">
		        <div class="hijo-cont-form">
		            <div class="cont-info">
                     <h1>Información de Contacto</h1>
                     <p>Si desea recibir un presupuesto sobre, diseño de paginas web, desarrollo de sistemas web, o algún otro proyecto en especifico puede contactarme llenando el formulario 
                     de contacto o  puede enviarme un mensaje a traves de <a href="https://www.facebook.com/WebDesignFrank/" target="_blank">Facebook </a>.
                     Una ves haya llenado y enviado el formulario me contactare con usted en un plazo máximo de 24 horas.
                     
                     </p>
                 </div>
	             <div class="Cont-form">
                   <form action="enviar.php" method="post" class="FrmContacto">
                    <h1 style="margin:10px;">PIDA UN PRESUPUESTO  AHORA</h1>
                      <input type="text"  name="TxtNombre" placeholder="Ingrese nombre" required class="cajas-form">
                      <input type="text"  name="TxtApellidos" placeholder="Ingrese  apellidos" required class="cajas-form">
                      <input type="email" name="Txtcorreo" placeholder=" ingrese su correo electronico " required class="cajas-form">
                      <input type="number" name="TxtTelefono" placeholder="ingrese su numero de telefono o celular" required class="cajas-form">
                      <textarea name="message" placeholder="Escriba aqui su mesaje"  required class="mensaje" ></textarea>
                      <input type="submit" value="ENVIAR MENSAJE" name="Btnenviar" class="BtnEnviar">
                  </form>
                 </div>
                </div>
               </div>
		     </div>
		     </div>
		     <?php
			require_once'Footer.php';
			?>
		 </div>
        
    </body>
</html>