<?php
	require 'php/Funciones.php';

	$obj = new Funciones();

	$publicaciones = $obj->getPublicaciones();

	//echo print_r($publicaciones);
	//exit();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row encabezado">
			<h1 class="text-white m-4">Longbit Dashborad </h1>
		</div>
	</div>

	<div class="container">
		<div class="row">					
			<?php  foreach($publicaciones as $jacobo): ?>
				<div class="col-lg-4 col-md-4">
					
					<?php echo '<p>', $jacobo['parrafo1'],'</p>' ?>
					<?php echo '<p>', $jacobo['parrafo2'],'</p>' ?>
					<?php echo '<p>', $jacobo['parrafo3'],'</p>' ?>
					<hr>
				
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>