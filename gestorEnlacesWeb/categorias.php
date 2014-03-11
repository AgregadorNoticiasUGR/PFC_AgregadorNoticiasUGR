<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jquery.js"></script>
</head>

<body>

	<?php
       
	   
	   
	   //Imprimo la plantilla de la estructura básica	
		
		
		echo "<div id=\"contenedor\">
				<header id=\"titulo\"></header>
				<article id=\"contenido\"></article>
				<nav id=\"navegador\"></nav>
				<footer id=\"piePagina\"></footer>
	</div>
	</br>";
		
		
		echo '<script type="text/javascript">
				var  tit=  $("#titulo");
				var  menu= $("#navegador");
				var  cont= $("#contenido");
				var  menu= $("#navegador");
				
				//Vista del menu de navegación
        		//Se utilizará en todas las vistas excepto en la portada inicial
        		var menu_navegacion="<div id=\"estilo_navegador\"><ul><li class=\"separador\"><a href=\"index.html\" id=\"atras\"><img src=\"atras-icono.png\"></a></li><li class=\"separador\"><a href=\"index.html\" id=\"desconexion\"><img src=\"desconexion-icono.png\"></a></li></ul></div>";
                
				//Vista inicial de la lista de categorias 
				var titulo_lista_categorias="<h1>Lista de categor&iacute;as:</h1>";
				var vista_inicio_categoria="";
		
				
				function muestra_lista_categorias(){
					tit.html(titulo_lista_categorias);
					menu.html(menu_navegacion);
					cont.html(vista_inicio_categoria);
					
				}
				
				muestra_lista_categorias();
			</script></br>';
    
    
    ?>
</body>
</html>