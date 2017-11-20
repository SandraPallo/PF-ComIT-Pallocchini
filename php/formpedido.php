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
        <title>Formulario Pedido</title>
			<link rel="stylesheet" type="text/css" href="css/estilopedido.css" /> 
		  
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> 
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		     
			<!--<script src = "jquery.js" type = "text/javascript" ></script>-->
			<script src = "jquery.maskedinput.js" type= "text/javascript" ></script> 
			<script>
				 jQuery(function($){
			                $("#cuig").mask("aa999");
							$("#renspa").mask("99.999.9.99999/99");
						    $("#cuit").mask("99-99999999-9");
							$("#cv").mask("999");
						
						 					
					});
			</script>	
			<script src="funciones.js" type = "text/javascript"></script>


    </head>
		
  <body>
	 						
				
	<form id="pedido" action="php/enviarpedido.php" method="post" >
					
				
			<div id="titulo" >				
					<p><strong ><h3 align="center">Formulario de solicitud de caravanas de resolución SENASA</h3></strong></p>
			</div>
					
			<div id="contenedor" class="fluid row">	
						
				<div id="sectorcentral" class="col-sm-12">
				
				  
					<br>
					<label>Fecha:</label>
					<input type="date" name="fechaactual" required readonly  size="1"  value="<?php echo date('Y-m-d'); ?>"></input >
										
					<label>Num. Cliente</label>
					<input  id="id_vet" name="id_vet" type="text" size="1" disabled VALUE="<?php echo $userId ?>" ></input>
					<label>Nombre</label>
					<input  id="clientevet" name="veterinario" readonly type="text" VALUE="<?php echo $clientevet ?>" ></input><br><br><br>
										
					<label>Productor</label>
					<input id="productorped" type="textinput" name="productorped"  size="120px" required placeholder="ingrese aquí el nombre del productor"/></input>
					
					<label>CUIT Productor</label>
					<input id="cuit"  type="textinput" name="cuit"  size="20px" placeholder="00-00000000-0"></input><br><br>
									
					<label>CUIG</label>
					<input id="cuig" type="textinput" name="cuig" required placeholder="XX999" pattern="[A-Z]{2}[0-9]{3}" ></input>
					
					<label>CV</label>
					<input id="cv" type="number" name="cv" required min="100" max="299"></input>
					
					<label>RENSPA</label>
					<input id="renspa" required name="renspa" type="text" placeholder="00.000.0.00000/00"></input>
					
					<label>Establecimiento</label>
					<input id="nomestablecimiento" type="textinput" size="40px" name="nomestablecimiento" ></input><br><br>
					
								
					<label>Cantidad:</label>
					<input id="cantidad" name="cantidad" type="number" required min="25" max="1500" step="25" /><br>
									

					<div>
					<br><label>Pedido de -></label>
					<select id="pedidodecarav" onchange="opcionbovino()" >
					
							 <option disabled selected value>-Seleccione una opción--</option>
							 <option value="bovino" >BOVINO</option>
							 <option value="equino" >EQUINO</option>
							 <option value="ciervo" >CIERVO</option>
							 <option value="ovino"  >OVINO</option>
							 
					</select> 
					
					</div>
					
					
					<div id="clasecaravana" name="clasecaravana" class="oculto" align="center" >
							<br>
							
							<img src="img/boton.jpg" />
							<input type="radio" onclick="(getElementById('tipocarav').value='Botón');document.getElementById('colorinscripcion').style.display='none';" id="botbov" name="caravanade">Botón</input>
							
							<img src="img/doble.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Botón + Tarjeta'); document.getElementById('colorinscripcion').style.display='none';" id="botbov" name="caravanade">Botón + Tarjeta</input>
	
							<img src="img/cue.jpg"/>
							<input type="radio" onclick=" getElementById('tipocarav').value='Tarjeta U.E.';document.getElementById('colorinscripcion').style.display='none'" id="botbov" name="caravanade">Tarjeta U.E.</input>
		
							<img src="img/manejo.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Combinada');  document.getElementById('colorinscripcion').style.display='block'" id="botbov" name="caravanade">Combinada</input>
			
							<img src="img/electronica.jpg"/>
							<input type="radio" onclick="(getElementById('tipocarav').value='Electrónica');document.getElementById('colorinscripcion').style.display='none'" id="botbov" name="caravanade">Electrónica</input>
						
					</div>	
					
					<div id="tipocaravana" name="tipocaravana" class="oculto">
						<label id="labeltipocarav">Tipo de Caravana-></label>
						<input id="tipocarav"  type="textinput" name="tipocarav" disabled ></input>
					</div>	
					
					<div id="colorinscripcion" name="colorinscripcion" class="oculto" align="center"  >
						
						<label>Color:</label>
						<select id="colorcarav"  name="colorcarav" type="text" >
							
							 <option disabled selected value>-Seleccione una opción--</option>
							 <option value="amarillo" >Amarillo</option>
							 <option value="azul" >Azul</option>
							 <option value="blanco">Blanco</option>
							 <option value="naranja">Naranja</option>
							 <option value="rojo">Rojo</option>
							 <option value="verde">Verde</option>			 
							 
						</select> 
						
						<label>Inscripción:</label>
						<input id="inscripcion" name="inscripcion" type="textinput"  /><br>

					</div>
					<div>
						
						
						<br><button id="enviar" type="submit" >Enviar Pedido</button>
						<img src="img/mail.png"/>
					</div>
					
				</div>		

						
			</div> <!--del contenedor-->


				
			 		
	</form> 
   	<!----------------------------------------------------------------------------------------------------------------------->
	
	<form  action="php/busqueda.php" method="post">
						 
					 
				    <div id="historial" >
					   
					    <input  id="id_vet" name="id_vet" type="text" size="1" align="left" readonly VALUE="<?php echo $userId ?>" >Num.CLiente</input>
  
				        <br><h6><label>Ver historial de pedidos por: </h6></label>
						<h6><label>(si no selecciona ningun campo verá todos los pedidos realizados por usted)</h6></label><br>
						
						<label>Productor</label>
						<input type="radio" value="r_productor" id="r_productor"  name="buscar_por"/>
						<input id="productorb" type="textinput" name="productorb"  class="col-sm-2"></input>
						
						
						
						<label>CUIG</label>
                       	<input type="radio" value="r_cuig" id="r_cuig" name="buscar_por" />	
						<input id="cuigb" type="textinput" name="cuigb"  class="col-sm-2"></input>						
						
								
						
						<label>RENSPA</label>
						<input type="radio" value="r_renspa" id="r_renspa" name="buscar_por"/>
						<input id="renspab"  name="renspab" type="textinput"  class="col-sm-2"></input>
						
					
						
						<input type="submit" class="col-sm-2"  id="buscarb" value="Historial"/>
                        
						
					</div>
	</form>
	

  </body>

</html>