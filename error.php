<!DOCTYPE html>
<html>
<head>
	<title>Error al ingresar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
	<header>
		<div class="w3-container w3-black w3-center">
			<h1>VERIFICA TU INFORMACION</h1>
			<center><img src="imagen/robot.jpg" border="0"></center>
		</div>
</header>

	<div class="w3-container w3-red">
		<center><h1><?php echo $_GET['mensaje'];?></h1></center>
		<center><a href="index.php">Regresa al inicio</a></center>
	</div>
</body>
</html>