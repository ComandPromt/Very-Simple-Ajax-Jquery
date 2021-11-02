<?php

$resultado="";

if(isset($_GET['name']) && $_GET['name']=="John"){
	
	$resultado="Prueba de get";
	
}

echo $resultado;

?>