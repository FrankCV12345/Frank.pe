
 $(document).ready(function(){
    $(".controles").click(function(){
        alert("hola");
    });
});
var bandera = false;
 function DespliegaFB(){
	  var cont_men_fb = document.getElementById('cont-men-fb');
	  var tituloAbre = document.getElementById('abre_mens');
	  var tituloCierra = document.getElementById('cierra_mens');
	 if( bandera == false){
	 cont_men_fb.style.display = "block";
	 /*logo_men_fb.style.display = "none";*/
	 tituloAbre.style.display = "none";
	 tituloCierra.style.display ="block";
		 bandera = true;
	 }
	 else{
	 cont_men_fb.style.display = "none";
	 tituloAbre.style.display = "block";
	 tituloCierra.style.display ="none";
	 /*logo_men_fb.style.display = "block";*/
	 bandera = false;
	 }
 }