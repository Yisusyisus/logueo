<?php
session_start();
session_destroy();
echo"<script type='text/javascript'>
	 alert('La sesion fue cerrada correctamente');
	window.location='nueva_sesion.php';
	</script>";
?>


