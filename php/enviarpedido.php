
<?php
           
	$mail="pedidosprimerodemayo@gmail.com";
	
	$cuando =$_POST['fechaactual'];
	echo $cuando;
    $veterinario= $_POST ['veterinario'];
    $productorped= $_POST ['productorped'];
    $cuit= $_POST ['cuit'];
	$cuig= $_POST ['cuig'];
	$cv= $_POST ['cv'];
	$renspa= $_POST ['renspa'];
	$nomestablecimiento= $_POST ['nomestablecimiento'];
	$cantidad= $_POST ['cantidad'];
	$tipocar= $_POST ['clasecaravana'];
	$color= $_POST ['colorcarav'];
	$inscrip= $_POST ['inscripcion'];
	$pedidode= $_POST ['pedidodecarav'];
	

	
	
	$message= "
	Fecha pedido: ".$cuando."
	Pedido de: ".$veterinario."
	Productor: ".$productorped."
	Cuit: ".$cuit."
	CUIG: ".$cuig."
	CV: ".$cv."
	RENSPA: ".$renspa."
	Nombre Establecimiento: ".$nomestablecimiento."
	Cantidad: ".$cantidad."
	Tipo Caravana: ".$tipocar."
	Color: ".$color."
	Inscripcion: ".$inscrip."
	Pedido de: ".$pedidode."
    
	";
	
$subject="pedididiiddidii0¿";
	// Always set content-type when sending HTML email

// More headers
$headers = "From: <pedidosprimerodemayo@gmail.com>" . "\r\n";



IF (mail($mail,$subject,$message,$headers)){
        echo "enviado correctamente";}

	
	
?>
		
			
			
