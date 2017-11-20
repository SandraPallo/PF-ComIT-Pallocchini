<?php
			  $servername="localhost";
			  $dbname="sistemadepedidos";
			  $username="root";
			  $password="san123";
			  
			  $conn=mysqli_connect ($servername, $username, $password, $dbname);
			  if (!$conn) {
				  die("Fallo".mysqli_connect_error());
			  }else{
			  echo "correcto";}
?>