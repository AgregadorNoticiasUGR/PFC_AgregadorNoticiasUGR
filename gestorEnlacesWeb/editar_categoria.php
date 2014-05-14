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
					
					editar_categoria();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido"> 
        
        
        <?php
                    
                    $id_categ = $_POST["categoria_seleccionada"];
                    
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   							
					$sql = "SELECT * FROM `categoria` WHERE `cod_categoria`=$id_categ";
					$resultado2 = mysql_query($sql, $conexion)or die(mysql_error());
					$row=mysql_fetch_array($resultado2);
					$nombre_categoria=$row['nom_categoria'];
	
				
					
							
                            
									
							
					echo	"<form action=\"confirmar_categoria.php\" method=\"post\"><input type=\"hidden\" name=\"id_categoria\" value=\"$id_categ\" /> <div class=\"nombre_categoria\">Nombre categoría:  <input type=\"text\" name=\"nombre_editado\" value=\"$nombre_categoria\" /></div><input type=\"submit\" value=\"Guardar\" /></form>";		
                           
														
                    
                                            
                      
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                    
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>

</body>
</html>