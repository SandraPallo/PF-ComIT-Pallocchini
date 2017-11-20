<?php 
session_start();
require_once("clsConexion.php");

$user       = $_SESSION['usuario'];
$logueado   = $_SESSION['logueado'];
$userId     = $_SESSION['idUser'];
$clientevet  = $_SESSION['cliente'];
if ($logueado!=true){
    echo "<script>alert('Usted no tiene permiso para ver esta pagina');</script>";
    
}
?>


<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail_Pedido</title>


<link 
   rel="stylesheet" 
   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
   crossorigin="anonymous" >  
   
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	--><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</head>

<body>
			<div id="titulo" >	
                     		
					
			</div>
   <div id="contenedor" class="row">	
				
		<div id="sectorizquierdo" class="col-sm-2" >
				   <!-- Sector izquierdo vacio-->
		</div>
	
		<div id="sectorcentral" class="col-sm-8">		
					<div class="table-responsive"> 
					   <table class="table table-bordered table-striped">
						<thead> 
							   <tr >
								  <!-- definimos cabeceras de la tabla --> 
								  <th>Fecha</th> 
								  <th>Tipo Comprobante</th>
								  <th>Número Comprobante</th>
								  <th>Debe</th>
								  <th>Haber</th>
								  <th>Saldo</th>
								  
								 
							   </tr> 
							</thead>
				 <tbody>
						
				
					<?php
							
							 $servername="localhost";
							  $dbname="sistemadepedidos";
							  $username="root";
							  $password="san123";

							  $conn=mysqli_connect ($servername, $username, $password, $dbname);
							  if (!$conn) {
								  die("Fallo".mysqli_connect_error());
							  } 
							  
							  
							
								echo "<h3>Estado de Cuenta de: <font color='#ff0000'>$clientevet</font></h3>";
								$sql= "Select razonsocial, fecha,descripcion, numero, importedebe, importehaber from comprobantes join cliente on cliente=id_cliente join tipocomprobante on id_tipocomprobante=tipo where cliente=$userId ORDER BY fecha asc";
							  
							  
							 $result=mysqli_query($conn, $sql);
							  
								 //Mostrar los registros en una tabla en el navegador
							 
							
							
							$saldo=0;
						if (mysqli_num_rows($result)>0) {
								 
								while ($row=mysqli_fetch_assoc($result))
								{   $saldo=$saldo + $row['importedebe'] - $row['importehaber'];
													
									  echo "<tr>";
									  echo "<td>".$row['fecha']."</td>";
									  echo "<td>".$row['descripcion']."</td>";
									  echo "<td>".$row['numero']."</td>";
									  echo "<td>".$row['importedebe']."</td>";
									  echo "<td>".$row['importehaber']."</td>";
									  echo "<td>".round($saldo,2)."</td>";
									   						
									}	
								}
							  
							 
							mysqli_close($conn);
					
					

				?>

			
					</tbody>
				   </table>
				  </div>
		</div>
		<div id="sectorderecho" class="col-sm-2" >
					   <!-- Sector derecho vacio-->
		</div>
	</div>
</body>

</html>