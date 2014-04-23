<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="interface.js"></script>

</head>
<body >

	<div id="contenedor">
    	<header id="titulo"><h1>¡Bienvenido!</h1></header>
        <article id="contenido">
            <h3>Esta plataforma sirve para acceder como administrador del servicio de gestión de enlaces, de la aplicación: Agregador de noticias UGR</h3></br>
            <form action="registro.php" method="post">
            	Usuario: <input type="text" name="usuario" id="user"><br>
                Contraseña: <input type="password" name="password" id="pass"><br>
                <input id="btn_registro" type="submit" value="Enviar">
            </form>
	    </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>


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
			echo "<a href=\"index.html\" style=\"text-decoration:none\"><input type=\"button\" value=\"Reintentar\" >";
			
        }
        else{
			header("location:categorias.php");
        }
	?>
    
    
    
</body>
</html>