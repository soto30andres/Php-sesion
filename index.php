<?php 

session_start();
	
	if(isset($_SESSION["sesion"])){
		header("location: Usuarios.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<style type="text/css">
		
		body{

			background:black;
		}

		#particles-js{

			position: fixed;
			height: 100%;
			width: 100%
		}

		#box{

			margin-top: 80px;
			-webkit-box-shadow: 0px 1px 67px -12px rgba(171,84,251,1);
			-moz-box-shadow: 0px 1px 67px -12px rgba(171,84,251,1);
			box-shadow: 0px 1px 67px -12px rgba(171,84,251,1);
			background: black;
			padding-top: 20px;
			padding-bottom: 20px;
			border:1px solid black;

			border-radius: 20px;
		}
	</style>
	<title>Login</title>
</head>
<body id="particles-js">
<bR>
<section id="particles-js">

<div class="container">
	
	<div class="row">
		
		<div class="col-lg-offset-4 col-lg-4" id="box">

			<center>
			<h1 style="color: white">Inicio dsesion</h1>
			


			</center>
			<form action="CheckLogin.php" method="post">
				<div class="form-group">
				
					<input type="email" name="email" required class="form-control" placeholder="email">

				</div>

				<div class="form-group">
				
					<input type="password" required name="password" class="form-control" placeholder="password">

				</div>
				<center>
					<p style="color:white">
					<?php 

						if(isset($_GET["a8d45a34das"])){

							echo "Inicie sesion por favor";

						}else if(isset($_GET["ashdkhuhka6846d4s5a4d64sq864d5a28w4a6532da88"])){

							echo "Ingrese los datos correctamente";
						}

					?>
					</p>
				</center>
				<br>
				<button class="btn btn-primary" id="login">Enviar</button>
			</form>

		</div>

	</div>

</div>

</section>
	<script src="http://falconmasters.com/demos/particulas/particles.min.js"></script>
	<script src="particles.js"></script>
	<script src="particulas.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  	<script type="text/javascript">
		
  		$(document).ready(function(){

  			alert("hola");
  		})

  	</script>
</body>
</html>