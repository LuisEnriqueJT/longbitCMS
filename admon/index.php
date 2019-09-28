<?php
	require '../php/Funciones.php';

	$obj = new Funciones();

	if (isset($_POST['user'], $_POST['pass'])) {
		
		$checar = $obj->logIn($_POST['user'],$_POST['pass']);

		echo print_r($checar);

	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<!--<div class="container-fluid">
		<div class="row encabezado">
			<h1 class="text-white m-4">Longbit Dashborad </h1>
		</div>
	</div>
-->
	<div class="container">
		<h2 class="m-3">Admin Panel</h2>

		<form action="" method="post">
			
			<input type="text" placeholder="Usuario" name="user" class="form-control" style="width: 200px;" /> <br>
			<input type="password" placeholder="Password" name="password" class="form-control" style="width: 200px;" /> <br>
			<input type="submit" class="btn btn-info pull-right m-3" value="Iniciar sesion">

		</form>
	</div>

	<div class="container">
		
	</div>
</body>
</html>