// Recomiendo leer este archivo de abajo hacia arriba para comprenderlo mejor.
 
$(function(){
	
    function siRespuesta(r){
 
        // Crear HTML con las respuestas del servidor
        var rHtml = 'El resultado de la suma es: ' + r.suma + '<br/>';
            rHtml += 'El resultado del producto es: ' + r.producto;
 
        $('#respuesta').html(rHtml);   // Mostrar la respuesta del servidor en el div con el id "respuesta"
    }
 
    function siError(e){
        alert('Ocurrió un error al realizar la petición: '+e.statusText);
    }
 
    function peticion(e){
        // Realizar la petición
    	var parametros = {
            variable1: $('#text1').val(),
            variable2: $('#text2').val()
    	};
 
 
    //	var post = $.post("http://servidor.php", parametros, siRespuesta, 'json');
  		$.ajaxSetup({ cache: false });

        $.postJSON("http://localhost/PFCAgregadorNoticiasUGR/ajax/suma/servidor.php", function (data){ 
            siRespuesta(data);

           
            
        }).error(function(jqXHR, textStatus, errorThrown){
            alert("un error");
        });
    }
 
    $('#botonCalcular').click(function(){
        $.ajaxSetup({ cache: false });

		var parametros = {
            variable1: $('#text1').val(),
            variable2: $('#text2').val()
    	};

        $.getJSON("http://localhost/PFCAgregadorNoticiasUGR/ajax/suma/servidor.php", function(parametros){ 
            var html = [];

            // Crear HTML con las respuestas del servidor
        var rHtml = 'El resultado de la suma es: ' + parametros.suma + '<br/>';
            rHtml += 'El resultado del producto es: ' + parametros.producto;
 
        $('#respuesta').html(rHtml);   // Mostrar la respuesta del servidor en el div con el id "respuesta"
            
        }).error(function(jqXHR, textStatus, errorThrown){
            alert("un error");
        });
        
    });
	
	
	
});