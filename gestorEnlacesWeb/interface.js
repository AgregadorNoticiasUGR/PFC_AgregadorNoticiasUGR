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
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"index.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li id=\"opciones\"  class=\"separador\"><a href=\"#\" ><img src=\"opciones-icono.png\" title=\"Menú\"></a><ul><li class=\"nuevo\"><a href=\"nuevo_categoria.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_categoria.php\">Editar</a></li></ul></li></ul></div>";
           
		        
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
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_lista_enlaces);
				menu.html(menu_navegacion);
	};
	
	
	
	
		function listar_enlaces_editable(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_lista_enlaces="<h1>Lista de enlaces  -- Editar:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_lista_enlaces);
				menu.html(menu_navegacion);
		
		
		};
	
	
	
	function confirmar_enlace(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var confirmar_enlace="<h1>Lista de enlaces  -- Cambios realizados:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(confirmar_enlace);
				menu.html(menu_navegacion);
		
		
		};
	
	
		function borrar_enlace(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_borrar_enlace="<h1>Lista de enlaces  -- Borrar enlace:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_borrar_enlace);
				menu.html(menu_navegacion);
		
		
		};
		
		
		
		function formulario_nuevo_enlace(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_nuevo_enlace="<h1>Nuevo enlace:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_nuevo_enlace);
				menu.html(menu_navegacion);
		
		
		};
	
	
	function guardar_nuevo_enlace(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_nuevo_enlace="<h1>Nuevo enlace:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_nuevo_enlace);
				menu.html(menu_navegacion);
		
		
		};



function formulario_nueva_categoria(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_nueva_categoria="<h1>Nueva categoria:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_nueva_categoria);
				menu.html(menu_navegacion);
		
		
		};
		
		
function guardar_nueva_categoria(){
			
			
			//Inicialización de variables
				
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
				
			//Vista inicial de la lista de enlaces 
			var titulo_nuevo_enlace="<h1>Nuevo enlace:</h1>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"categorias.php\" id=\"atras\" title=\"Atrás\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.php\" id=\"desconexion\" title=\"Desconectar\"><img src=\"desconexion-icono.png\"></a></li><li class=\"separador\"><a href=\"#\" id=\"opciones\" title=\"Menú\"><img src=\"opciones-icono.png\" ></a><ul><li class=\"nuevo\"> <a href=\"nuevo_enlace.php\">Nuevo</a></li><li class=\"editar\"> <a href=\"editar_enlace.php\">Editar</a></li></ul></li></ul></div>";
	
		
				
				tit.html(titulo_nuevo_enlace);
				menu.html(menu_navegacion);
		
		
		};
