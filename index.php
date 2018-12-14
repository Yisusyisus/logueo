<?php
@session_start();
if (@$_SESSION["name"]) {
    header("Location:contenido.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Login | PEGUY</title>
        <link rel="stylesheet" href="css/phpadmin.css">
    </head>
    <body id="loginform">
        <div id="page_content">
            <div class="container">
                <center><img src="imagenes/peguy2.jpg" border="5"></center>
                <h1>BIENVENIDO<bdo dir="ltr" lang="es"></bdo></h1><noscript>
                &lt;div class="error"&gt;&lt;img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /&gt; ¡Pasado este punto, debe tener Javascript activado!&lt;/div&gt;</noscript>
                <!-- Login form -->
                <form method="post" action="index.php" name="login_form" class="disableAjax login hide js-show" style="display: inline;">
                    <fieldset>
                        <legend>Iniciar Sesión</legend>
                        <div class="item">
                            <label for="input_username">Usuario:</label>
                            <input type="text" name="name" id="input_username" value="" size="24" class="textfield" required>
                        </div>
                        <div class="item">
                            <label for="input_password">Contraseña:</label>
                            <input type="password" name="password" id="input_password" value="" size="24" class="textfield" required>
                        </div>
                        <input type="hidden" name="server" value="1"></fieldset>
                    <fieldset class="tblFooters">
                        <input value="Iniciar" type="submit" id="input_go">
                        <center>
                            <p><a href="user.php">Registrarse</a></p>
                    </fieldset>
                </form>
                <?php
                @$usuario = $_REQUEST['name'];
                @$password = md5($_REQUEST['password']);
                if (isset($usuario)and isset($password)) {
                    require('conexion.php');
                    $consulta = "select * from usuarios where  name='$usuario' and password='$password'";
                    @$rs = mysql_query($consulta);
                    @$rs = mysql_num_rows($rs);
                    if ($rs > 0) {
                        session_start();
                        $_SESSION["name"] = $usuario;
                        if ($usuario == admin) {
                            header("Location:index.php");
                            exit();
                        }if ($usuario != admin) {
                            header("Location:contenido.php");
                            exit();
                        }
                    } else {
                        echo '<h4>usuario o contraseña incorrecta</h4>';
                    }
                }
                ?>
            </div>
            
        </div>
    </body>
</html>
