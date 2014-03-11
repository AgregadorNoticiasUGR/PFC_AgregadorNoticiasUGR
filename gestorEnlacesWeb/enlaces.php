<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
</head>

<body>

	<?php
		
        $categ = $_POST["categoria"];
		
		
		
		$conexion = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("enlaces_ugr_db", $conexion);
		
		//Sacamos el codigo de la categoria seleccionada
		$sql = "SELECT `cod_categoria` FROM `categoria` WHERE `nom_categoria` = \"$categ\" ";
        $resultado = mysql_query($sql, $conexion)or die(mysql_error());
		echo "<h1>$resultado</h1>";
		 /*?>//Buscamos todos los enlaces relacionados con esta categoria
        $sql = "SELECT `cod_enlace` FROM `pertenece` WHERE `cod_categoria`='$resultado'";
        $resultado = mysql_query($sql, $conexion)or die(mysql_error());
		
		
        $sql = "SELECT * FROM `enlace` WHERE `cod_enlace`='$resultado'";
        $resultado = mysql_query($sql, $conexion)or die(mysql_error());
        
        
        $totFilas = mysql_num_rows($resultado);
			
			if($totFilas==0){
					
				echo "<h4>No se existe ningun enlace que mostrar.</h4>";
				
			}
			else{
				
							
				echo "<form action=\"muestra_enlace.php\" method=\"post\" id=\"listado_enlaces\">";
				while ($row=mysql_fetch_array($resultado)) 
				{	
				
					echo '<div class="elemento_lista"><input type="submit" value= "'.$row['nom_enlace'].'" name= "enlace"></div> ';
				}
				
				echo "</form>";
			}<?php */
        
	?>

</body>
</html>