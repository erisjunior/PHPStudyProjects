<?php
$file = file("palavras.txt");

$sort = array_rand($file);
$palavra = $file[$sort];

$p = fopen("palavra.txt","w");
fwrite($p,$palavra);
fclose($p);

echo "<meta http-equiv='refresh' content='0; url=jogo.php?jogo=NovoJogo' />";

?>