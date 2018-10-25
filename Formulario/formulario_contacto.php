<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario de Contacto - Script Personal</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head> 

    <body>
        <div id="formulario" center>
            <form class="form-inline" role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
                <label for="nombre">Nombre:</label>
                <input class="form-control" name="nombre" type="text" required="required" id="nombre" placeholder="nombre" tabindex="1" title="Nombre">
                <br>
                <label for="email">Email:</label>
                <input class="form-control" name="email" type="email" required="required" id="email" placeholder="email" tabindex="2" title="Email">
                <br>
                <label for="telefono">Teléfono:</label>
                <input class="form-control" name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
                <br>
                <label for="ciudad">Ciudad:</label>
                <input class="form-control" name="ciudad" type="text" id="ciudad" placeholder="ciudad" tabindex="4" title="ciudad">
                <br>
                <label for="pais">País:</label>
                <input class="form-control" name="pais" type="text" id="pais" placeholder="pais" tabindex="5" title="pais">
                <br>
                
                <input class="btn btn-primary" type="submit" name="enviar" tabindex="6" value="Enviar">
                <input type="reset" tabindex="7" class="btn btn-primary" value="Borrar">
                <input type="hidden" name="estado" value="1">

            </form>
        </div>
    </body>
</html>
