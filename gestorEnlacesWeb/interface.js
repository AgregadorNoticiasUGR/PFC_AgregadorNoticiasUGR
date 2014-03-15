// JavaScript Document

	$(function(){
		
		
			var plantilla="<div id=\"contenedor\"><header id=\"titulo\">header>article id=\"contenido\"></article><nav id=\"navegador\"></nav><footer id=\"piePagina\"></footer></div>;"
	
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
			
			
//------------Código html de cada vista de la inerface
//
//
	
	
			//Vista inicial de portada
			var titulo_portada="<h1>¡Bienvenido!</h1>"
			var vista_portada="<h3>Esta plataforma sirve para acceder como administrador del servicio de gestión de enlaces, de la aplicación: Agregador de noticias UGR</3></br><h4>Si desea continuar pulese en <em>Siguiente</em></h4><button type=\"button\" id=\"siguiente\">Siguiente</button>";
			
			
			//Vista inicial de registro
			var titulo_registro="<h1>Inicio:</h1>"
			var vista_registro="<form action=\"registro.php\" method=\"post\">Usuario: <input type=\"text\" name=\"usuario\" id=\"user\"><br>Contrase&ntilde;a: <input type=\"password\" name=\"password\" id=\"pass\"><br><input id=\"btn_registro\" type=\"submit\" value=\"Enviar\"></form>";
			
			
			//Vista del menu de navegación
        	//Se utilizará en todas las vistas excepto en la portada inicial
        	var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"index.html\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li></ul></div>";
                
			//Vista inicial de la lista de categorias 
			var titulo_lista_categorias="<h1>Lista de categor&iacute;as:</h1>";
	
		
				
			function muestra_lista_categorias(){
				tit.html(titulo_lista_categorias);
				menu.html(menu_navegacion);
			}
				
			
			function muestra_registro(){
				tit.html(titulo_registro);
				cont.html(vista_registro);
			};
			
			
			function muestra_portada(){
				tit.html(titulo_portada);
				cont.html(vista_portada);
			};
			
			
		
		
			//Página inicial antes de entrar en la aplicación
			muestra_portada();
			
			
			
			
			//Interface inicial para autentificar al usuario
			$("#siguiente").on('click',function(){muestra_registro();}); 
			
			
			//Interface inicial para mostrar todas las categorias registradas en el sistema
			$("#btn_registro").on('submit',function(){muestra_lista_categorias();}); 
		
			
			
		
	});
