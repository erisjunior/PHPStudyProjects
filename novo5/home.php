HOME
<form action="" method="get">
<h3>Conversor de Moedas</h3>
<input type="text" name="valor">
<select name="irineu">
	<option value="dolar">Dolar -> Real</option>
	<option value="readl">Real -> Dolar</option>
</select>
<input type="submit" name="ok" value="Converter">

</form>
<?php
$coteka = 3.13;
$valor = $_GET['valor'];
$conv = $_GET['irineu'];
if($conv == "dolar"){
	echo "$".number_format($valor*$coteka, 2, ',',',');
}else{
	echo "R$".number_format($valor/$coteka, 2, ',',',');
}

?>