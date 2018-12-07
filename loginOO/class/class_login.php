<?php
session_start();
require_once("conexion.php");
class blog
{
	public function nueva_sesion()
	{
		//recogemos las variables post del formulario
		$nombre = $_POST['nom'];
		$password = $_POST['pass'];
		//realizamos la consulta sql 
		//colocamos script_tags para eliminar las etiquetas html y php, por si vienen
	        $query = "SELECT * FROM usuarios WHERE username='".strip_tags($nombre)."'AND password='".strip_tags($password)."';";
		//ejecutamos la consulta y guardamos el resultado en la variable resultado
		$resultado = mysql_query($query,Conectar::con());
		//si el n�mero de filas devuelto por la variable resultado es 1,
		//lo que significa que en la base de datos login, en la tabla usuarios
		//existe una fila que coincide con los datos ingresados
		//nos env�e a logueado.php, que ser�a como el home de nuestra p�gina,
		//en otro caso, nos deja en nueva_sesion, con una variable get llamada usuario
		//y con el valor no_existe
		if ($reg=mysql_num_rows($resultado) == 0)
		{
			header("Location:nueva_sesion.php?usuario=no_existe");
                        
		}else{
			
		} 
			if($reg=mysql_fetch_array($resultado))
				{
					$_SESSION['jose'] = $reg['username'];	
					header("Location:logueado.php");
				}
	}
}
?>

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
                        $_SESSION["username"] = $usuario;
                        header("Location:index2.php");
                        exit();
                    } else {
                        echo '<h4>usuario o contraseña incorrecta</h4>';
                    }
                }
                ?>