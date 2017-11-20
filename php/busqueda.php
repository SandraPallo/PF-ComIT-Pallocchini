
<!DOCTYPE html>



<html>
    <head>
        <meta charset="UTF-8">
        <title>Mail_Pedido</title>


		<link 
		   rel="stylesheet" 
		   href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
		   integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
		   crossorigin="anonymous" >

     </head>

<body>
			<div id="titulo" >	
                     		
					<!--<input type="text" disabled align="center" value=""></input><h2></h2>-->
			</div>
<div id="contenedor" class="row">	
				
			<div id="sectorizquierdo" class="col-sm-1" >
				   <!-- Sector izquierdo vacio-->
			</div>
	
			<div id="sectorcentral" class="col-sm-10">		

				<div class="table-responsive"> 
					<table class="table table-bordered table-striped">
						<thead> 
						   <tr >
							  <!-- definimos cabeceras de la tabla --> 
							  <th>Fecha</th> 
							  <th>Razon Social</th> 
							  <th>CUIG</th>
							  <th>CV</th>
							  <th>RENSPA</th>
							  <th>COLOR</th>
							  <th>Inscripcion</th>
							  <th>Cantidad</th>
							 
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
				
					if (isset ($_POST['cuigb'])){
										
						$var1=$_POST['cuigb'];
						$pedidopor=$_POST['id_vet'];
						echo "<h3>Historial de los pedidos según busqueda por CUIG: <font color='#ff0000'>$var1</font></h3>"; 
					
						$sql= "Select fecha,razonsocial,cuig,cv,renspa,color,inscripcion,cantidad from pedido PE  join productor P on p.id_productor=pe.productor where cuig like '%$var1%' AND cliente='$pedidopor' ORDER BY fecha desc";
						
					}	
					 elseif (isset ($_POST['renspab'])){
						 
						 $buscar_porrenspa=$_POST['renspab'];
						 $pedidopor=$_POST['id_vet'];
						 echo "<h3>Historial de los pedidos según busqueda por RENSPA: <font color='#ff0000'>$buscar_porrenspa</font></h3>";
						 $sql= "Select fecha,razonsocial,cuig,cv,renspa,color,inscripcion,cantidad from pedido PE  join productor P on p.id_productor=pe.productor where renspa like '%$buscar_porrenspa%'  AND cliente='$pedidopor' ORDER BY fechapedido desc";
						 
						}
							
					elseif (isset ($_POST['productorb'])){
						$buscar_porproductor=$_POST['productorb'];
						$pedidopor=$_POST['id_vet'];
						 echo "<h3>Historial de los pedidos según busqueda por Productor: <font color='#ff0000'>$buscar_porproductor</font></h3>";
						$sql= "Select fecha,razonsocial,cuig,cv,renspa,color,inscripcion,cantidad from pedido PE join productor P on p.id_productor=PE.productor where razonsocial like '%$buscar_porproductor%' AND cliente='$pedidopor'  ORDER BY fecha desc";
											
						}
				/*	elseif !(isset($_POST['productorb'] and  $_POST['renspab'] and  $_POST['cuigb'])){
						$pedidopor=$_POST['id_vet'];
						echo "<h3>Historial de los pedidos del Cliente <font color='#ff0000'></font></h3>";
						$sql= "Select fecha,razonsocial,cuig,cv,renspa,color,inscripcion,cantidad from pedido PE join productor P on p.id_productor=PE.productor where  cliente='$pedidopor'  ORDER BY fecha desc";
									
					} */
						
												
						
					$result=mysqli_query($conn, $sql);
					
					if (mysqli_num_rows($result)>0) {
										 
							while ($row=mysqli_fetch_assoc($result))
						
							{
							  echo "<tr>";
							  echo "<td>".$row['fecha']."</td>";
							  echo "<td>".$row['razonsocial']."</td>";
							 
							  echo "<td>".$row['cuig']."</td>";
							  echo "<td>".$row['cv']."</td>";
							  echo "<td>".$row['renspa']."</td>";
							  echo "<td>".$row['color']."</td>";
							  if ($row['inscripcion']='Null'){
									echo "<td>".$row['inscripcion']=' '."</td>";}
							  else{
									echo "<td>".$row['inscripcion']."</td>";
									
									}
							  echo "<td>".$row['cantidad']."</td>";
							
							  echo "</tr>";
							}	
											
						}	

					  
					  
						mysqli_close($conn);
			

					?>
			</tbody>
		  </table>
		</div>
	</div>
	
		<div id="sectorderecho" class="col-sm-1" >
					   <!-- Sector derecho vacio-->
		</div>
	
</div>
		

</body>

</html>	
			
	