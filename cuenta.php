<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tu cuenta</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body   bgcolor="BLACK" >
     
	<div class="w3-container w3-black w3-center">
		<h1>BIENVENIDO A TU CUENTA PEGUY</h1>

		<center><img src="imagen/image 1.jpg" border="0"></center>
	</div>

	<p></p>
	<center>
				<div class="detalles">
					<button class="w3-btn w3-red"><a href="pand.php"> PANDA</button>
					
				</div>

<br>
				<div class="detalles">
					<button class="w3-btn w3-yellow"><a href="san.php"> SANDIA</button>
					
					
				</div>
<br>
</center>
	<form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		
		<button class="w3-btn w3-green">Salir</button>
	</form>
</body>
</html>