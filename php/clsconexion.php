<?php
 class clsConexion{
      public $user;
      public $pass;
      public $host;
      public $db;
      public function get_conexion(){
        $user = 'root';
        $pass ='san123';
        $host ='localhost';
        $db ='sistemadepedidos';
        $conexion=new pdo("mysql:host=$host;dbname=$db;", $user, $pass);
        return $conexion;
		  }
	}
		
?>