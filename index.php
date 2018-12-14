<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-black w3-center">
                <center><img src="imagen/peguy2.jpg" border="0"></center>
		<h1>BIENVENIDO A PEGUY</h1>
	</div>
</header>

	
	<div class="w3-container w3-green">
		<center><h2>Sesion</h2><center>
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<p>
			<center><label class="w3-label">
				Usuario
			</label></center>
			<center><input type="text" name="usuario" id="input_username" value="" size="24" class="textfield" required><center>
		</p>
		<p>
			<center><label class="w3-label">Contrasena</label><center>
			<input type="password" name="pas" id="input_password" value="" size="24" class="textfield" required>
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
		</p>
		<p>Si aun no tienes una cuenta <a href="registrarse.php">!Registrate!</a></p>
	</form>
<footer>
	<div class="w3-container w3-black">
		<center><h4>Ingresa a PEGUY Ya!!!</h4><center>
	</div>
</footer>
</body>
</html>