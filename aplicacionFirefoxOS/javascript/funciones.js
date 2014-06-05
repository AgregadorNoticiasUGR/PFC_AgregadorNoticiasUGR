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
				var nom_categoria='Facultades';
				var id_categoria=1;
				var nom_categoria2='Otra';
				var id_categoria2=2;
				var lista_elementos=[nom_categoria,id_categoria,nom_categoria2,id_categoria2];
				//lista_elementos.push(nom_categoria);
//				lista_elementos.push(id_categoria);
//				lista_elementos.push(nom_categoria2);
//				lista_elementos.push(id_categoria2);
				localStorage.lista_categorias_json=JSON.stringify(lista_elementos);
				lista_aux=localStorage.lista_categorias_json;
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
				error="¡Aún no está subscrito a nada seleccione: <a href=\"lista_nueva_categoria.html\" >Añadir</a> para pasar al menu de subcripciones!"
				cont.html(error);
			}
	

	}
	
	
	
	function muestra_categorias22(){
		
		
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