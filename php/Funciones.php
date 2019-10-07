<?php
	require 'init.php';
	
	class Funciones{
		public function getPublicaciones(){
			global $conexion;

			$query = $conexion->prepare("
				SELECT *
				FROM succesfulprojects
			");

			$query->execute();

			return $query->fetchAll();
		}

		public function logIn($user, $pass){
			global $conexion;

			$query = $conexion->prepare("
				SELECT *
				FROM usuarios
				WHERE usuario = :user AND contrasena = :pass
			");

			$query->execute([
				'user' => $user,
				'pass' => $pass
			]);


			return $query->fetch();
		}

		public function subirPublicacion($id, $parrafo1, $parrafo2, $parrafo3){
			global $conexion;

			$id = $conexion->prepare("
				SELECT id
				FROM usuarios
				WHERE id = :user
			");

			$id->execute([
				'user' => $admin
			]);

			$id = $id->fetch();

	//***************************************
			$query = $conexion->prepare("
				INSERT INTO succesfulprojects (id, parrafo1, parrafo2, parrafo3)
				VALUES(:id,:parrafo1,:parrafo2,:parrafo3)
			");

			$query->execute([
				'id' => $id,
				'parrafo1' => $parrafo1,
				'parrafo2' => $parrafo2,
				'parrafo3' => $parrafo3
			]);

			if($query){
				return true;
			}else{
				return false;
			}
		}
	}
?>
