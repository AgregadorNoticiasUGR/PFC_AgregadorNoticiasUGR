<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
</head>

<body>

	<?php
        $user = $_POST["usuario"];
        $pass = $_POST["password"];
        
        
    
    
        $conexion = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("enlaces_ugr_db", $conexion);
        
        $seleccion = "SELECT * FROM `administrador` WHERE `pass`='$pass' and `user`='$user' ;";
        $resultado = mysql_query($seleccion, $conexion)or die(mysql_error());
		mysql_set_charset('utf8');
		
		// Cerrar la conexión
		mysql_close($conexion);
        
        
        $totFilas = mysql_num_rows($resultado);
        
        if($totFilas!=1){
				
			echo "<h1>No se existe ningun usuario registrado con esos datos, compruebelos y vuelva a intentarlo.</h1>";
			echo "<a href=\"index.php\" style=\"text-decoration:none\"><input type=\"button\" value=\"Reintentar\" >";
			
        }
        else{
			header("location:categorias.php");
        }
	?>
</body>
</html>