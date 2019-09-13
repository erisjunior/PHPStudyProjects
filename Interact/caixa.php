<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="row"><div class="col-sm-12">
<h1 style="font-size: 40px;"><center><span style="color: rgb(51,122,183)">R$</span><span style="font-size: 85px;">

<?php

	require("conexao.php");

	$result = 0;

		$sql = "SELECT * FROM caixa";
		$query = mysqli_query($con, $sql);

		while ($dados =  mysqli_fetch_assoc($query)) {

			$result = $dados['valor'] + $result;

		}

		echo $result;


	echo "</span></center></h1>";

?>
</div></div>

<div class="row"><div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
	if ($_SESSION['cargo'] == "Presidente" || $_SESSION['cargo'] == "Diretor de Tesouraria") {
		include 'caixa_add.php';

		if (isset($_GET['edit'])) {
			include 'caixa_edit.php';
		}
	}

?>
<h3>Transações</h3>
<table class="table table-striped">
	<thead bgcolor="#ccc">
		<th>Data</th>
		<th>Valor</th>
		<th colspan="2">Origem</th>
		<?php
			if ($_SESSION['cargo'] == "Presidente" || $_SESSION['cargo'] == "Diretor de Tesouraria") {
				echo "<th colspan='2'>Ação</th>";
			}
		?>
	</thead>
	<tbody>
		<?php

			$sql = "SELECT * FROM caixa ORDER BY data ASC";
			$query = mysqli_query($con, $sql);

			while ($dados =  mysqli_fetch_assoc($query)) {

				$date = $dados['data'];

				$d1 = substr($date, -2);
				$d2 = substr($date, -5,2);
				$d3 = substr($date, -10,4);

				$data = $d1."/".$d2."/".$d3;

				echo "<tr>

					<td>".$data."</td>
					<td>".$dados['valor']."</td>
					<td colspan='2'>".$dados['origem']."</td>";

				if ($_SESSION['cargo'] == "Presidente" || $_SESSION['cargo'] == "Diretor de Tesouraria") {
					echo "<td><a href='caixa_remove.php?exclui=".$dados['id']."'>Excluir</a></td>
					<td><a href='index.php?envia=caixa&&edit=".$dados['id']."'>Editar</a></td>";
				}


				echo "</tr>";
			}

		?>
	</tbody>

</table>
</div></div>

</body>
</html>