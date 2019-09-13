<form action="#" method="post">

<input type="text" name="n1">

<input type="submit" value="Enviar">

</form>

<?php

$n1=$_POST['n1'];

for($i=1;$i<$n1+1;$i++){
    echo "SOL <br>";
}

?>