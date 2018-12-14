<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-white">
		<center><h1>BIENVENIDO A PEGUY</h1></center>
		<center><img src="imagen/12.png" border="0"></center>
	</div>
</header>
		<div class="w3-container w3-white">
			<center><h1>Registro de Usuarios</h1></center>
		</div>
		<div>
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<center><label class="w3-label">Nombre de usuario o correo electronico</label></center>
					<center><input type="text" name="usuario" id="input_username" value="" size="24" class="textfield" required><center>
				</p>
				<p>
					<center><label class="w3-label">Contrasena</label></center>
					<input type="password" name="pas" id="input_password" value="" size="24" class="textfield" required>
				</p>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
					<button class="w3-btn w3-blue">Registrate</button>
				</p>
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div class="w3-container w3-white">
		<center><h4>PEGUY APPrende</h4><center>
	</div>
</footer>

</body>
</html>