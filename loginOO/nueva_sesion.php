<?php
require_once 'class/class_login.php';
$blog = new blog();
if (isset($_POST['grabar']) and $_POST['grabar'] == 'si') { //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee
    $blog->nueva_sesion();
} else {
    
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Registro de usuarios</title>
    </head>
    <body>
        <form name="form" action="" method="post">
            <table style="width:400px; height:200px; background:#ef8fe0 ">
                <tr>
                    <td>
                        Usuario 
                    </td>
                    <td>
                        <input type="text" name="nom"> 
                    </td>
                </tr>
                <tr><input type="hidden" name="grabar" value="si">
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="pass">
                </td>
                </tr><?php
                if (isset($_GET['usuario'])) {
                    ?>
                    <tr>
                        <td colspan="2" style="background:#ef8fe7; color:#fff; text-align:center">
                            <?php
                            switch ($_GET['usuario']) {
                                case 'no_existe':
                                    ?>
                                    Los datos introducidos no existen
                                <?php
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>         
                    </td>
                    <td>
                        <input type="submit" value="Iniciar sesión" onClick="validar()"> 
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>