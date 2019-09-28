<?php  
	try{
		$conexion = new PDO('mysql:host=localhost;dbname=longbit','root','');
	}catch(PDOException $e){
		echo "No se pudo conectar ERROR:". $e;
	}
?>