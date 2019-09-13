<form action="#" method="post">
<input type="text" name="n1">
<input type="submit" value="Enviar">
</form>

<?php
$n1=$_POST['n1'];

if($n1%10==0 || $n1%5==0 || $n1%2==0){
    if($n1%10 == 0){
        echo $n1." É divisivel por 10<br>";
    }

    if($n1%5 == 0){
        echo $n1." É divisivel por 5<br>";
    }

    if($n1%2 == 0){
        echo $n1." É divisivel por 2<br>";
    } 
} else {
    echo $n1." Não é divisel nem por 10, nem por 5 ou por 2";
}
?>