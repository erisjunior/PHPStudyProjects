<?php
$conv = $_GET['converter'];

$t1 = $_GET['temperatura1'];

if ($conv == "C>F"){
	 echo "F = ".((9*$t1)/5)+32;  
}else{
	 echo "C =  ".(5*($t1-32))/9;
}

?>