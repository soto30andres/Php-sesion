<?php 
	
	class Conexion {
		
		private $host = "localhost";
		private $usuario = "root";
		private $pass = "";
		private $bd = "bd-sesion";
		private $con;

		function __construct(){
			
			$this->con = new mysqli($this->host, $this->usuario, $this->pass, $this->bd);

			if ($this->con->connect_errno) {
    			echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $mysqli->connect_error;
			}
		}

		function consultarUsuario($usuario, $passw){

			$sql = "select * FROM usuario";
			$resultado = mysqli_query($this->con, $sql);
			echo "<pre>";
			while($fila = $resultado->fetch_assoc()){

				// $fila es un arreglo asociativo con todos los campos que se pusieron en el select

    			if($fila['email'] == $usuario && $fila['password'] == $passw){

    				$arreglo = array($fila['id'], $fila['email'], $fila['nombre'], $fila['apellido']);
    				break;	
    			}else{

    				$arreglo = "error";
    			}
			}

			return $arreglo;

			
		}

		function consultarUsuarios(){

			$sql = "select * FROM usuario";
			$resultado = mysqli_query($this->con, $sql);
			
			return $resultado;

			
		}

		function eliminarUsuario($id){

			$sql = "DELETE FROM usuario WHERE id = '".$id."'";
			$resultado = mysqli_query($this->con, $sql);

		}

		function crearUsuario($datos){
			echo $datos[0];
			$sql = "INSERT INTO usuario (email, password, nombre, apellido) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]');";

			$resultado = mysqli_query($this->con, $sql);

		}

		function consultarUsuarioId($id){

			$sql = "select * FROM usuario";
			$resultado = mysqli_query($this->con, $sql);
			echo "<pre>";
			while($fila = $resultado->fetch_assoc()){

    			if($fila['id'] == $id){

    				$arreglo = array($fila['id'], $fila['email'], $fila['nombre'], $fila['apellido']);
    				break;	
    			}else{

    				$arreglo = "error";
    			}
			}

			return $arreglo;

			
		}

		function modificarUsuario($datos){
			
			$sql = "UPDATE usuario SET email = '$datos[1]', nombre = '$datos[2]', apellido = '$datos[3]' where id ='".$datos[0]."';";

			$resultado = mysqli_query($this->con, $sql);

			header("location: Usuarios.php");

		}

	}

?>