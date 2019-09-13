<!DOCTYPE html>
<html>
<head>
	<title>Questão 10</title>
</head>
<body>

	<form action="" method="get">
		<input typ9="text" name="num1">
		<input type="submit" value="Enviar">
	</form>

<?php

	$num1 = $_GET['num1'];
    
    $array = explode(',', $num1);

    foreach($array as $valores)
    {
        echo $valores.'<br/>';
    }

?>
</body>
</html>