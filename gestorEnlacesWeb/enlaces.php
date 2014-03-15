<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="interface.js"></script>

<link href="estilo.css" rel="stylesheet" type="text/css">
</head>
</head>

<body>



	<?php
		
        $categ = $_POST["categoria"];
		
		echo "Categoria leida en enlaces.php $categ </br>";
		
		$conexion = mysql_connect("127.0.0.1", "root", "") or die('No se pudo conectar: ' . mysql_error());
        mysql_select_db("enlaces_ugr_db", $conexion) or die('No se pudo seleccionar la base de datos');
		mysql_set_charset('utf8');
		
		//Sacamos el codigo de la categoria seleccionada
		$sql = "SELECT `cod_categoria` FROM `categoria` WHERE `nom_categoria`=\"$categ\"";
        $resultado = mysql_query($sql, $conexion) or die('Consulta fallida: ' . mysql_error());
		$row=mysql_fetch_array($resultado);
		$id_categ=$row['cod_categoria'];
		
		
		//Buscamos todos los enlaces relacionados con esta categoria
        $sql = "SELECT `cod_enlace` FROM `pertenece` WHERE `cod_categoria`=$id_categ ";
        $resultado = mysql_query($sql, $conexion)or die(mysql_error());
		
		echo "Los enlaces almacenados  para la categoria: $id_categ </br>";
		
		
		
		$totFilas = mysql_num_rows($resultado);
			
		if($totFilas==0){
					
			echo "<h4>No se existe ningun enlace que mostrar.</h4>";
				
		}else{
			
			echo "<form action=\"muestra_enlace.php\" method=\"post\" id=\"listado_enlaces\">";
			
			while ($row=mysql_fetch_array($resultado)) 
			{	
				
				$id_enlace=$row['cod_enlace'];
				$sql = "SELECT * FROM `enlace` WHERE `cod_enlace`=$id_enlace";
				$resultado = mysql_query($sql, $conexion)or die(mysql_error());
				$row=mysql_fetch_array($resultado);
				$text_enlace=$row['descripcion'];
				echo "<div class=\"elemento_lista\"><input type=\"submit\" value= $text_enlace name= \"enlace\"></div> ";
								
			}
			
			echo "</form>";
		}
		
		// Cerrar la conexión
		mysql_close($conexion);
        
        
        
	?>

</body>
</html>