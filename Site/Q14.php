<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];
$conta =0;
$n = explode(" ",$n1);

for($i = 0; $i <count($n);$i++){
    if($n[$i]%2==0 && $n[$i]>0){
        echo $n[$i]." é par <br>";
    }else if($n[$i]%2==1){
        echo $n[$i]." é impar <br>";
    } else if ($n[$i]==0){
        echo "0 é 0";
    }
}


?>