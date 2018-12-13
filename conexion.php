<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('localhost;dbname=ittlaxia_ganzo','ittlaxia_ganzo','y)CAYqZ5U.5_:N2-C}Y=',$pdo_options);
			return self::$conexion;
		}
	}
?>