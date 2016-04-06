
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



	 var filtro_foto   = document.querySelector("#filtro-foto");
	 var filtro_web    = document.querySelector("#filtro-web");
	 var filtro_diseno = document.querySelector("#filtro-diseno");
	 var filtro_all    = document.querySelector("#filtro-all");

	  var allElem    = [].slice.call(document.querySelectorAll("figure"));
	  var ElemFoto   = [].slice.call(document.querySelectorAll(".filtro-foto"));
	  var ElemWeb    = [].slice.call(document.querySelectorAll(".filtro-web"));
	  var ElemDiseno = [].slice.call(document.querySelectorAll(".filtro-diseno"));

	  var t = 300;

	[filtro_foto,filtro_web,filtro_diseno,filtro_all].forEach(function(elem){
	  elem.addEventListener('click', function(){

	    var _this = this;


	    allElem.forEach(function(elem,index,array){
	       if(_this.id == "filtro-all" || elem.classList.contains(_this.id)){
	        //  elem.classList.remove("display");
	        //  setTimeout(function(){
	        //    elem.classList.remove("oculto");
	        //  },100);
					Velocity(elem,{ opacity: 1 }, { display: "block" ,duration: 1000})

	      }else{
	      //   elem.classList.add("oculto");
	      //   setTimeout(function(){
	      //     elem.classList.add("display");
	      //   },t);
					Velocity(elem,{ opacity: 0 ,duration: 1000}, { display: "none"  });
	       };

	    });

	  } , false);

	});


	function runScroll() {

		Velocity(document.querySelectorAll(".work"),"scroll", { duration: 800});
	}
	var scrollme;
	scrollme = document.querySelector(".trabajos");
	scrollme.addEventListener("click",runScroll,false);







});
