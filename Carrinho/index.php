<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Carrinho</title>
</head>
<body>

<h2>Produtos</h2>

<hr>

<?php

	require("conexao.php");

	$sql = "SELECT * FROM produtos";
	$query = mysqli_query($con,$sql);

	while($dados = mysqli_fetch_assoc($query)){
		echo "<h4>".$dados['nome']."</h4>";
		echo "<img src='images/".$dados['imagem']."'>";
		echo "Preço: ".$dados['preco'];
		echo "<a href = 'carrinho.php?acao=add&id=".$dados['id']."'>Comprar</a>";
		echo "<hr>"; 
	}

?>

</body>
</html>
