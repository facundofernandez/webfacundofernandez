
		window.addEventListener("load", function(event) {
			
			document.querySelector("#bc").classList.add("animarTitulo");
			document.querySelector("h2").classList.add("animarSubtitulo");
			document.querySelector(".trabajos").classList.add("animarItemTrabajos");
			var items = document.querySelectorAll(".menu li");
			var x;
			for(x in items){

				if(typeof items[x] === "object"){
					items[x].classList.add("animarItem");
				}
			};	

			var tBody		= document.querySelector("body");
			var content		= document.querySelector("#content");
			var trabajos	= document.querySelector("#trabajos");
			var close		= document.querySelector("#close");
			var itemTrabajo = document.querySelector(".trabajos");
			
			itemTrabajo.addEventListener('click', function(){
				content.classList.toggle('animarContent');
				trabajos.classList.toggle('ocultar'); 
	
				setTimeout(function(){ 
					content.classList.toggle('ocultar'); 
				
					trabajos.classList.toggle('animarTrabajos');
				},1000);
			} , false);
			
			
			
			close.addEventListener('click', function(){
				trabajos.classList.toggle('animarTrabajos');
				content.classList.toggle('ocultar'); 
				
				setTimeout(function(){ 
				
					trabajos.classList.toggle('ocultar'); 
					content.classList.toggle('animarContent');
					
				},1000);
			} , false);
			
		});
