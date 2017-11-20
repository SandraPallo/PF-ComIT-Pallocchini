function opcionbovino()
{
						var opt1=document.getElementById("pedidodecarav").value;
		 
						if (opt1=="bovino")
						{
								 document.getElementById("clasecaravana").style.display='block';
								 document.getElementById("tipocaravana").style.display='block';
								document.getElementById("colorinscripcion").style.display='none';
						}
						if (opt1=="equino")
						{
							document.getElementById("clasecaravana").style.display='none';
							document.getElementById("tipocaravana").style.display='none';
							document.getElementById("colorinscripcion").style.display='none';
						   
						}
						if (opt1=="ciervo")
						{
							document.getElementById("clasecaravana").style.display='none';
							document.getElementById("tipocaravana").style.display='none';
							document.getElementById("colorinscripcion").style.display='none';
							
						}
						if (opt1=="ovino")
						{
							 document.getElementById("clasecaravana").style.display='none';
							 document.getElementById("tipocaravana").style.display='none';
							 document.getElementById("colorinscripcion").style.display='block';
							 
						}							

}								

$(document).ready(function()
{
									
								$("input[name=buscar_por]").click(function() {	 
									var eleccion=$(this).val();
																	
									var var1 = document.getElementById('cuigb');
									var var2 = document.getElementById('renspab');
									var var3 = document.getElementById('productorb');
								
									
									if (eleccion=='r_cuig'){
										
										var2.disabled=true;
										var3.disabled=true;
										var1.disabled=false;
										var3.value= ' ';
										var2.value= ' ';
									}
                                 else if (eleccion=='r_renspa'){
										
										var1.disabled=true;
										var3.disabled=true;
										
										var2.disabled=false;
										var1.value= ' ';
										var3.value= ' ';
									}
								else if (eleccion=='r_productor'){
										
										var1.disabled=true;
										var2.disabled=true;
										
										var3.disabled=false;
										 var1.value= ' ';
										 var2.value= ' ';
									}
								})  
					})





