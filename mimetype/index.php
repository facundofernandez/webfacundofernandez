<!DOCTYPE>
<html ng-app="app">
	<head>
		<meta charset="utf-8"> 
		<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="estilos.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body ng-controller="StoreController as store">
		<h1>Content Type</h1>
		<div id="buscar">
			<input type="text" placeholder="Buscar Content-Type" ng-model="query">
			<img id="btnAdd" src="add.png" ng-click="store.changeClass()">
		</div>
		<div id="form">
			
			<div id="formInput" ng-class="store.class">
				<input type="text" placeholder="Extensión" ng-keyup="store.escucharTecla($event)" ng-model="store.extension">
				<input type="text" placeholder="Texto" ng-keyup="store.escucharTecla($event)" ng-model="store.texto">
			</div>
			
		</div>
		
		<table id="tItem">
			<tbody ng-init="store.obtenerMimes()">
				<tr ng-repeat="mimes in store.mimes | filter:query | orderBy:'extension'" >
					<td class="">{{ mimes.extension }} </td>
					<td class="">{{ mimes.texto }} </td>
				</tr>
			</tbody>
		</table>
		
		
		
		<script src="angular.min.js"></script>
		<script>
			(function() {
			
				var app = angular.module('app', []);

				app.controller('StoreController', ['$http',function($http){
					
					var store = this;
					
					store.mimes = [];
					store.msj = "";
					
					store.class = "ocultar";
					
					store.changeClass = function(){
						if (store.class === "visible")
							store.class = "ocultar";
						else
							store.class = "visible";
					};
					
					store.escucharTecla = function(data){
						if(data.keyCode == 13 && store.extension != "" && store.texto != "" ){
							console.log(store.texto);
							
							
							store.agregarMime();
							store.obtenerMimes();
							
							
							store.class = "ocultar";
							store.extension="";
							store.texto="";
						}
					}
					
					store.obtenerMimes = function(data){
						$http.get('mimes.php').success( function(data){
							store.mimes = data;
							
						});
					}
					
					store.agregarMime = function(){
						
						pData = {
							"extension": store.extension,
							"texto":	 store.texto
						};
						
						$http.post("mimes.php", pData).success(function(data, status) {
							store.msj = "Item Ingresado Correctamente"
						});
						
						
						
					}
					
					
				}]);
				

			})();

		</script>
	</body>
</html>
	