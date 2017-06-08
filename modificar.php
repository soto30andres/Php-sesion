<?php 

	session_start();
	
	if(!isset($_SESSION["sesion"])){
		header("location: index.php");
	}

	$user = unserialize($_GET["user"]);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Login</title>
</head>
<body>
<bR>
<div class="container">
	
	<div class="row">
		
		<div class="col-lg-12">
			
			<h1>Modificar usuario</h1>
			
		</div>

	</div>
	<hr>
	<div class="row">
		
		<form action="acciones.php?modificado=on" method="post">
			<div class="col-lg-3">

				<input type="hidden" name="id" value="<?php echo $user[0] ?>">
				<input type="email" required name="email" class="form-control" value="<?php echo $user[1] ?>" placeholder="email">

			</div>
			
			<div class="col-lg-3">

				<input type="text" required name="nombre" class="form-control" value="<?php echo $user[2] ?>" placeholder="nombre">

			</div>
			<div class="col-lg-3">

				<input type="text" required name="apellido" class="form-control" value="<?php echo $user[3] ?>" placeholder="apellido">

			</div>
			
		
	</div>

	<div class="row">
		
		<div class="col-lg-12">
			<br>
			<button class="btn btn-primary">Crear</button>

		</div>

	</div>
	</form>
</div>

</body>
</html>