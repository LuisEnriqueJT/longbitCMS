<?php
session_start();
if(isset($_SESSION['id'])){
		require '../php/Funciones.php';
		$obj = new Funciones();

		if(isset($_POST['id'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3'])){
			$subir = $obj->$subirPublicacion($_POST['id'],$_POST['parrafo1'],$_POST['parrafo2'],$_POST['parrafo3']);

			if($subir == true){
				echo '<span class="alert alert-success">Articulo dado de alta.</span>';
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar parrafo</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row encabezado">
			<h1 class="text-white m-4">Longbit Dashborad </h1>
		</div>
	</div>

	<div class="container">
		<form action="" method="post">
			<input type="text" name="id"  class="form-control mt-3 idTexto"  placeholder="id"/><br>
			<textarea name="parrafo1" class="form-control areasTexto" placeholder="Contenido"></textarea><br>
			<textarea name="parrafo2" class="form-control areasTexto" placeholder="Contenido"></textarea><br>
			<textarea name="parrafo3" class="form-control areasTexto" placeholder="Contenido"></textarea><br>
			<input type="submit" class="btn btn-info pull-right" value="Subir">
		</form>
	</div>
</body>
</html>

<?php }else{header('Location: index.php');} ?>