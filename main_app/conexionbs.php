<?php

require 'config/conexion.php';
class conexionbs extends mysqli
{

	public function __construct()
	{
		parent:: __construct(host,username,passwd,dbname);
		$this -> set_charset("utf8"); 
		$this -> connect_error ? die('Error al conectar'): print'';
	}	

}

?>