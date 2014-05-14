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
					
					borrar_categoria();
					
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
					
					



                    
					
					
					$sql2 = "SELECT * FROM `pertenece` WHERE `cod_categoria`=$id_categ";
                    $resultado2 = mysql_query($sql2, $conexion)or die(mysql_error());
                    
                  
                    
                    
                    $totFilas = mysql_num_rows($resultado2);
                    
                    
                    
                    if($totFilas==0){
						$sql3 = "DELETE FROM `categoria`  WHERE  `cod_categoria`=$id_categ ";
						mysql_query($sql3, $conexion)or die(mysql_error());
						
						echo "<p class=\"mensaje\" >Categoria borrada satisfactoriamente. No existía ningun enlace asociado a esta categoria.";
					}else{
						
						echo "<p class=\"mensaje\" >No se pudo borrar la categoria seleccionada. Compruebe que no existen enlaces asociados a esta categoría";
						
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