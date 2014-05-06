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
					
					listar_enlaces_editable();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido"> 
        
        
        <?php
                    
                    $id_categ = $_POST["categoria_seleccionada"];
					$id_enlace=$_POST["enlace_seleccionado"];
                    
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   							
					$sql = "SELECT * FROM `enlace` WHERE `cod_enlace`=$id_enlace";
					$resultado2 = mysql_query($sql, $conexion)or die(mysql_error());
					$row=mysql_fetch_array($resultado2);
					$texto_enlace=$row['descripcion'];
					$url_enlace=$row['url'];
	
				
					
							
							
						//	  echo "$id_categ   </br> $id_enlace </br>  $url_enlace </br> $texto_enlace </br> ";
                            
									
							
					echo	'<form action=\"confirmar_edicion_enlace.php\" method=\"post\"> <div class=\"url_enlace\">Url:  <input type="text" name=\"url_editado\" value="'.$url_enlace.'" /></div><div class=\"descripcion_enlace\"> Descripción:  <input type="text" name=\"descripcion_editado\" value="'.$texto_enlace.'" /></div><input type="submit" value="Guardar" /></form>';		
                           
														
                    
                                            
                      
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                    
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>

</body>
</html>