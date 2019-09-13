<!DOCTYPE html>
<html>
<head>
	<title>Questão 11</title>
</head>
<body>

	<form action="" method="get">
		<input type="text" name="num1">
		<input type="submit" value="Enviar">
	</form>

<?php
    
    error_reporting(0);

	$num1 = $_GET['num1'];
    
    $result = $num1%4;
    
    $result1 = $num1%10;
    
    $result2 = $num1%400;
    
    //echo $result1;
    
    //function ano_bissexto(){
        if($result==0 && $result1!=0){
            echo "É bissexto";
        } else{
            echo "Não é";
        }
    //} ano_bissexto();

?>
</body>
</html>