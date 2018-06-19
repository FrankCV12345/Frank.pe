var bandera = false;
var banderaMenu = false;
var banderaAportes = false;
var firstLine = document.getElementsByClassName('first-line');
var secondLine = document.getElementsByClassName('second-line');
var thirdLine = document.getElementsByClassName('third-line');
var firstLineExis = document.getElementsByClassName('first-line-exis');
var secondLineExis = document.getElementsByClassName('second-line-exis');

function Menu(){
    var Boxmenu = document.getElementsByClassName('box-menu');
    var BoxmenuExis = document.getElementsByClassName('box-menu-exis');
    var items_menu = document.getElementsByClassName('envol-cont-items-menu');
    if (banderaMenu == false ){
    Boxmenu[0].style.display="none";
    BoxmenuExis[0].style.display="block";
    items_menu[0].style.marginTop="0px";
    banderaMenu=true;
         }
         else{
    Boxmenu[0].style.display="block";
    BoxmenuExis[0].style.display="none";
    items_menu[0].style.marginTop="-300%";
    banderaMenu=false;
         }
}
function Alto(){
	 var Box = document.getElementsByClassName('cont-first-box');
	 var AltoFirstBox = Box[0].scrollHeight;
	 var menu = document.getElementsByClassName('menu-pc');
	 var item_cont = document.getElementsByClassName('items-contacto');
	 if(document.documentElement.scrollTop >= (AltoFirstBox-50) || document.body.scrollTop >= (AltoFirstBox-50)){
		 menu[0].style.backgroundColor = "white";
		 menu[0].style.boxShadow = " 2px 2px 2px 0px rgba(0,0,0,0.5)";
		 item_cont[0].style.color = "black";
		 var logo = document.getElementById('logo-frank').src ="https://docs.google.com/drawings/d/e/2PACX-1vTWmBpQxG-Ar_x9D0ty2rAgVcFpb4hsmgI_FyjpoQ3OANHz8m0H08NVVkE_C1fHyV-HZbQs_0zW0AWP/pub?w=100&amp;h=50";
		 firstLine[0].style.backgroundColor = "#181818";
		 secondLine[0].style.backgroundColor = "#181818";
		 thirdLine[0].style.backgroundColor = "#181818";
		 firstLineExis[0].style.backgroundColor = "#181818";
		 secondLineExis[0].style.backgroundColor = "#181818";
		}
	 else{
		 menu[0].style.backgroundColor = "transparent";
		 item_cont[0].style.color = "white";
		 menu[0].style.boxShadow = " 0px 0px 0px 0px rgba(0,0,0,0.75)";
		 var logo = document.getElementById('logo-frank').src ="https://docs.google.com/drawings/d/e/2PACX-1vSBiCcOT5oqg8jOau3ilxPi_it0-X8RZXnQOJfPYMAQfmp8dVlP0psi6lG64yhQi_iE0ELa7eeVbJoF/pub?w=100&amp;h=50";
		 firstLine[0].style.backgroundColor = "white";
		 secondLine[0].style.backgroundColor = "white";
		 thirdLine[0].style.backgroundColor = "white";
		 firstLineExis[0].style.backgroundColor = "white";
		 secondLineExis[0].style.backgroundColor = "white";
		  
	 }
 }
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
 function DespliegaAportes(){
     var cont_aportes= document.getElementsByClassName('mis-aportes-list');
     if(banderaAportes==false){
      cont_aportes[0].style.marginTop ="0%";
      banderaAportes=true;
        }
        else{
      cont_aportes[0].style.marginTop ="-200%";
       banderaAportes=false;
        }
 }
