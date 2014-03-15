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

<body id="contenido_body">

	<script type="text/javascript">
		var mi_body= ("$contenido_body");
		mi_body.html(plantilla);
	</script>



	<?php
      		$conexion = mysql_connect("127.0.0.1", "root", "");
			mysql_select_db("enlaces_ugr_db", $conexion);
			
			mysql_set_charset('utf8');
			
			$sql = "SELECT * FROM `categoria`";
			$resultado = mysql_query($sql, $conexion)or die(mysql_error());
			
			// Cerrar la conexión
			mysql_close($conexion);
			
			
			$totFilas = mysql_num_rows($resultado);
			
			
			
			if($totFilas==0){
					
				echo "<h4>No se existe ninguna categor&iacute;a que mostrar.</h4>";
				
			}
			else{
				
							
				echo "<form action=\"enlaces.php\" method=\"post\" id=\"listado_categorias\">";
				while ($row=mysql_fetch_array($resultado)) 
				{	
				
					echo '<div class="elemento_lista"><input type="submit" value= "'.$row['nom_categoria'].'" name= "categoria"></div> ';
				}
				
				echo "</form>";
			}
    
    		
    ?>
</body>
</html>