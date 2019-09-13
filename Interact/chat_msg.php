<?php
session_start();

require("conexao.php");

$sqlM = "SELECT * FROM chat";
$queryM = mysqli_query($con, $sqlM);

$contaM = mysqli_num_rows($queryM);

date_default_timezone_set('America/Fortaleza');

if($contaM > 0){

	while($msgs = mysqli_fetch_assoc($queryM)){

	$m = $msgs['nome_send'].": ".$msgs['msg']."\n";
	echo $m;

	}

}else{
	echo "Inicie a conversa! :)";
}
?>