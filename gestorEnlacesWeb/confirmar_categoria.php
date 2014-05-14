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
					
					confirmar_enlace();
					
			}); 


</script>


</head>

<body>

    <div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">  
        
        
        <?php
                    
                    $id_categ = $_POST["id_categoria"];
					$nombre_categ=$_POST["nombre_editado"];
                    
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   		
											
					$sql = "UPDATE  `categoria` SET  `nom_categoria`=\"$nombre_categ\" WHERE `cod_categoria`=$id_categ";
					$sqlUpdate = mysql_query($sql,$conexion ) or die(mysql_error());
			
														
                    echo "La categoría  se ha modificado satisfactoriamente.  Nombre intoducido:  $nombre_categ";
                                            
                      
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                    
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>

</body>
</html>