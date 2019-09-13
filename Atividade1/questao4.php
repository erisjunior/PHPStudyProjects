<?php

	$texto = $_GET['texto'];

	echo "Quantidade de caracteres: ".strlen("$texto")."<br>";
	echo ucfirst("$texto")."<br>";
	echo strrev($texto);

?>
