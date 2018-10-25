<?php
session_start();
if (@!$_SESSION['usuarioactual']) {
	header("Location:index.php");
}

 ?>
