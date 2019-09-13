<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>
<?php
$a=$_POST['n1'];

//$e = explode(" ",$a);

$e = substr($a,0,strlen($a));

$r="";
$f="";

for($i=0;$i<strlen($a);$i++){
    $o = ord($e[$i]);
    $t = decbin($o);
    $r .=decbin($o);
    echo $e[$i]." = ".$o." = ".$t."<br>";
}

for($u=0;$u<strlen($a);$u++){
    $f .= chr(bindec(substr($r,$u*7,7)));
}

echo "<br>".$r;

echo "<br>".$f;

//echo $b = bindec($a);
//echo "Decimal: ".bindec($a)." Binario: ".decbin($a);
//echo "<br> ASCII: ".ord($a);
//echo "<br> Caractere: ".chr($a);

//$b = "1010101010011";

?>