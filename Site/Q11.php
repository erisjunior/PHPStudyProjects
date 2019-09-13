<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];

for($i=1;$i<11;$i++){
    echo $n1." + ".$i." = ".$n1+$i."<br>";
}

for($o=1;$o<11;$o++){
    echo $n1." - ".$o." = ".$n1-$o."<br>";
}

for($a=1;$a<11;$a++){
    echo $n1." X ".$a." = ".$n1*$a."<br>";
}

for($e=1;$e<11;$e++){
    echo $n1." / ".$e." = ".$n1/$e."<br>";
}

?>