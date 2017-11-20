<?php

header('Content-type: application/pdf');

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

header('Content-Disposition: inline; ');


readfile('listaprecios.pdf');
?>