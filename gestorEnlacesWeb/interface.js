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
			
			//Vista del menu de navegación
			//Se utilizará en todas las vistas excepto en la portada inicial
			var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"#\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li></ul></div>";
			
			//Vista inicial de la lista de categorias 
			var titulo_lista_categorias="<h1>Lista de categor&iacute;as:</h1>";
			var vista_inicio_categoria="";
			
			
			
			function muestra_portada(){
				tit.html(titulo_portada);
				cont.html(vista_portada);
			};
			
			function muestra_lista_categorias(){
				tit.html(titulo_lista_categorias);
				menu.html(menu_navegacion);
				cont.html(vista_inicio_categoria);
			};
		
		
			
			muestra_portada();
		
	});
