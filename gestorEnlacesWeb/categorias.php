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
       
	   
	   
	   //Imprimo el codigo de la plantilla de  estructura básica de html 
		
		
		echo "<div id=\"contenedor\">
				<nav id=\"navegador\"></nav>
				<header id=\"titulo\"></header>
				<article id=\"contenido\"></article>
				<footer id=\"piePagina\"></footer>
	</div>
	</br>";
		
		
		//Código javascript del mismo estilo al que se usa en el fichero interface.js
		
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
			</script>';
			
			
			
			$conexion = mysql_connect("127.0.0.1", "root", "");
			mysql_select_db("enlaces_ugr_db", $conexion);
			
			$sql = "SELECT * FROM `categoria`";
			$resultado = mysql_query($sql, $conexion)or die(mysql_error());
			
			
			$totFilas = mysql_num_rows($resultado);
			
			if($totFilas==0){
					
				echo "<h4>No se existe ninguna categor&iacute;a que mostrar.</h4>";
				
			}
			else{
				
							
				echo "<form action=\"enlaces.php\" method=\"post\" id=\"listado_categorias\">";
				while ($row=mysql_fetch_array($resultado)) 
				{	
				
					echo '<div class="elemento_lista"><input type="submit" value= "'.$row['nom_categoria'].'" name= "categoria"></div> ';
				}
				
				echo "</form>";
			}
    
    
    ?>
</body>
</html>