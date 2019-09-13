<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];
$n2=$_POST['n1'];

for($i=0;$i<100;$i++){
    echo strtoupper($n1)."<br>";
    $n1 .= " ".$n2;
    
}
?>