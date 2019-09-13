<?php

	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$soma =	($num1+$num2);
	$sub =	($num1-$num2);
	$mult =	($num1*$num2);
	$div =	($num1/$num2);
	$rest =	($num1%$num2);
	$med =	(($num1+$num2)/2);
	echo "Soma: ".number_format($soma,2,",",".")."<br>";
	echo "Subtração: ".number_format($sub,2,",",".")."<br>";
	echo "Multiplicação: ".number_format($mult,2,",",".")."<br>";
	echo "Divisão: ".number_format($div,2,",",".")."<br>";
	echo "Resto da divisão: ".number_format($rest,2,",",".")."<br>";
	echo "Média: ".number_format($med,2,",",".")."<br>";
?>