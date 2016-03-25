<?php

	$metodo = $_SERVER['REQUEST_METHOD'];
	
	$pdo = new PDO('sqlite:database/base.sqlite3');
	
	if( $metodo == "POST" ){
	
		$data = json_decode(file_get_contents("php://input"));
		
		$statement = $pdo->prepare("INSERT INTO mimes (extension,texto) VALUES (:extension,:texto)");
		$statement->execute(array(':extension'=>$data->extension,':texto'=>$data->texto));
		
		
	} else {
		// Instancio conexion a base de datos para consultas
		
		// Ejecuto consulta de Items del menu
		//$datos = $db->query('SELECT * FROM mimes', PDO::FETCH_OBJ);
		
		$statement = $pdo->prepare("SELECT * FROM mimes");
		$statement->execute();
		$results=$statement->fetchAll(PDO::FETCH_ASSOC);
		
		
		
		echo json_encode($results);
	}