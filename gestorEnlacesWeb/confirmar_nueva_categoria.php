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
					
					guardar_nueva_categoria();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">  
        
        
        <?php
                    
					$nombre_categoria_nueva=$_POST["nueva_categoria"];
                    
					
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   		
					//Compruebo que no existe PREVIAMENTE en la BD otra categoría con el mismo nombre
											
					$sql = "SELECT * FROM categoria WHERE nom_categoria=\"$nombre_categoria_nueva\"";
					
					$resultado = mysql_query($sql, $conexion)or die(mysql_error());
                    
                  
                    
                    $totFilas = mysql_num_rows($resultado);
                    
					
                    
                    if($totFilas==0){
						//Introduzco el nombre de categoria en la tabla categoria
						$sql2 = "INSERT INTO categoria( nom_categoria ) VALUES (\"$nombre_categoria_nueva\" )";
						mysql_query($sql2, $conexion)or die(mysql_error());
						
						//Si todo ha ido bien tenemos un nuevo enlace único asociado a la categoria seleccionada
						echo "<p class=\"mensaje\" >La nueva categoria  se han registrado satisfactoriamente.";
					}else{
						
						echo "<p class=\"mensaje\" >Este nombre de categoría ya está registrado. No se efectuarán cambios en la base de datos.";
						
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