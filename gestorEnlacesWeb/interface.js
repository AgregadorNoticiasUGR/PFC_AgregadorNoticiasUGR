// JavaScript Document

	$(function(){
	
			var  tit=  $("#titulo");
			var  menu= $("#navegador");
			var  cont= $("#contenido");
			var  menu= $("#navegador");
			
			
//------------Código html de cada vista de la inerface
//
//
	
	
			//Vista inicial de portada
			var titulo_portada="<h1>Inicio:</h1>"
			var vista_portada="<form action=\"registro.php\" method=\"post\">Usuario: <input type=\"text\" name=\"usuario\" id=\"user\"><br>Contrase&ntilde;a: <input type=\"password\" name=\"password\" id=\"pass\"><br><input type=\"submit\" value=\"Enviar\"></form>";
			
		
			
			
			
			function muestra_portada(){
				tit.html(titulo_portada);
				cont.html(vista_portada);
			};
			
			
		
		
			
			muestra_portada();
		
	});
