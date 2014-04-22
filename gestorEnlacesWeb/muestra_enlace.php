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
					
					muestra_enlace();
					
			}); 


</script>


</head>

<body>

	<div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">
        <?php
                    
                    $info = $_POST["enlace"];
                    
                    
                    $conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
                    mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
                    mysql_set_charset('utf8');
                    
                    //Sacamos toda la información del enlace seleccionado
                    $sql = "SELECT * FROM `enlace` WHERE `descripcion`=\"$info\"";
                    $resultado = mysql_query($sql, $conexion) or die('Consulta fallida: ' . mysql_error());
                    $row=mysql_fetch_array($resultado);
                                           
                    $link_enlace=$row['url'];
                    $text_enlace=$row['descripcion'];
                    
					echo "<div class=\"enlace\">
								<p>Descripci&oacute;n: <span class=\"descripción\">$text_enlace</span> </p> 
								<p>Url: <span class=\"enlace\">$link_enlace</span> </p> 
							</div> ";
                    
                    // Cerrar la conexión
                    mysql_close($conexion);
                  
		?>
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>


</body>
</html>