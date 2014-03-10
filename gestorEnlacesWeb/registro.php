<!DOCTYPE html>
<html>
<body>


	<?php
        $user = $_POST["usuario"];
        $pass = $_POST["password"];
        
        
    
    
        $conexion = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("enlaces_ugr_db", $conexion);
        
        $seleccion = "SELECT * FROM `administrador` WHERE `pass`='$pass' and `user`='$user' ;";
        $resultado = mysql_query($seleccion, $conexion)or die(mysql_error());
        
        
        $totFilas = mysql_num_rows($resultado);
        
        if($totFilas!=1){
            echo "<p>No se existe ningun usuario registrado con esas caracter&iacute;sticas, compruebe datos introducidos.</p>";
        }
        else{
            echo "<p>Acierto!!</p>";
        }
	?>
</body>
</html>