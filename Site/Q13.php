<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];
$conta =0;
$n = explode(" ",$n1);

for($i = 0; $i <count($n);$i++){
    if($n[$i]>99 && $n[$i]<201){
        $conta++;
    }else if($n[$i]==0){
        $i=count($n);
    }
}

echo "Numero: ".$conta;

?>