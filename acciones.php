<?php 	
	
	session_start();
	include 'Conexion.php';

	$conexion = new Conexion;

	if(isset($_GET["eliminar"])){

		$conexion->eliminarUsuario($_GET["eliminar"]);

		header("location: Usuarios.php");
	
	}else if(isset($_GET["crear"])){

		header("location: Crear.php");

	}else if(isset($_GET["creado"])){

		$datos = array($_POST["email"], $_POST["password"], $_POST["nombre"], $_POST["apellido"]);

		$conexion->crearUsuario($datos);

		header("location: Usuarios.php");

	}else if(isset($_GET["modificar"])){

		$id = $_GET["modificar"];

		$user = $conexion->consultarUsuarioId($id);

		print_r($user);

		header("location: modificar.php?user=".serialize($user));
	}else if(isset($_GET["modificado"])){

		$email = $_POST["email"];
		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$id = $_POST["id"];

		$datos = array($id,$email,$nombre,$apellido);

		$conexion->modificarUsuario($datos);
	}else if(isset($_GET["cerrar"])){
		
		session_destroy();
		
		header("location: index.php");
		
	}
?>