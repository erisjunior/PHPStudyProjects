<form action="#" method="post">
<label>Nome</label>
<input type="text" name="nome">
<label>Idade</label>
<input type="text" name="idade">
<label>Sexo</label>
	<select name="irineu">
		<option value="f">Feminino</option>
		<option value="m">Masculino</option>
	</select>
<input type="submit" value="Enviar">
</form>

<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$irineu = $_POST['irineu'];

$sn = "";

if($irineu == "f" && $idade<25){
    $sn = "ACEITA";
} else{
    $sn = "NÃO ACEITA";
}

echo "Nome: ".$nome." ".$sn;

?>