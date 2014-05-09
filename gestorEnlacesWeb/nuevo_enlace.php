<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="interface.js"></script>
<link href="estilo.css" rel="stylesheet" type="text/css">

<script type="text/javascript">


			
			$(function(){
					
					formulario_nuevo_enlace();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido"> 
        
        
        <?php
                    
                    $id_categ = $_POST["categoria_seleccionada"];
                    
                   				
							
					echo	"<form action=\"confirmar_nuevo_enlace.php\" method=\"post\"><input type=\"hidden\" name=\"id_categ\" value=\"$id_categ\" /> <div class=\"url\">Url:  <input type=\"text\" name=\"url_nuevo\"  /></div><div class=\"descripcion\"> Descripción:  <input type=\"text\" name=\"descripcion_nuevo\"  /></div><input type=\"submit\" value=\"Guardar\" /></form>";		
														
                                         
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>
</body>
</html>