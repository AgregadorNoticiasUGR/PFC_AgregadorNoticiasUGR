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
					
					borrar_enlace();
					
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
					
					



                    
                   							
					$sql1 = "DELETE FROM `pertenece`  WHERE  `cod_enlace`=$id_enlace AND `cod_categoria`=$id_categ";
					mysql_query($sql1, $conexion)or die(mysql_error());
					
					
					$sql2 = "SELECT * FROM `pertenece` WHERE `cod_enlace`=$id_enlace";
                    $resultado2 = mysql_query($sql2, $conexion)or die(mysql_error());
                    
                  
                    
                    
                    $totFilas = mysql_num_rows($resultado2);
                    
                    
                    
                    if($totFilas==0){
						$sql3 = "DELETE FROM `enlace`  WHERE  `cod_enlace`=$id_enlace ";
						mysql_query($sql3, $conexion)or die(mysql_error());
						
						echo "<p class=\"mensaje\" >Enlace borrado de la base de datos. No existe ninguna asociación del enlace con otra categoría";
					}else{
						
						echo "<p class=\"mensaje\" >Borrada de la base de datos la asociación de este enlace con la categoría seleccionada. Existe asociación de este enlace con otra categoría";
						
					}
	
			
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                    
                ?> 
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>
</body>
</html>