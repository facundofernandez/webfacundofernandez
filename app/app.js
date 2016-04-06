
window.addEventListener("load", function(event) {
	// Selecciono elementos
	document.querySelector("#titulo").classList.add("animarTitulo");
	document.querySelector("#subtitulo").classList.add("animarSubtitulo");
	document.querySelector(".trabajos").classList.add("animarItemTrabajos");
	// Selecciono Menu de iconos
	var items = document.querySelectorAll(".menu li");
	var x;

	for(x in items){
		// console.log(items[x] );
		if(typeof items[x] === "object"){
			items[x].classList.add("animarItem");
		}
	};

	var tBody				= document.querySelector("body");
	var content			= document.querySelector("#content");
	var trabajos		= document.querySelector("#trabajos");
	var close				= document.querySelector("#close");
	var itemTrabajo = document.querySelector(".trabajos");




});
