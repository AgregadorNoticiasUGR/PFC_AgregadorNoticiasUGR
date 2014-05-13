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
					
					formulario_nueva_categoria();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido"> 
        
        
        <?php
                    
                    
                   				
							
					echo	"<form action=\"confirmar_nueva_categoria.php\" method=\"post\"><div class=\"nombre_categoria\"> Nombre categoria:  <input type=\"text\" name=\"nueva_categoria\"  /></div><input type=\"submit\" value=\"Guardar\" /></form>";		
														
                                         
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>
</body>
</html>