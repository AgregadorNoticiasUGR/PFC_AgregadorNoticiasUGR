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
					
					muestra_lista_enlaces();
					
			}); 


</script>

<script language="JavaScript">
	function confirmar ( mensaje ) {
		return confirm( mensaje );
	}
</script>


</head>

<body>

<div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">


				<?php
                    
                    $id_categ = $_POST["id_categoria"];
                    $nombre_categ = $_POST["nombre_categoria"];
                    
                    echo "<h2>Categoria seleccionada: <em>$nombre_categ</em></h2></br>";
					
					
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                
					
					
					//Muestro el boton para pasar al formulario de nuevo enlace
					echo	"<form action=\"nuevo_enlace.php\" method=\"post\"><input type=\"hidden\" name=\"categoria_seleccionada\" value=$id_categ /><input  type=\"submit\" value=\"Nuevo\"  /></form>";
                    
                    
                    //Buscamos todos los enlaces relacionados con esta categoria
                    $sql = "SELECT `cod_enlace` FROM `pertenece` WHERE `cod_categoria`=$id_categ ";
                    $resultado = mysql_query($sql, $conexion)or die(mysql_error());
                    
                    
                    
                    
                    $totFilas = mysql_num_rows($resultado);
					
                        
                    if($totFilas==0){
                                
                        echo "<h4>No se existe ningun enlace que mostrar.</h4>";
                            
                    }else{
                        
                       
                        while ($row=mysql_fetch_array($resultado)) 
                        {	
                            
                            $id_enlace=$row['cod_enlace'];
														
                            $sql = "SELECT * FROM `enlace` WHERE `cod_enlace`=$id_enlace";
                            $resultado2 = mysql_query($sql, $conexion)or die(mysql_error());
                            $row=mysql_fetch_array($resultado2);
                            $text_enlace=$row['descripcion'];
                            $url_enlace=$row['url'];
							
                            echo "<div class=\"elemento_lista\">Descripción: <p class=\"descripcion\" >$text_enlace</p>Url:<a href=\"$url_enlace\" class=\"url\">$url_enlace</a></div> ";
							echo	"<form action=\"editar_enlace.php\" method=\"post\"><input type=\"hidden\" name=\"categoria_seleccionada\" value=$id_categ /><input type=\"hidden\" name=\"enlace_seleccionado\" value=$id_enlace /><input type=\"hidden\" name=\"texto_enlace_seleccionado\" value=$text_enlace /><input type=\"hidden\" name=\"url_enlace_seleccionado\" value=$url_enlace /><input type=\"submit\" value=\"Editar\" /></form>";
							echo	"<form action=\"borrar_enlace.php\" method=\"post\" onsubmit=\"return confirmar('¿Seguro que desea eliminar el enlace: $url_enlace ?')\"><input type=\"hidden\" name=\"categoria_seleccionada\" value=$id_categ /><input type=\"hidden\" name=\"enlace_seleccionado\" value=$id_enlace /><input type=\"hidden\" name=\"texto_enlace_seleccionado\" value=$text_enlace /><input type=\"hidden\" name=\"url_enlace_seleccionado\" value=$url_enlace /><input type=\"submit\" value=\"Borrar\" /></form>";
                                            
                        }
						
                          // Cerrar la conexión
                    mysql_close($conexion);
                        
                    }
                    
                  
                    
                ?>
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>

</body>
</html>