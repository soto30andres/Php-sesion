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
			<h1 style="color: white">Inicio de sesión</h1>
			


			</center>
			<form action="CheckLogin.php" method="post">
				<div class="form-group">
				
					<input type="email" name="email" required id="email" class="form-control" placeholder="email">

				</div>

				<div class="form-group">
				
					<input type="password" required name="password" id="password" class="form-control" placeholder="password">

				</div>
				<center>
					<p id="error" style="color:white">
						
					</p>
					<br>
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

  			$("form").submit(function(e){

  				e.preventDefault();
  				var email = $("#email").val();
  				var password = $("#password").val();

  				console.log(email);

  				var data = {

  					"email": email,
  					"password": password
  				};

  				$.ajax({

					data:data,
					url:"CheckLogin.php",
					type:"post",
					

				}).done(function(data){

					console.log(data.trim());
					if(data == 1){

						location.href ="Usuarios.php";
						 
					}else{

						$("#error").text("Por favor ingrese los datos correctamente");

						$("#password").val("");
					}

				});

  			});

  		});

  	</script>
</body>
</html>