<?php 
?>

<!DOCTYPE html>
<html lang="es">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Primero de Mayo - Insumos Veterinarios - Identificación Animal</title>
		<!-- bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		  
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Primero de Mayo - Insumos Veterinarios - Identificación Animal</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom fonts for this template -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


		<!-- Mis estilos CSS -->
		<link href="css/business-casual.css" rel="stylesheet">
		<link rel="stylesheet" href="css/estilocontac.css" type="text/css" >
	    <link rel="stylesheet" href="css/estiloubicacion.css" type="text/css" >
</head>


<body>
	<img class="d-block img-fluid w-100" src="" alt="">
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow  text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-3">
      <div class="container">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="dondestamos.php">¿Dónde estamos?</a>
            </li>
			<li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="php/catalogo.php">Catálogo</a>
            </li>
           
            <li class="nav-item px-lg-3">
              <a class="nav-link text-uppercase text-expanded" href="contacto.php">Contacto</a>
            </li>
				<li class="nav-item px-lg-4" >
              <a class="nav-link text-uppercase text-expanded" href="novedades.php">Novedades</a>
            </li>
			 <li class="nav-item px-lg-3" name="accliente">
               <input class="btn btn-primary" type="submit" value="Exclusivo Clientes" onclick = "location='login.php'"/>
            </li>
          <!------ LOGIN ------->
		</ul>
		</div>
	  </div>
	</nav>
	<!-- *****************************************************************************************************************-->
	<div id="menucliente" align="center" 
	
			<?php 
					session_start();
					require_once("clsConexion.php");

					$user       = $_SESSION['usuario'];
					$logueado   = $_SESSION['logueado'];
					$userId     = $_SESSION['idUser'];
					$clientevet  = $_SESSION['cliente'];

					if ($logueado=true){ echo ' style="display: block" ';}
			?> > 
			<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
			  <div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				  <ul class="navbar-nav mx-auto">
					<li class="nav-item active px-lg-4">
					  	    <img src="img/login.png">
							<a class="nav-link text-uppercase text-expanded" >Bienvenido <?php echo $clientevet ?> </a>
					       <span class="sr-only">(current)</span>
					</li>
					  <li class="nav-item active px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/cuentacorriente.php">Cuenta Corriente</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/listaprecios.php">Lista de Precios</a>
					</li>
					<li class="nav-item px-lg-2">
					  <a class="nav-link text-uppercase text-expanded" href="php/formpedido.php">Formulario de Pedido</a>
					</li>
					<li class="nav-item px-lg-2">
					   <button class="btn btn-primary"   onclick="login.php">Exclusivo Clientes</button>
					</li>
				 </ul>
			  </div>
			</div>
		</nav>
	</div>	
	
			<!-- Mapa -->
			<div class="container" id="map">
				<div class="row-fluid">
					<div class="span8">						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8805.345180553293!2d-62.2693353791157!3d-38.7141435782815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95edbca9906ade11%3A0x7d6986d9c7b09653!2sCasanova+266%2C+B8000HWF+Bah%C3%ADa+Blanca%2C+Buenos+Aires!5e0!3m2!1sen!2sar!4v1511115399503" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>						
					</div>				
				</div>
			</div>
			<!-- Mapa -->	
		
		
		
		<!-- footer -->
		<div id="footer">
			<div id="footerbg">
				<div class="wrap">
				
					<!-- footer links -->
					<p id="footer_menu">
						<a>by Los Alamos Group</a>
						Todos los derechos reservados

					
					<p id="copy">Identificación e Insumos Veterinarios</span></p>
					
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!-- /footer -->
		
	</div>
</body>
</html>
