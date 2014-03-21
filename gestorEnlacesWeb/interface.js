// JavaScript Document

	

	//Interface inicial que muestra todas las categorias registradas en el sistema
	//
	//
	//
	
	function muestra_lista_categorias(){
			//Inicialización de variables
			
				var  tit=  	$("#titulo");
				var  menu= 	$("#navegador");
				var  cont= 	$("#contenido");
				var  menu= 	$("#navegador");
				var pag_ant=localStorage.pag_anterior;
				
				
				
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"pag_ant\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li></ul></div>";
           
		        
			//Vista inicial de la lista de categorias 
			var titulo_lista_categorias="<h1>Lista de categor&iacute;as:</h1>";
				
			tit.html(titulo_lista_categorias);
			menu.html(menu_navegacion);
	};
			
			
	//Interface inicial para autentificar al usuario
	//
	//
	//			
	function muestra_registro(){
		
		//Inicialización de variables
			
				var  tit=  	$("#titulo");
				var  menu= 	$("#navegador");
				var  cont= 	$("#contenido");
				var  menu= 	$("#navegador");
				
			//	Vista inicial de registro
			var titulo_registro="<h1>Inicio:</h1>"
			var vista_registro="<form action=\"registro.php\" method=\"post\">Usuario: <input type=\"text\" name=\"usuario\" id=\"user\"><br>Contrase&ntilde;a: <input type=\"password\" name=\"password\" id=\"pass\"><br><input id=\"btn_registro\" type=\"submit\" value=\"Enviar\"></form>";
				
				
				
		tit.html(titulo_registro);
		cont.html(vista_registro);
	};
	
	
	
	
	//Interface inicial que muestra todas los enlaces registradas en el sistema asociados a la categoria seleccionada
	//
	//
	//
	function muestra_lista_enlaces(){
		
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_lista_enlaces="<h1>Lista de enlaces:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"$localStorage.pag_anterior\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li></ul></div>";
	
		
				
				tit.html(titulo_lista_enlaces);
				menu.html(menu_navegacion);
	};
			

