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
					$id_enlace=$_POST["id_enlace"];
					$texto_enlace=$_POST["descripcion_editado"];
					$url_enlace=$_POST["url_editado"];
                    
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                   		
											
					//$sql = "UPDATE  `enlace` SET  `url`=$url_enlace,`descripcion`=$texto_enlace WHERE `cod_enlace`=$id_enlace";
					 mysqli_query($conexion, "UPDATE  `enlace` SET  `url`=$url_enlace,`descripcion`=$texto_enlace WHERE `cod_enlace`=$id_enlace") ;
			
														
                    echo "El enlace: $id_enlace, se ha modificado satisfactoriamente.  Texto intoducido:  $texto_enlace  y url introducida: $url_enlace";
                                            
                      
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                    
                ?> 
        
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>

</body>
</html>