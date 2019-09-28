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
	}
?>
<!--
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus est, in omnis non, doloribus iure alias error. Vitae nostrum deserunt quos debitis magni porro iure, in sed accusamus. A assumenda aliquam alias ipsam possimus natus perspiciatis totam corporis temporibus quidem!

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis veniam, molestias quisquam debitis. Fugiat asperiores veritatis eius, aut. Veritatis modi voluptatibus iste. Ut, cumque. Unde pariatur deserunt ea impedit sequi, sint, iste magnam officia dignissimos, quasi ex mollitia dolorum ducimus nulla doloremque. Molestias soluta et culpa perferendis minus similique suscipit.

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque est facere quae tenetur aut natus fugiat repellendus impedit eaque sed ut sint, vel aperiam quidem animi rerum quis eius sequi!
-->