<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gestor de enlaces</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="interface.js"></script>

<link href="estilo.css" rel="stylesheet" type="text/css">




<script type="text/javascript">


			//Tras presionar el boton de autentificación; en el caso de concordancia se muestra interface inicial para mostrar todas las categorias registradas en el sistema
			
			$(function(){
					
					muestra_lista_categorias();
					
			}); 


</script>


<script language="JavaScript">
	function confirmar ( mensaje ) {
		return confirm( mensaje );
	}
</script>


</head>



<body >
	<div id="contenedor">
    	<header id="titulo"></header>
        <article id="contenido">



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
                            
                        echo "<h4>No se existe ninguna categoría que mostrar.</h4>";
                        
                    }
                    else{
                        //Muestro el boton para pasar al formulario de nueva categoria
					echo	"<form action=\"nueva_categoria.php\" method=\"post\"><input  type=\"submit\" value=\"Nueva\"  /></form>";
                                    
                        while ($row=mysql_fetch_array($resultado)) 
                        {	
							$id_categ=$row['cod_categoria'];
							$nombre=$row['nom_categoria'];
							
                        
                        	echo "<form action=\"enlaces.php\" method=\"post\" id=\"listado_categorias\"><div class=\"elemento_lista\">$nombre</div><input type=\"hidden\" name=\"id_categoria\" value=$id_categ /><input type=\"hidden\" name=\"nombre_categoria\" value=$nombre /><input type=\"submit\" value=\"Ver enlaces\" name= \"categoria\"></form>";
						
						
							// Demás opciones: editar y borrar
							echo	"<form action=\"editar_categoria.php\" method=\"post\"><input type=\"hidden\" name=\"categoria_seleccionada\" value=$id_categ /><input type=\"submit\" value=\"Editar\" /></form>";
							
							echo	"<form action=\"borrar_categoria.php\" method=\"post\" onsubmit=\"return confirmar('¿Seguro que desea eliminar la categoria: $nombre ?')\"><input type=\"hidden\" name=\"categoria_seleccionada\" value=$id_categ /><input type=\"submit\" value=\"Borrar\" /></form>";
                        }
                        
                    }
            
                    
            ?>
    
        </article>
        <nav id="navegador"></nav>
        <footer id="piePagina"></footer>
    </div>
</body>
</html>