// JavaScript Document


Storage.prototype.setObj = function(key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function(key) {
    return JSON.parse(this.getItem(key))
}


function contactWebServer(url) {
		    var xhr = new XMLHttpRequest({mozSystem: true});
			xhr.open("GET", url, true);
			xhr.onreadystatechange = function() {
			  if (xhr.readyState == 4) {
					var tmpkk = xhr.responseText;
					//document.getElementById("tablaExtraida").innerHTML = "";
					var tmpElem = document.getElementById('tablaExtraida');
					while (tmpElem.firstChild) { tmpElem.removeChild(tmpElem.firstChild); }
					analizarYextraer(tmpkk);
			  }
			}
			xhr.send();
}



function	mostrar(){
	
	localStorage.setItem(canales,12456);
	
	var aux=localStorage.getItem(canales);
	
	$('#resultado').html(aux);
	
	}