<?php 
date_default_timezone_set("America/Fortaleza");

$data = date("d")." de ".date("M")." de ".date("y")."<br>";
$hora = date("H")."<br>";
$saud = "";

if($hora>6 && $hora<12){
	$saud = "Bom dia";
} else if ($hora>12 && $hora<18){
	$saud = "Boa tarde";
} else {
	$saud = "Boa noite";
}

echo "Pereiro City (Chabocão), ".$data.$saud;

?>
