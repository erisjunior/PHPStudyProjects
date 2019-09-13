<form action="#" method="post">

<input type="text" name="n1">
<input type="text" name="n2">
<input type="text" name="n3">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];

if($n1 == 0 || $n2==0 || $n3==0){
    echo "";
} else {
    if($n1 == $n2 && $n2 == $n3){
        echo "Equilatero";
    } else if (($n1 != $n2) && ($n1 != $n3) && ($n2 != $n3)){
        echo "Escaleno";
    } else {
        echo "Isosceles";
    }
}
?>