
<?php
$cont = fopen('Contador.txt','r');

while(!feof($cont)){
$linha = fgets($cont);        
$linha = $linha +1;

 $conta = fopen('Contador.txt', 'w');
 fwrite($conta, $linha);
 echo "Visitas: ".$linha;
 fclose($conta);
}

fclose($cont);

?>
