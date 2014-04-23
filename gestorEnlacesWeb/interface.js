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
				
				
				
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"index.php\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li><li id=\"opciones\" class=\"separador\"><a href=\"#\" ><img src=\"opciones-icono.png\"></a><ul><li><a href=\"nuevo_categoria.php\">Nuevo</a></li><li> <a href=\"editar_categoria.php\">Editar</a></li></ul></li></ul></div>";
           
		        
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
			var vista_registro="";
				
				
				
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
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\"><img src=\"opciones-icono.png\"></a><ul><li> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_lista_enlaces);
				menu.html(menu_navegacion);
	};
	
	
	//Interface para detallar la informacion del enlace seleccionado
	//
	//
	//
	function muestra_enlace(){
		
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_enlace="<h1>Detalle de enlace:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"enlaces.php\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\"><img src=\"opciones-icono.png\"></a></li></ul></div>";
	
		
				
				tit.html(titulo_enlace);
				menu.html(menu_navegacion);
	};
			

