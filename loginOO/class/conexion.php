<?php

class Conectar // se crea una clase para el metodo de conexion 
{
    public static function con() { // se crea una funcion estatica para la conexion
        $conexion = mysql_connect("localhost", "root", "12345");
        mysql_query("SET NAMES 'utf8'"); // para no tener problmas con la ñ
        mysql_select_db("login"); // indicamos el nombe de nuestra base de datos
        return $conexion;
    }

}

?>
