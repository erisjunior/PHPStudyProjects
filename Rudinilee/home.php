<h3>Conversor de Moedas</h3>
<form action="" method="get">

	<input type="text" name="valor">
	<label></label>
	<select name="irineu">
		<option value="dolar">Real > Dolar</option>
		<option value="real">Dolar >Real</option>
	</select>
	<input type="submit" name="ok" value="Converter">
</form>
<?php
error_reporting(0);
$cotacao = 3.13;

$valor = $_GET['valor'];
$conv = $_GET['irineu'];

if ($conv == "dolar"){
	 echo "$ ".number_format($valor/$cotacao,2,',','.'); 
}else{
	 echo "R$ ".number_format($valor*$cotacao,2,',','.');
}

?>