<?php

$ind = $_GET['indice'];

$file = file('dados.txt');

foreach($file as $k=>$linha){
    unset($file[$ind]);
}

file_put_contents('dados.txt',$file);

echo "<meta http-equiv='refresh' content='0;url=ListaContatos.php' />";

?>