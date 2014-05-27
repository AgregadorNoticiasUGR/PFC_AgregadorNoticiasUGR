// JavaScript Document

//Categorías por defecto: variable lista categorias

localStorage.lista_categorias_json='';





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

		var lista_aux,lista_categorias,error;
		var  tit=  	$("#titulo");
		var  menu= 	$("#navegador");
		var  cont= 	$("#contenido");
		var  menu= 	$("#navegador");

		lista_aux=JSON.parse(localStorage.lista_categorias_json);
		if(lista_aux.length>0){
								
			for(var i=0;i<lista.length;i+=2){
				lista_categorias=lista_categorias + "<form action=\"lista_enlaces.html\" method=\"post\" id=\"listado_categorias\"><div class=\"elemento_lista\">"+lista_aux[i]+"</div><input type=\"hidden\" name=\"id_categoria\" value="+lista_aux[i+1]+" /><input type=\"hidden\" name=\"nombre_categoria\" value=$nombre /><input type=\"submit\" value=\"Ver enlaces\" name= \"categoria\"></form>";
						
			}
			cont.html(lista_categorias);
			
		}else{
			error="¡Aún no está subscrito a nada seleccione: <a href=\"lista_nueva_categoria.html\" >Añadir</a> para pasar al menu de subcripciones!"
			cont.html(error);
		}


	}