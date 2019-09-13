<?php
session_start();

error_reporting(0);

if(isset($_GET['acao'])){

$id = $_GET['id'];

if(!isset($_SESSION['carrinho'])){
	$_SESSION['carrinho'] = array();
}

if($_GET['acao'] == "add"){
	if(!isset($_SESSION['carrinho'][$id])){
		$_SESSION['carrinho'][$id] = 1;
	}else{
		$_SESSION['carrinho'][$id] += 1;
	}
}

if($_GET['acao'] == "del"){
	if(isset($_SESSION['carrinho'][$id])){
		unset($_SESSION['carrinho'][$id]);
	}
}

if($_GET['acao'] == "up"){

	
}	

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Carrinho</title>
	<style type="text/css">
		td a {
			color: red;
			 text-align: center; font: 18px Arial; font-weight: bold; text-decoration: none;
		}
	</style>
</head>
<body>

<table align='center' cellpadding="10">
	<thead bgcolor="#EEE">
		<th>Produto</th>
		<th>Quantidade</th>
		<th>Preço Un</th>
		<th>Preço Total</th>
		<th>Ação</th>
	</thead>
	<tbody>
		<?php
		if(count($_SESSION['carrinho']) == 0){
			echo "
			<tbody>
			<tr><td colspan='5' align='center'>Não há produtos no carrinho!</td></center></tr>
			</tbody>
			";
		}else{
		require("conexao.php");
		$ttotal = 0;
		foreach ($_SESSION['carrinho'] as $id => $qnt) {

			$sql = "SELECT * FROM produtos WHERE id = '$id'";
			$query = mysqli_query($con, $sql);
			$dados = mysqli_fetch_assoc($query);

			$nome = $dados['nome'];
			$preco = $dados['preco'];
			$total = $preco * $qnt;
			echo "<tr>
			<td>$nome</td>
			<td><input type='text' size='2' value='".$qnt."'></td>
			<td>R$ ".number_format($preco,2,',','.')."</td>
			<td>R$ ".number_format($total,2,',','.')."</td>
			<td align='center'><a href='?acao=del&id=".$id."'>X</a></td>
			</tr>";
			$ttotal += $total;

		}		
		}

		?>
	</tbody>
	<tfoot>
		<tr>
			<td bgcolor="#ccc" colspan="2"><a href="?acao=up">Atualizar pedidos</a></td>
			<td>Total: </td>
			<td>
			R$ <?php echo number_format($ttotal,2,',','.');?>
			</td>
		</tr>
		<tr>
		<td>
		<a href="index.php">Continuar Comprando!</a>
		</td>
		</tr>
	</tfoot>

</table>
</body>
</html>




