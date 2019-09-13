<?php
error_reporting(0);

$valor = $_GET['temp'];
$conv = $_GET['conv'];

if ($conv == "c"){
	 echo "F = ".((9*$valor)/5)+32; 
}else{
	 echo "C =  ".(5*($valor-32))/9;
}

?>