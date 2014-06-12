<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Refrescar noticias</title>
</head>


<?php
        $array = array("mensaje" => "Hola desde otro punto de la red"); //Por ejemplo
    if(isset($_GET['callback'])){ // Si es una petición cross-domain
           echo $_GET['callback'].'('.json_encode($array).')';
        }
        else // Si es una normal, respondemos de forma normal
           echo json_encode($array);
?>

<body>
</body>
</html>