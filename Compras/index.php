<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<meta charset="utf-8">
	<style type="text/css">
		* {margin:0 auto; padding:0px}
		#produtos { height:250px; float: left; margin: 10px 5px 5px 10px; text-align: center; background: #fff; border: 1px solid #CCC}
		#produtos a {position:  relative; top: 15px; background: red; color: white; padding: 5px 45px; text-decoration: none; cursor: pointer;}
		img { width: 180px; height: 150px; }
	</style>
</head>
<body>
<h2>Produtos</h2>
<hr/>
<?php
require("conexao.php");
$sql = "SELECT * FROM produtos";
$query = mysqli_query($con, $sql);

while($dados = mysqli_fetch_assoc($query)){
	echo "<div id='produtos'>";
	echo "<h4>".$dados['nome']."</h4>";
	echo "<img src='images/".$dados['imagem']."'/>";
	echo "<h3>Preço: ".$dados['preco']."</h3>";
	echo "<a href='carrinho.php?acao=add&id=".$dados['id']."'>Comprar</a>";
	echo "</div>";
}

?>
</body>
</html>