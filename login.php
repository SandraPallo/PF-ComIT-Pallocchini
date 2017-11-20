<?php session_start();?>    
  

<?php 
if (isset ($_POST['btnEnviar'])) {    
    require_once('clsconexion.php');
    require_once('consultasLogin.php');
    $consultas=new consultasLogin;
    $user=$_POST['inputUser'];
    $pass=$_POST['inputPassword'];
    $login=$consultas->existeUser($user,$pass);
    if ($login!=false){
        foreach ($login as $key => $usuario){
            $_SESSION['usuario']   =$user;
            $_SESSION['idUser']    =$usuario['id_cliente'];
			$_SESSION['cliente']   =$usuario['razonsocial'];
            $_SESSION['logueado']  =true;
                   
        }        
      //  ?>
        <script>
        window.location='index.php';
		
        </script>
       // <?
        //header('Location:index.html');
    }else{
        //echo "no paso";
        //?>
        <script>alert("datos de ingreso invalidos");</script>
        //<?php
    }
          
       
}
		?>
<!DOCTYPE html>
<html lang="es">

  <head>

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

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head
  <body>

	<img class="d-block img-fluid w-100" src="" alt="">
    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block font-weight-bold">Primero de Mayo</div>
    <div class="tagline-lower mt-sm-3 text-center text-expanded text-shadow  text-white mb-5 d-none d-lg-block ">Identificación animal - Insumos veterinarios</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light text-white">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded text-white" href="index.php">Volver Página Principal
              
              </a>
			 </li>
		 </ul>
		</div>
	 </div>
	 </nav>
   <div class="container" id="loguarse">
       			
			<form class="form-signin text-center" name="" method="post" action="?>php echo $_SERVER['PHP_SELF']?>">
                <br><br>
                <input type="text" id="inputUser" name="inputUser" class="" placeholder="Número de Cliente" required><br><br>
                <input type="password" id="inputPassword" name="inputPassword" class="" placeholder="Password" required><br><br>
                <button class="btn btn-lg btn-primary  btn-signin" type="submit" name="btnEnviar">Ingresar</button>
            </form>
        
        
    </div>
	</body>
	
