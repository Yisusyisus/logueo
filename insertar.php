<?php

##require('seguridad.php');
$fn = $_REQUEST['fn'];
switch ($fn) {
#DATOS PARA INSERCION#########Direccion
    case '1': {#DATOS PARA INSERCION#########
            $anombre = $_REQUEST['nombre'];
            $apellidosa = $_REQUEST['apellidos'];
            $correao = $_REQUEST['correo'];
            $telefaono = $_REQUEST['telefono'];
            $v = "insert into cliente(nombre,apellidos,correo,telefono) values ('$nombre','$apellidos','$correo','$telefono')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo "Error de inserccion";
            } else {
                header("Location:cliente.php");
                exit();
            }
            mysql_close($conexion);
        } break;
    case '8': {#DATOS PARA INSERCION#########tamaño
            $tama = $_REQUEST['tam'];
            $v = "insert into tamano (tamano) values('$tama')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo "El tamano ya existe!!";
            } else {
                header("Location:tamano.php");
                exit();
            }
            mysql_close($conexion);
        } break;
    case '9': {#DATOS PARA INSERCION#########Cliente
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            $correo = $_REQUEST['correo'];
            $telefono = $_REQUEST['telefono'];
            $v = "insert into cliente(nombre,apellidos,correo,telefono) values ('$nombre','$apellidos','$correo','$telefono')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo "Error de registro";
            } else {
                header("Location:cliente.php");
                exit();
            }
            mysql_close($conexion);
        } break;
    case '10': {#DATOS PARA INSERCION#########ingrediente
            $ningr = $_REQUEST['ning'];
            $v = "insert into ingrediente (nombre) values('$ningr')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo "El ingrediente ya existe!!";
            } else {
                header("Location:ingrediente.php");
                exit();
            }
            mysql_close($conexion);
        } break;
    case '11': {#DATOS PARA INSERCION#########pizza
            $rtam = $_REQUEST['ref_tamano'];
            $ring = $_REQUEST['ref_ingrediente'];
            $pre = $_REQUEST['precio'];
            $v = "insert into  (ref_tamano,ref_ingrediente,precio)
	 values('$rtam','$ring','$pre')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo "No insertado";
            } else {
                header("Location:pizza.php");
                exit();
            }
            mysql_close($conexion);
        } break;

    case '12': {#DATOS PARA INSERCION#########Datos usuarios
            $usu = $_REQUEST['name'];
            $pas = $_REQUEST['password'];
            $password = md5($pas);
            $v = "insert into usuarios (name,password)values('$usu','$password')";
            include('conexion.php');
            $rs = mysql_query($v);
            if (!$rs) {
                echo '<h3>El usuario ya existe!</h3>';
            } else {
                header("Location:index.php");
                exit();
            }
            mysql_close($conexion);
        } break;
    default:
        echo 'NO SE PUDO REALIZAR LA OPERACION';
}
?>?