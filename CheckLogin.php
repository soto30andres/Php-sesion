	<?php 

	session_start();
	if(isset($_SESSION["sesion"])){
		header("location: Usuarios.php");

		exit();
	}

	include 'Conexion.php';

	$usuario = $_POST['email'];

	$password = $_POST['password'];

	$conexion = new conexion;

	$res = $conexion->consultarUsuario($usuario, $password);

	if($res != "error"){

		$_SESSION["sesion"] = $res;
		echo 1;
		die();
		// header("location: Usuarios.php");
	}else{

		echo 0;
		die();
		// header("location: index.php?ashdkhuhka6846d4s5a4d64sq864d5a28w4a6532da88=1");
	}

	
	
?>