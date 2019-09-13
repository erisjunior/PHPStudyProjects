<?php
$nome = $_POST['nome'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$end = $_POST['end'];

$dado = "$nome : $tel : $cel : $email : $end\n";

$file = fopen("dados.txt","a");

fwrite($file,$dado);
fclose($file);

if ($file){ 
    echo "<meta http-equiv='refresh' content='3; url=ListaContatos.php' />";
}else{
	echo "Error ao Gravar";
}
?>