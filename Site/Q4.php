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

if($n1<$n2 && $n2<$n3){
    echo $n3." ".$n2." ".$n1;
}
else if($n1<$n3 && $n3<$n2){
    echo $n2." ".$n3." ".$n1;
} 
else if($n2<$n3 && $n3<$n1){
    echo $n1." ".$n3." ".$n2;
}
else if($n3<$n2 && $n2<$n1){
    echo $n1." ".$n2." ".$n3;
} 
else if($n3<$n1 && $n1<$n2){
    echo $n2." ".$n1." ".$n3;
} 
else if($n2<$n1 && $n1<$n3){
    echo $n3." ".$n1." ".$n2;
}

?>