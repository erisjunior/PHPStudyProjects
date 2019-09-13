<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];

$n = explode(" ",$n1);
$soma = 0;
$conta=0;

for($i = 0; $i <count($n);$i++){
    if(($n[$i])%2 == 0){
        $soma = $soma + ($n[$i]);
    }else{
        $conta++;
    }
}

echo "Soma de pares: $soma <br>";
echo "Numero de Impares: $conta";

?>