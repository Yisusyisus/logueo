<?php
require_once("class/class_login.php");
if (!isset($_SESSION["jose"])) { //para saber si existe o no ya la variable de sesi�n que se va a crear cuando el usuario se logee 
    ?>
    Iniciar session para acceder a este contenido
    <a href='nueva_sesion.php'>Pagina   principal</a>";
    <?php
} else {
    ?>
    <h2>Bienvenido al contenido <?php echo $_SESSION['jose'] ?></h2>
    <a href="cerrar_sesion.php">Cerrar sesion</a>
    <?php
}
?>

