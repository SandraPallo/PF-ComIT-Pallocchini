<?php

class consultasLogin{
	
	function existeUser($user,$pass){
		$modelo  = new clsconexion();
		$conexion= $modelo->get_conexion();
		$query   = " SELECT * FROM cliente ";
		$query  .= " WHERE id_cliente='".$user."' and password='".$pass."'";
	    //$query  .= " AND userState=-1";
		$statement=$conexion->prepare($query);
		$statement->execute();	
		if (!$statement){
			$rows=0;
			
		}else{
			while ($result=$statement->fetch()){
				$rows[]=$result;
			}
		}
	return $rows;
	
	}	
}
?>