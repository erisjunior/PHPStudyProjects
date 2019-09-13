<!DOCTYPE html>
<html>
<head>
	<title>Trabalhando com Datas</title>
</head>
<body>
<?php
date_default_timezone_set("America/Fortaleza");

$dados = "<h4>Acesso". date("d/m/Y H:i:s A ")."</h4><h3> IP: ".$ip = getenv("Remote_ADDR")."</h3><hr>";


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


$fp = fopen('ips.html','a');
fwrite($fp, $dados);
fclose($fp);
?>
</body>
</html>