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
					
					guardar_nuevo_enlace();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">  
        
        
        <?php
                    
                    $id_categ = $_POST["id_categ"];
					$texto_enlace=$_POST["descripcion_nuevo"];
					$url_enlace=$_POST["url_nuevo"];
                    
					
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   		
					//Compruebo que no existe PREVIAMENTE en la BD esa url asociada	a esa categoría
											
					$sql = "SELECT * FROM enlace,pertenece WHERE pertenece.cod_categoria=$id_categ and enlace.url=\"$url_enlace\" and pertenece.cod_enlace= enlace.cod_enlace";
					
					$resultado = mysql_query($sql, $conexion)or die(mysql_error());
                    
                  
                    
                    $totFilas = mysql_num_rows($resultado);
                    
					
                    
                    if($totFilas==0){
					
					
					
						//Compruebo que no existe PREVIAMENTE en la BD esa url en la tabla enlace(asociada a otra categoria)
											
						$sql5 = "SELECT * FROM enlace WHERE url=\"$url_enlace\" ";
						
						$resultado5 = mysql_query($sql5, $conexion)or die(mysql_error());
						
					  
						
						$totFilas2 = mysql_num_rows($resultado5);
						
						
						//Si no existia previamente ese enlace en la BD
						if($totFilas2==0){
							
							
							//Obtengo el código del enlace en la tabla `enlace `  
						$sql3 =  "SELECT max(`cod_enlace`) AS `maximo` FROM `enlace` ";
						$resultado3 = mysql_query($sql3, $conexion)or die(mysql_error());
						
						
						$nuevo_enlace=mysql_fetch_array($resultado3);
						
						//Identificador del nuevo enlace
						
						$id_nuevo_enlace=$nuevo_enlace['maximo']+1  ;
						
						
							
							//Introduzco la información del enlace en la tabla enlace
							$sql2 = "INSERT INTO enlace( cod_enlace, url, descripcion) VALUES ($id_nuevo_enlace,\"$url_enlace\",\"$texto_enlace\" )";
							mysql_query($sql2, $conexion)or die(mysql_error());
														
						}
						
						
						
						
						
						echo "El ide nuevo  del enlece es:   $id_nuevo_enlace";
						
						
						//Introduzco en la tabla pertenece el codigo del enlace y de la cateogoría. 
						$sql4 = "INSERT INTO pertenece( cod_categoria, cod_enlace) VALUES (\"$id_categ\",\"$id_nuevo_enlace\")";
						mysql_query($sql4, $conexion)or die(mysql_error());


						//Si todo ha ido bien tenemos un nuevo enlace único asociado a la categoria seleccionada
						echo "<p class=\"mensaje\" >La URL y su descripción se han registrado en la categoría seleccionada satisfactoriamente.";
					}else{
						
						echo "<p class=\"mensaje\" >Esta URL ya esta registrada en la misma categoria. No se efectuarán cambios en la base de datos.";
						
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