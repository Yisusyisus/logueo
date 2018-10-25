
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/phpadmin.css">
    </head>
    <body id="loginform"><div id="page_content">
            <div class="container">
                <center><img src="images/image.png" border="0"></center>
                <h1>Bienvenido<bdo dir="ltr" lang="es"></bdo></h1><noscript>
                &lt;div class="error"&gt;&lt;img src="themes/dot.gif" title="" alt="" class="icon ic_s_error" /&gt; ¡Pasado este punto, debe tener Javascript activado!&lt;/div&gt;</noscript>
                <!-- Login form -->
                <form name="formreg" target="cont1" action="insertar.php" method="POST" class="disableAjax login hide js-show" style="display: inline;">
                    <fieldset>
                        <legend>Registro de Usuario</legend>
                        <div class="item">
                            <label for="basic">Usuario:</label>
                            <input type="text" name="name" id="basic"  placeholder="Usuario" value="" size="24" required/>
                        </div>
                        <div class="item">
                            <label for="pw">Contraseña:</label>
                            <input  id="pw" name="password" data-theme="a" type="password"  placeholder="*******" size="24" required/>
                        </div>    
                        <input type="hidden" name="fn" value="12">
                    </fieldset>
                    <fieldset class="tblFooters">
                        <a href="index.php"><input value="Regresar" type="button" id="cont1" align="left"></a>
                        <input value="Registrar" type="submit" id="cont1">     
                        
                    </fieldset>
                </form>
            </div>
        </div>
    </body> 
</html>
