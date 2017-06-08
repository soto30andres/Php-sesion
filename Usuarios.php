<?php
	session_start();

	include 'Conexion.php';

	if(!isset($_SESSION["sesion"])){
		header("location: index.php");
	}

	$conexion = new Conexion;

	$resultado = $conexion->consultarUsuarios();

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION["sesion"][2] ?></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<div class="container">
	
	<div class="row">
		
		<div class="col-lg-12">
			
			<h1>Bienvenido <?php echo $_SESSION["sesion"][2] ?></h1>

			<p>Estos son los usuarios: </p>

			

		</div>

	</div>

	<div class="row">
		
		<div class="col-lg-12">
			
			<table class="table">
				
				<tr>
					<td>Email</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Modificar</td>
					<td>Eliminar</td>
				</tr>
				<?php 
					while($fila = $resultado->fetch_assoc()){

						echo "<tr>";
						echo "<td>".$fila["email"]."</td>";
						echo "<td>".$fila["nombre"]."</td>";
						echo "<td>".$fila["apellido"]."</td>";
						echo "<td><a href='acciones.php?modificar=".$fila["id"]."' class='btn btn-primary'>Modificar</a></td>";
						echo "<td><a href='acciones.php?eliminar=".$fila["id"]."' class='btn btn-danger'>Eliminar</a></td>";

						echo "</tr>";
					}

				?>
			</table>

			<br>

			<a href="CreaUsuario.php" class="btn btn-primary">+ Crear usuario</a>
			
			<a href="acciones.php?cerrar=on" class="btn btn-primary">Cerrar sesion</a>

		</div>

	</div>

</div>

</body>
</html>