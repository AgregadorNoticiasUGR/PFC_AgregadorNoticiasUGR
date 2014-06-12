// JavaScript Document






	//Función que añade más subscripciones a la lista de  categorías a las que ya se encuentra subscrito
	//
	//
	//
	
	function nueva_categoria(lista_categorias_str){

		var lista_aux;

		lista_aux=JSON.parse(localStorage.lista_categorias_json);
		lista_aux.push(lista_categorias_str);
		localStorage.lista_categorias_json = JSON.stringify(lista_aux);


	}
	
	//Función que muestra las categorías a las que el usuario esta subscrito
	//
	//
	//
	
	function muestra_categorias(){

			var lista_aux,lista_categorias='',error;
			var  tit=  	$("#titulo");
			var  menu= 	$("#navegador");
			var  cont= 	$("#contenido");
			var  menu= 	$("#navegador");
			
				
	
			//localStorage.lista_categorias_json='';
			lista_aux=localStorage.lista_categorias_json;
			
	
			
			//En el caso que sea la primera vez que se utiliza la aplicación, Se podrá predefinir una serie de categorias a las que el usuario este inscrito
			if(lista_aux==undefined){
				 //Serie de categorias a las que se está  incrito por defecto
			
			
			
			
			//***************************************************************************
			//Código a modificar; para establecer una serie de subscripciones por defecto
			//***************************************************************************
			
				var nom_categoria='Facultades';
				var id_categoria=1;
				var nom_categoria2='Otra';
				var id_categoria2=2;
				var lista_elementos=[nom_categoria,id_categoria,nom_categoria2,id_categoria2];
				localStorage.lista_categorias_json=JSON.stringify(lista_elementos);
				lista_aux=localStorage.lista_categorias_json;
				
				
			//***************************************************************************
			//
			//***************************************************************************
			
			
			//variable comprobación de cadena vacía sobre la variable estatica del navegador (Comprobación primer uso aplicación sin subscripción inicial)
			//	lista_aux="";
			
			}else{
				//Si no se da el caso entonces se debe realizar una consulta sobre las categorias a las que esta subscrito 
				//Obteniendo además de los id de categoría, los id de los enlaces a los que el usuario está subscrito
				
			
			function siRespuesta(r){
						$('#respuesta').html(r); // Mostrar la respuesta del servidor en el div con el id "respuesta"
					}
					 
					function siError(e){
						alert('Ocurrió un error al realizar la petición: '+e.statusText);
					}
					 
					function peticion(e){
					 
						// Obtener valores de los campos de texto
						var parametros = {
							datos_usuario: lista_aux//Datos del usuario
						};
						 
						// Realizar la petición
						var post = $.post({
							
							 url : 'http://127.0.0.1/PFCAgregadorNoticiasUGR/gestorEnlacesWeb/actualizar.php',
							  dataType : 'jsonp',
							  data : data
							
						});
						 
						/* Registrar evento de la petición (hay mas)
						(no es obligatorio implementarlo, pero es muy recomendable para detectar errores) */
						 
						post.error(siError); // Si ocurrió un error al ejecutar la petición se ejecuta "siError"
					}
					
					peticion();
					
					
					
					
				
			}
			
			
			
			if(lista_aux!=''){
							
							
				var lista;
				lista=JSON.parse(localStorage.lista_categorias_json);		
				lista.reverse();		
				while(lista.length>=2){
					
					lista_categorias=lista_categorias+"<form action=\"lista_enlaces.html\" method=\"post\" id=\"listado_categorias\"><div class=\"elemento_lista\">"+lista.pop()+" </div><input type=\"hidden\" name=\"id_categoria\" value="+lista.pop()+" /><input type=\"hidden\" name=\"nombre_categoria\" value=$nombre /><input type=\"submit\" value=\"Ver enlaces\" name= \"categoria\"></form>";
							
				}
				cont.html(lista_categorias);
				
			}else{
				error="¡Ups! Parece que aún no está subscrito a nada. Seleccione: <a href=\"lista_nueva_categoria.html\" >Añadir</a> para pasar al menú de subcripciones!"
				cont.html(error);
			}
	

	}
	
	
	
	
	function ajax(){
		$.ajax({

							 url : 'http://localhost/PFCAgregadorNoticiasUGR/gestorEnlacesWeb/actualizar.php',
							 
  dataType : 'jsonp',
  data : data
});
		
		}
	
	
	function borrar_subscripciones(){
		
		
		//var  cont= 	$("#contenido");
//		var algo;
//		
//		
//			var nom_categoria='Facultades';
//			var id_categoria=1;
//			var nom_categoria2='Otra';
//			var id_categoria2=2;
//			var lista_elementos=[];
//			lista_elementos.push(nom_categoria);
//			lista_elementos.push(id_categoria);
//			lista_elementos.push(nom_categoria2);
//			lista_elementos.push(id_categoria2);
//			localStorage.lista_categorias_json=JSON.stringify(lista_elementos);
//			lista_aux=[localStorage.lista_categorias_json];
//		
//		
//		
//			
//			cont.html(lista_aux.pop());
//		
		
localStorage.clear();


		
		}