<?php
?>

<!DOCTYPE html>
<!--

-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
              
		<!-- bootstrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		  
		<!-- links para los iconos de google material -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
		
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
		<link href="css/business-casual.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css"  href="css/estilocontac.css"> 

        
    </head>
	
    <body>		
		
	<img class="d-block img-fluid w-100" src="" alt="">
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

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
			 <li class="nav-item px-lg-3">
               <input class="btn btn-primary" type="submit" value="Exclusivo Clientes" onclick = "location='login.php'"/>
            </li>
     	  </ul>
		</div>
	 </div>
	</nav>
	<!-- *****************************************************************************************************************-->
	<!-- Navigation Cliente-->
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
							<a class="nav-link text-uppercase text-expanded" >Bienvenido <?php echo $clientevet ?></a>
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
					  <a class="nav-link text-uppercase text-expanded text-blue" href="cerrarsesion.php">Cerrar Sesión</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div
	<!-- Navigation Cliente-->
	
	
	
	<!--  FORM CONTACTO -->
		<div class="container">
            <div class="row">
                <div class="col-sm-6 col-centered" >
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <h1 id="hcontact">Contáctenos</h1>
                        </div>
                    <form action="" method="POST">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                <input type="text" name="InputName" placeholder="Nombre" class="form-control" autofocus="autofocus" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                <input type="email" name="InputEmail" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                <input type="number" name="InputCno" placeholder="Teléfono" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
                                <textarea name="InputMessage" rows="6" class="form-control" type="text" required></textarea>
                            </div>
                        </div>
                        <div class="">
                        <button type="submit" class="btn btn-info pull-right">Enviar <span class="glyphicon glyphicon-send"></span></button>
						
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

	<!-- FORM CONTACTO -->
	
	<!-- footer -->
		<footer class="bg-faded text-center py-5">
				<div class="container">
					   <img  src="img/logos/allflex1.jpg">
					   <img  src="img/logos/picana1.jpg">
					   <img  src="img/logos/lider.png" >
					   <img  src="img/logos/fix1.png">
					   <img  src="img/logos/mustad1.jpg">
					   <img  src="img/logos/arriero.png">
					   <img  src="img/logos/trutest1.jpg">
					   <img  src="img/logos/giber1.jpg"><br>
					   <p class="m-0">Copyright &copy; Los Alamos Group 2017</p>
					<!-- footer links -->
				
		</footer>
	<!-- /footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
