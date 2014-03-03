// JavaScript Document

$(function(){
	
		var  tit= $("#titulo");
		var  menu= $("#navegador");
		var  cont= $("#contenido");
		var portada="<form action=\"\">Usuario: <input type=\"url\" name=\"usuario\" id=\"user\"><br>Contrase&ntilde;a: <input type=\"text\" name=\"password\" id=\"pass\"><br><input type=\"submit\" value=\"Enviar\"></form>";
		var titulo_portada="<h1>Inicio:</h1>"
		
		
		function enlazarMarcador(e){
			
					
		};
		
		function muestra_portada(){
			tit.html(titulo_portada);
			cont.html(portada);
		};
	
	
		
		muestra_portada();
	//	$("#inicializar").on('click',function(){ lista='';localStorage.ruta='';geolocalizar();}); 
		//$("#recargar").on('click',function(){ geolocalizar();}); 
		
	});
