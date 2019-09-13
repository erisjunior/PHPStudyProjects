<?php
$a = array ();

$cont = fopen('Contador.txt','r');

for($b = 0;$b < 3;$b++){
$linha = fgets($cont);
    
$a[$b] = $linha;
}

fclose($cont);

for($i = 0;$i < 3;$i++){
    
    if (md5($a[$i]) == "12cdb9b24211557ef1802bf5a875fd2c"){
        echo "12cdb9b24211557ef1802bf5a875fd2c = ";
        echo $a[$i]; 
    } 
    if (md5($a[$i]) == "e206a54e97690cce50cc872dd70ee896"){
        echo "e206a54e97690cce50cc872dd70ee896 = ";
        echo $a[$i]; 
    }
}
?>